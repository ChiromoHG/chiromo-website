<?php

namespace App\Services;
use CodeIgniter\Config\BaseService;
use App\Models\ApiModel;
use Exception;
use Ramsey\Uuid\Uuid;
use CodeIgniter\API\ResponseTrait;

class PaymentService extends BaseService
{
    use ResponseTrait;


    protected $apiModel;
    public function __construct()
    {
        $this->apiModel = new ApiModel();
    }

    private function trimPhoneNumber($phoneNumber){
        $trimPhoneNumber = ltrim($phoneNumber, '0');
        return '254' . $trimPhoneNumber;
    }

    /**
     * @throws Exception
     */
    public function payment($data)
    {

        $access_token = $this->get_accesstoken();

        if(!$access_token){
            return false;
        }
      
        date_default_timezone_set('Africa/Nairobi');

        $url = "https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest";
        $curl_post_data = [
            'BusinessShortCode' => getenv('MPESA_SHORTCODE'),
            'Password' => $this->lipaNaMpesaPassword(),
            'Timestamp' => date('YmdHms'),
            'TransactionType' => "CustomerPayBillOnline",
            'Amount' => 1, // $price
            'PartyA' => $this->trimPhoneNumber($data['phone_number']),
            'PartyB' => getenv('MPESA_PARTYB'),
            'PhoneNumber' => $this->trimPhoneNumber($data['phone_number']),
            'CallBackURL' => "https://saccohisa.mzawadi.com/payment/payment_callback",
            'AccountReference' => getenv('ACCOUNT_REF'),
            'TransactionDesc' => getenv('TRANSACTION_DESC'),
        ];

        $data_string = json_encode($curl_post_data);

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization:Bearer ' . $this->get_accesstoken()));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        $curl_response = curl_exec($curl);

        if (!$curl_response) {
            $curl_error = curl_error($curl);
            curl_close($curl);
            return "Curl error: " . $curl_error;
        } 

        $response = json_decode($curl_response, true);

        if(!isset($response['ResponseCode']) && !$response['ResponseCode'] == 0){

            return "Error response from API";
        }

        $stkData = [
            'transaction_uuid' => Uuid::uuid4()->toString(),
            'merchantRequestID' => $response['MerchantRequestID'],
            'checkoutRequestID' => $response['CheckoutRequestID'],
            'service_uuid' => $data['service_id'],
            'doctor_type' => $data['doctor_type'],
            'appointment_time'=> $data['appointment_time'],
            'appointment_date' => $data['appointment_date'],
            'appointment_description' => $data['appointment_description'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'dob' => $data['dob'],
            'email' => $data['email'],
            'mpesa_number' => $data['phone'],
            'residency' => $data['residency'],
            'nationality' => $data['nationality'],
            'gender' => $data['gender'], 
        ];

        try {
            $this->apiModel->savePaymentsData($stkData);
        } catch (\Exception $e) {
            return "Error saving payment data: " . $e->getMessage();
        }
        return true;
    }


    private function lipaNaMpesaPassword(): string
    {
        //timestamp
        $timestamp = date('YmdHms');
        //passkey
        $passKey = getenv('PASSKEY');

        $businessShortCOde = getenv('MPESA_SHORTCODE');
        //generate password
        return base64_encode($businessShortCOde . $passKey . $timestamp) ?? 'No Password Generated';

    }

    /**
     * @throws Exception
     */
    private function get_accesstoken()
    {
        $consumer_key = getenv('CONSUMER_KEY');
        $consumer_secret = getenv('CONSUMER_SECRET');
        $url = getenv('REQUEST_URL_ACCESS_TOKEN');


        $credentials = base64_encode($consumer_key . ":" . $consumer_secret);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Basic ' . $credentials, 'Content-Type: application/json'));
        $response = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response);

        log_message('info', 'Access token response: ' . json_encode($response));

        isset($response->access_token) ? $access_token = $response->access_token : $access_token = false;
       $access_token = $response->access_token;

        // The above $access_token expires after an hour, find a way to cache it to minimize requests to the server
        if (!$access_token) {
            throw new Exception("Invalid access token generated");
        }
        return $access_token;
    }

}