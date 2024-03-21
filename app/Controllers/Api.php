<?php

namespace App\Controllers;

use DateTime;
use DateInterval;

use App\Models\ApiModel;
use App\Libraries\Hash;
use Ramsey\Uuid\Uuid;
use App\Services\GenerateUHIDService;
use App\Services\GenerateEncounterNumberService;
use App\Services\PaymentService;

class Api extends BaseController
{

    private $apiModel;
    private $uhidService;
    private $encounterNumberService;
    private $paymentService;

    public function __construct()
    {
        $this->uhidService = new GenerateUHIDService();
        $this->encounterNumberService = new GenerateEncounterNumberService();
        $this->paymentService = new PaymentService();
        $this->apiModel = model(ApiModel::class);
    }


    public function registerPatient()
    {
        $fname = $this->request->getPost("fname");
        $lname = $this->request->getPost("lname");
        $dateOfBirth = $this->request->getPost("dateOfBirth");
        $residence = $this->request->getPost("residence");
        $gender = $this->request->getPost("gender");
        $email = $this->request->getPost("email");
        $phone = $this->request->getPost("phone");
        $password = $this->request->getPost("password");


        $data = [
            "patient_uuid" => Uuid::uuid4()->toString(),
            "uhid" => $this->uhidService->generateUHID(),
            "encounter_number" => $this->encounterNumberService->generateEncounterNumber(),
            "fname" => $fname,
            "lname" => $lname,
            "dob" => $dateOfBirth,
            "residence" => $residence,
            "gender" => $gender,
            "email" => $email,
            "phone" => $phone,
            "password" => Hash::encrypt($password),

        ];



        try {

            // check if the user exists
            $user = $this->apiModel->checkPatient($phone, $email);
            if ($user) {
                return $this->response->setJSON(["status" => 500, "message" => "Email or Phone number already exists!"]);
            } else {
                $this->apiModel->registerPatient($data);
                return $this->response->setJSON(["status" => 200, "message" => "Registration success, please login!"]);
            }
        } catch (\Exception $ex) {

            return $ex;
        }

    }


    public function verifyEmail()
    {
        $email = $this->request->getPost('email');
        try{
            $user = $this->apiModel->getUserByEmail($email);
            if($user){
                return $this->response->setJSON(['status' => 200, 'message' => $user['email']]);
            }else{
                return $this->response->setJSON(['status' => 404, 'message' => 'email not found']);
            }
        }catch (\Exception $ex){
            return $ex;
        }
    }

