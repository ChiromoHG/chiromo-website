<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Model\ApiModel;
use Modules\Admin\Models\ServicesModel;

class Appointment extends BaseController
{
    private $servicesModel;
    private $apiModel;
    public function __construct()
    {

        $this->servicesModel = model(ServicesModel::class);
        $this->apiModel = model(ApiModel::class);
    }
    public function appointment()
    {
        return view('main/appointment');
    }

    public function onlineTherapy(){
        return view('main/online-therapy');
    }

    public function patientAppointment(){
        return view('main/patient-appointment');
    }
    public function patientPrescription(){
        return view('main/patient-prescription');
    }
    public function patientPayment(){
        return view('main/patient-payment');
    }

    public function patientSettings(){
        return view('main/patient-settings');
    }

    public function myAppointments(){
        return view('main/my-appointments');
    }

    public function appointmentBookings(){
        $data = [];
        try {
            $data['services'] = $this->servicesModel->getAllServices();
        }catch (\Exception $e){
             return $e->getMessage();
        }

        if($this->request->getMethod() == 'post') {
            $rules = [
                'hospital_service' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Please select the service field',
                    ]
                ],
                'doctor_type' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Please select your doctor type',
                    ]
                ],
                'date' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Please select the date field',
                    ]
                ],
                'appointment_time' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Time field is required',
                    ]
                ],
                'description' => [
                    'rules' => 'max_length[100]',
                    'errors' => [
                        'max_length' => 'The maximum length of the description is 100 characters',
                    ]
                ],
            ];


            if(!$this->validate($rules)){
                $data['validation'] = $this->validator;
            }else{

                $service = $this->request->getPost('hospital_service');
                $doctorType = $this->request->getPost('doctor_type');
                $date = $this->request->getPost('date');
                $time = $this->request->getPost('appointment_time');
                $description = $this->request->getPost('description');

                try{
                    $serviceName = $this->servicesModel->getServiceName($service);
                }catch (\Exception $e) {
                    return $e->getMessage();
                }

                $sessionData = [
                    'service' => $serviceName['service_name'],
                    'service_price' => $serviceName['service_price'],
                    'service_id' => $service, //this is the service id from the database 'services' table
                    'doctor_type' => $doctorType,
                    'date' => $date,
                    'time' => $time,
                    'description' => $description
                ];


                if(session()->has('appointment_bookings')){
                    $existingSession = session()->get('appointment_bookings');
                    $mergeSession = array_merge($existingSession, $sessionData);
                    session()->set('appointment_bookings', $mergeSession);
                }else{
                    session()->set('appointment_bookings', $sessionData);
                }

                return redirect()->to('patient-details');
                
            }
        }

        return view('main/appointment-bookings', $data);
    }

    public function patientDetails(){

        if(!session()->has('appointment_bookings')){
            return redirect()->to('appointment_bookings');
        }

        $data = []; 

        if($this->request->getMethod() == 'post'){

            
            $rules = [
                'first_name' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'First name is required',
                    ]
                ],
                'last_name' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Last name is required',
                    ]
                ],
                'dob' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Date of birth is required',
                    ]
                ],
                'phone' => [
                    'rules' => 'required|numeric|min_length[10]|max_length[12]',
                    'errors' => [
                        'required' => 'Phone number is required',
                        'numeric' => 'Phone number must be numeric',
                        'min_length' => 'Phone number must be at least 10 characters',
                        'max_length' => 'Phone number must be at most 12 characters'
                    ]
                ],
                'residence' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Residence is required',
                    ]
                ],
                'nationality' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'National is required',
                    ]
                ],
                'fullName' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Full name is required',
                    ]
                ],
                'mpesaNumber' => [
                    'rules' => 'required|numeric|min_length[10]|max_length[10]',
                    'errors' => [
                        'required' => 'Mpesa number is required',
                        'numeric' => 'Mpesa number must be numeric',
                        'min_length' => 'Mpesa number must be at least 10 digits',
                        'max_length' => 'Mpesa number must be at most 10 digits'
                    ]
                ],
            ];

            if(!$this->validate($rules)){
                $data['validation'] = $this->validator;
            }else{
                $firstName = $this->request->getPost('first_name');
                $lastName = $this->request->getPost('last_name');
                $date = $this->request->getPost('dob');
                $phone = $this->request->getPost('phone');
                $residence = $this->request->getPost('residence');
                $nationality = $this->request->getPost('nationality');
                $gender = $this->request->getPost('gender');
                $email = $this->request->getPost('email');
                $fullName = $this->request->getPost('fullName');
                $mpesaNumber = $this->request->getPost('mpesaNumber');

                $sessionData = [
                    'first_name' => $firstName,
                    'last_name' => $lastName,
                    'dob' => $date,
                    'phone' => $phone,
                    'residence' => $residence,
                    'nationality' => $nationality,
                    'gender' => $gender,
                    'email' => $email,
                    'full_name' => $fullName,
                    'phone_number' => $mpesaNumber
                ];


                //check if the session is active delete it then create a new session

                if(session()->has('patient_details')){
                    $existingSession = session()->get('patient_details');
                    $mergeSession = array_merge($existingSession, $sessionData);
                    session()->set('patient_details', $mergeSession);
                }else{
                    session()->set('patient_details', $sessionData);
                }

                return redirect()->to('review-and-pay');
            }
        }

        return view('main/patient-details', $data);
    }

    public function paymentCallback()
    {
        $response = file_get_contents('php://input');
        log_message("error", "Response: " . $response);
    
        $json = json_decode($response, true);
    
        if (!isset($json['Body']['stkCallback']['ResultCode']) || $json['Body']['stkCallback']['ResultCode'] !== 0) {
            return false; // return false
        }
    
        $merchantRequestID = $json['Body']['stkCallback']['MerchantRequestID'];
        $checkoutRequestID = $json['Body']['stkCallback']['CheckoutRequestID'];
        
        $callbackData = [
            'callback_uuid' => Uuid::uuid4()->toString(),
            'merchantRequestID' => $merchantRequestID,
            'checkoutRequestID' => $checkoutRequestID,
            'amount' => 0,
            'mpesaReceiptNumber' => '',
            'phoneNumber' => '',
            'transactionDate' => '',
        ];
    
        if (isset($json['Body']['stkCallback']['CallbackMetadata']['Item'])) {
            foreach ($json['Body']['stkCallback']['CallbackMetadata']['Item'] as $params) {
                switch ($params['Name']) {
                    case 'Amount':
                        $callbackData['amount'] = $params['Value'];
                        break;
                    case 'MpesaReceiptNumber':
                        $callbackData['mpesaReceiptNumber'] = $params['Value'];
                        break;
                    case 'PhoneNumber':
                        $callbackData['phoneNumber'] = $params['Value'];
                        break;
                    case 'TransactionDate':
                        $callbackData['transactionDate'] = $params['Value'];
                        break;
                }
            }
        }
    
        try {
            if($this->apiModel->savePayment($callbackData)){
                return $this->response->setJSON([
                    'status' => 200,
                    'message' => 'Payment was successful. Thank you'
                ]);
            }else{
                return $this->response->setJSON([
                    'status' => 500,
                    'message' => 'Please try again later'
                ]);
            }

        } catch (\CodeIgniter\Database\Exceptions\DataBaseException $e) {
            $data = ['error' => $e];
            return $data;
        }
    
    }
    

    public function reviewAndPay()
    {
        if(!session()->has('patient_details')){
            return redirect()->to('patient-details');
        }
        return view('main/review-and-pay');
    }

}
