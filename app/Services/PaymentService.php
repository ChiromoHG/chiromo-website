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

    public function payment()
    {

        $access_token = $this->get_accesstoken();
        if($access_token !== false){


            date_default_timezone_set('Africa/Nairobi');

            $url = "https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest";
            $curl_post_data = [
                'BusinessShortCode' => getenv('MPESA_SHORTCODE'),
                'Password' => $this->lipaNaMpesaPassword(),
                'Timestamp' => date('YmdHms'),
                'TransactionType' => "CustomerPayBillOnline",
                'Amount' => 1, // $price
                'PartyA' => '254727750213',
                'PartyB' => getenv('MPESA_PARTYB'),
                'PhoneNumber' => '254727750213',
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

            if ($curl_response === false) {
                $curl_error = curl_error($curl);
                curl_close($curl);
                return "Curl error: " . $curl_error;
            } else {
                $response = json_decode($curl_response, true);

                if (isset($response['ResponseCode']) && $response['ResponseCode'] == 0) {
                    $data = [
                        'transaction_uuid' => Uuid::uuid4()->toString(),
                        'merchantRequestID' => $response['MerchantRequestID'],
                        'checkoutRequestID' => $response['CheckoutRequestID'],
                    ];

                    try {
                        $this->apiModel->savePaymentsData($data);
                        return "Payment request submitted successfully!";
                    } catch (\Exception $e) {
                        return "Error saving payment data: " . $e->getMessage();
                    }

                } else {
                    return "Error response from M-Pesa API: " . json_encode($response);
                }
            }

        }
    }



    public function lipaNaMpesaPassword(): string
    {
        //timestamp
        $timestamp = date('YmdHms');
        //passkey
        $passKey = getenv('PASSKEY');

        $businessShortCOde = getenv('MPESA_SHORTCODE');
        //generate password
        return base64_encode($businessShortCOde . $passKey . $timestamp) ?? 'No Password Generated';

    }


    function newAccessToken()
    {

        $logger = service('logger');
        $consumer_key = getenv('CONSUMER_KEY');
        $consumer_secret = getenv('CONSUMER_SECRET');
        $credentials = base64_encode($consumer_key . ":" . $consumer_secret);
        $url = "https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";


        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Authorization: Basic " . $credentials, "Content-Type:application/json"));
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $curl_response = curl_exec($curl);
        curl_close($curl);
        $logger->info('Access token response: ' . json_encode($curl_response));
        log_message('info', 'Access token response: ' . json_encode($curl_response));
        if($curl_response === false){
            $curl_error = curl_error($curl);
            curl_close($curl);
            return "Curl error: " . $curl_error;
        }else{
            $response = json_decode($curl_response, true);
            log_message('debug', 'Access token response: ' . json_encode($response));
            return $response['access_token'] ?? "Error response from M-Pesa API: " . json_encode($response);
        }
    }


    /**
     * @throws Exception
     */
    function get_accesstoken()
    {
        $consumer_key = getenv('CONSUMER_KEY');
        $consumer_secret = getenv('CONSUMER_SECRET');
        $url = "https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";


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
//        $access_token = $response->access_token;

        // The above $access_token expires after an hour, find a way to cache it to minimize requests to the server
        if (!$access_token) {
            throw new Exception("Invalid access token generated", $response);
        }
        return $access_token;
    }

}