    public function login() : object
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        try{
            $patient = $this->apiModel->getUserByEmail($email);
            if ($patient) {
                if (Hash::decrypt($password, $patient['password'])) {

                    $session = [
                        'patient_uuid' => $patient['patient_uuid'],
                        'fname' => $patient['fname'],
                        'lname' => $patient['lname'],
                        'phone' => $patient['phone'],
                        'email' => $patient['email'],
                        'isLoggedIn' => true,
                    ];

                    session()->set($session);

                    return $this->response->setJSON(['status' => 200, 'message' => 'Login successful.']);
                } else {
                    return $this->response->setJSON(['status' => 500, 'message' => 'Invalid password, please try again.']);
                }
            } else {
                return $this->response->setJSON(['status' => 500, 'message' => 'Invalid user, please try again.']);
            }
        }catch (\Exception $ex){
            return $this->$ex;
        }
    }

    public function getDoctorsByType()
    {

        $getSelectedDoctorType = $this->request->getPost('selectedDoctorType');

        log_message('info', 'Selected doctor type: ' . $getSelectedDoctorType);

        if (!in_array($getSelectedDoctorType, ['1', '2',])) {
            return $this->response->setJSON(['status' => 500, 'message' => 'Invalid doctor type, please try again.']);
        }

        switch ($getSelectedDoctorType) {
            case '1':
                $doctorType = 'Psychologist';
                $doctor = $this->apiModel->getPsychologists($doctorType);
                break;
            case '2':
                $doctorType = 'Psychiatrist';
                $doctor = $this->apiModel->getPsychologists($doctorType);
                break;
            default:
                return $this->response->setJSON(['status' => 500, 'message' => 'Unexpected error has occurred']);
        }

        return $this->response->setJSON($doctor);

    }

    public function getDoctorDateTimeSlots()
    {

        $doctorId = $this->request->getPost('doctorId');

        $doctor = $this->apiModel->getDoctorById($doctorId);

        if (!$doctor) {
            return $this->response->setJSON(['status' => 500, 'message' => 'Invalid doctor, please try again.']);
        }

        $doctorSchedule = $this->apiModel->getDoctorSchedule($doctorId);


        if (!$doctorSchedule) {
            return $this->response->setJSON(['status' => 500, 'message' => 'Doctor schedule not found, please try again.']);
        }

        $startDate = date('Y-m-d', strtotime($doctorSchedule['slot_start_date']));
        $endDate = date('Y-m-d', strtotime($doctorSchedule['slot_end_date']));
        $interval = new DateInterval('P1D');

        $dateRange = [];
        while ($startDate <= $endDate) {
            $dateRange[] = $startDate;
            $startDate = (new DateTime($startDate))->add($interval)->format('Y-m-d');

        }

        $startTime = date('H:i', strtotime($doctorSchedule['slot_start_time']));
        $endTime = date('H:i', strtotime($doctorSchedule['slot_end_time']));
        $interval = new DateInterval('PT30M');

        $timeRange = [];
        while ($startTime <= $endTime) {
            $timeRange[] = $startTime;
            $startTime = (new DateTime($startTime))->add($interval)->format('H:i');

        }

        return $this->response->setJSON(['status' => 200, 'time' => $timeRange, 'date' => $dateRange]);

    }


    public function saveBookedAppointment()
    {

        $doctorId = $this->request->getPost('doctorId');
        $appointmentDate = $this->request->getPost('appointmentDate');
        $appointmentTime = $this->request->getPost('selectedTime');
        $reason = $this->request->getPost('reason');
        $quillText = $this->request->getPost('quillText');

        $doctor = $this->apiModel->getDoctorById($doctorId);

        if (!$doctor) {
            return $this->response->setJSON(['status' => 500, 'message' => 'Doctor does not exits, please try again.']);
        }

        $appointmentDataSession = [
            'appointment_title' => $reason,
            'doctor_uuid' => $doctorId,
            'appointment_date' => $appointmentDate,
            'appointment_time' => $appointmentTime,
            'appointment_notes' => $quillText,
        ];

        session()->setFlashdata('appointmentData', $appointmentDataSession);

        if(session()->getFlashdata('appointmentData') === null){
            return $this->response->setJSON(['status' => 500, 'message' => 'An error has occurred, please try again.']);
        }else{
            return $this->response->setJSON(['status' => 200, 'message' => 'Appointment details saved successfully.']);
        }
    }

    public function getPatientAppointments()
    {

        $patientId = session()->get('patient_uuid');

        $patient = $this->apiModel->getPatientById($patientId);

        if (!$patient) {
            return $this->response->setJSON(['status' => 500, 'message' => 'Invalid patient, please try again.']);
        }

        $appointments = $this->apiModel->getPatientAppointments($patientId);

        if (!$appointments) {
            return $this->response->setJSON(['status' => 500, 'message' => 'No appointments found, please try again.']);
        }

        return $this->response->setJSON(['status' => 200, 'appointments' => $appointments]);
    }


    public function cancelAppointment()
    {
        $patientId = session()->get("patient_uuid");
        $doctorId = $this->request->getPost('doctorUuid');
        $appointmentUuid = $this->request->getPost('appointmentUuid');
        $appointmentReason = $this->request->getPost('cancelAppointmentReason');

        $data = [

            'cancel_appointment_uuid' => Uuid::uuid4()->toString(),
            'appointment_uuid' => $appointmentUuid,
            'patient_uuid' => $patientId,
            'doctor_uuid' => $doctorId,
            'appointment_reason' => $appointmentReason
        ];

        $patient = $this->apiModel->getPatientById($patientId);
        $saveReason = $this->apiModel->saveCancelAppointment($data);

        if ($appointmentReason === "") {
            return $this->response->setJSON(['status' => 500, 'message' => 'Please enter a reason for cancelling the appointment.']);
        }

        if (!$patient) {
            return $this->response->setJSON(['status' => 500, 'message' => 'Invalid patient, please try again.']);
        }

        if ($saveReason) {
            try {
                $this->apiModel->setStatusCancel($appointmentUuid);
            } catch (\Exception $ex) {
                return $ex;
            }
            return $this->response->setJSON(['status' => 200, 'message' => 'You have successfully cancel the appointment']);
        }
    }

    public function getGetDisplayAppointments(){

            $patientId = session()->get('patient_uuid');

            $patient = $this->apiModel->getPatientById($patientId);

            if (!$patient) {
                return $this->response->setJSON(['status' => 500, 'message' => 'Invalid patient, please try again.']);
            }

            $appointments = $this->apiModel->getPatientAppointmentsFullCalender($patientId);

            if (!$appointments) {
                return $this->response->setJSON(['status' => 500, 'message' => 'No appointments found, please try again.']);
            }

            return $this->response->setJSON(['status' => 200, 'appointments' => $appointments]);
    }

    public function getPatientInformation(){

            $patientId = session()->get('patient_uuid');

            $patient = $this->apiModel->getPatientBasicInformation($patientId);

            if(!$patient){
                return $this->response->setJSON(['status' => 500, 'message' => 'Invalid patient, please try again.']);
            }

            return $this->response->setJSON(['status' => 200, 'data' => $patient]);
    }

    public function getDoctorAssigned(){

            $patientId = session()->get('patient_uuid');

            $patient = $this->apiModel->getPatientById($patientId);

            if(!$patient){
                return $this->response->setJSON(['status' => 500, 'message' => 'Invalid patient, please try again.']);
            }

            $doctor = $this->apiModel->getDoctorAssigned($patientId);

            if(!$doctor){
                return $this->response->setJSON(['status' => 500, 'message' => 'No doctor assigned, please try again.']);
            }

            return $this->response->setJSON(['status' => 200, 'data' => $doctor]);
    }

    public function saveEditGeneralInformation(){

        $patientId = session()->get('patient_uuid');

        $patient = $this->apiModel->getPatientById($patientId);

        if(!$patient){
            return $this->response->setJSON(['status' => 500, 'message' => 'Invalid patient, please try again.']);
        }

        $data = [

            'additional_info_id' => Uuid::uuid4()->toString(),
            'patient_uuid' => $patientId,
            'title' => $this->request->getPost('title'),
            'address' => $this->request->getPost('address'),
            'nationality' => $this->request->getPost('nationality'),
            'occupation' => $this->request->getPost('occupation'),
            'education' => $this->request->getPost('education'),
        ];

        $checkPatient = $this->apiModel->checkPatientAdditionalInformation($patientId);
        if(!$checkPatient){
            $this->apiModel->savePatientAdditionalInformation($data);
        }else{
            $this->apiModel->saveUpdateAdditionalInformation($patientId, $data);
        }

        return $this->response->setJSON(['status' => 200, 'message' => 'Additional information saved successfully.']);
    }

    public function saveEditAdditionalInformation(){

        $patientId = session()->get('patient_uuid');

        $checkPatient = $this->apiModel->checkPatientAdditionalInformation($patientId);

        $data = [
            'marital_status' => $this->request->getPost('maritalStatus'),
            'national_identity' => $this->request->getPost('govtId'),
        ];

        if(!$checkPatient){
            return $this->response->setJSON(['status' => 500, 'message' => 'Please add general information first.']);
        }else{

            $this->apiModel->saveUpdateAdditionalInformation($patientId, $data);
        }

        return $this->response->setJSON(['status' => 200, 'message' => 'Additional information saved successfully.']);
    }

    public function getPatientAdditionalInformation()
    {
       $patientId = session()->get('patient_uuid');

       $patient = $this->apiModel->getPatientAdditionalData($patientId);

       if(!$patient){
              return $this->response->setJSON(['status' => 500, 'message' => 'Invalid patient, please try again.']);
       }

         return $this->response->setJSON(['status' => 200, 'data' => $patient]);

    }

    public function saveFeedback(){

        $feedbackRangeValue = $this->request->getPost('feedbackRangeValue');
        $feedbackName = $this->request->getPost('feedbackName');
        $feedbackEmail = $this->request->getPost('feedbackEmail');
        $feedbackPhone = $this->request->getPost('feedbackPhone');
        $feedbackMessage = $this->request->getPost('feedbackMessage');

        $data = [
            'feedback_uuid' => Uuid::uuid4()->toString(),
            'feedback_user_choice' => $feedbackRangeValue,
            'feedback_user_name' => $feedbackName,
            'feedback_user_email' => $feedbackEmail,
            'feedback_user_phone' => $feedbackPhone,
            'feedback_user_message' => $feedbackMessage,
        ];

        log_message('info', 'Feedback data: ' . json_encode($data));

        try {

            if($this->apiModel->saveFeedback($data)){
                return $this->response->setJSON(['status' => 200, 'message' => 'Feedback submitted successfully. Thank you']);
            }else{
                return $this->response->setJSON(['status' => 500, 'message' => 'An error has occurred, please try again.']);
            }

        }catch (\Exception $ex){
            return $ex;
        }
    }


    public function saveBookedAppointmentPayment(){

        if(session()->has('patient_details') && session()->has('appointment_bookings')){
            $patientDetails = session()->get('patient_details');
            $appointmentBookings = session()->get('appointment_bookings');

            $sessionData = [
                'service_id' => $appointmentBookings['service_id'],
                'service_price' => $appointmentBookings['service_price'],
                'doctor_type' => $appointmentBookings['doctor_type'],
                'appointment_time' => $appointmentBookings['time'],
                'appointment_date' => $appointmentBookings['date'],
                'appointment_description' => $appointmentBookings['description'],
                'first_name' => $patientDetails['first_name'],
                'last_name' => $patientDetails['last_name'],
                'dob' => $patientDetails['dob'],
                'phone' => $patientDetails['phone'],
                'email' => $patientDetails['email'],
                'mpesa_number' => $patientDetails['mpesaNumber'],
                'residency' => $patientDetails['residence'],
                'nationality' => $patientDetails['nationality'],
                'gender' => $patientDetails['gender'],
            ];


            log_message('info', 'some message');
            try{
                $payment = $this->paymentService->get_accesstoken();
            }
            catch (\Exception $ex){
                return $this->response->setJSON(['status' => 500, 'message' => 'error message' . $ex]);
            }
//            session()->remove('patient_details');
//            session()->remove('appointment_bookings');


            return $this->response->setJSON($payment);


        } else {
            $payment = [
                'status' => 400,
                'message' => 'Required session data missing'
            ];
        }

        return $this->response->setJSON($payment);
    }



    public function logout()
    {
        if (session()->has('isLoggedIn')) {
            session()->destroy();
            return redirect()->to(base_url());
        }

        return redirect()->to(base_url());
    }

}
