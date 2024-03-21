<?php

namespace  Modules\Admin\Controllers;
use App\Controllers\BaseController;


use Modules\Admin\Models\ManageDoctorModel;
use PHPUnit\Exception;
use Ramsey\Uuid\Uuid;



class ManageDoctor extends BaseController{

    private $doctorModel;
    public function __construct(){
        $this->doctorModel = model(ManageDoctorModel::class);
    }
    public function timeSlot(){

        $startDate = $this->request->getPost('startDate');
        $endDate = $this->request->getPost('endDate');
        $startTime = $this->request->getPost('startTime');
        $endTime = $this->request->getPost('endTime');

        if($startDate == null || $endDate == null || $startTime == null || $endTime == null){
            $response = [
                'status' => 500,
                'message' => 'Please fill in all the fields'
            ];
            return $this->response->setJSON($response);
        }

        if(!strtotime($startDate) || !strtotime($endDate) || !strtotime($startTime) || !strtotime($endTime)){
            $response = [
                'status' => 500,
                'message' => 'Please fill in valid dates and times'
            ];
            return $this->response->setJSON($response);
        }

        try{
            $data = [
                'slot_uuid' => Uuid::uuid4()->toString(),
                'user_uuid' => session()->get('user_uuid'),
                'slot_start_date' => $startDate,
                'slot_end_date' => $endDate,
                'slot_start_time' => $startTime,
                'slot_end_time' => $endTime,
            ];
            $checkSlot = $this->doctorModel->checkTimeSlot($data);
            if($checkSlot){
                $this->doctorModel->deleteTimeSlot($data['user_uuid']);
            }

            $saveTime = $this->doctorModel->saveTimeSlot($data);
            if ($saveTime) {
                $response = [
                    'status' => 200,
                    'message' => 'Time slot saved successfully'
                ];
            }else{
                $response = [
                    'status' => 500,
                    'message' => 'There was an error saving the time slot, please try again later'
                ];
            }
            return $this->response->setJSON($response);
        }catch(Exception $e){
            return $e->getMessage();
        }

    }

    public function getTimeSlots()
    {
        try {
            $userUuid = session()->get('user_uuid');
            $timeSlots = $this->doctorModel->getTimeSlots($userUuid);

            if ($timeSlots) {
                $response = [
                    'status' => 200,
                    'data' => $timeSlots
                ];
            } else {
                $response = [
                    'status' => 404,
                    'message' => 'No time slots found.'
                ];
            }
            return $this->response->setJSON($response);
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            return $this->response->setJSON($e->getMessage());
        }
    }


    public function getAppointments(){
        $userUuid = session()->get('user_uuid');
        try{
            $appointments = $this->doctorModel->getDoctorAppointments($userUuid);
            if($appointments){
                $response = [
                    'status' => 200,
                    'data' => $appointments
                ];
            }else{
                $response = [
                    'status' => 404,
                    'message' => 'No appointments found'
                ];
            }
            return $this->response->setJSON($response);
        }catch(Exception $e){
            log_message('error', $e->getMessage());
            return $this->response->setJSON($e->getMessage());
        }
    }

    public function getCanceledAppointments(){
        $userUuid = session()->get('user_uuid');
        try{
            $appointments = $this->doctorModel->getDoctorCanceledAppointments($userUuid);
            if($appointments){
                $response = [
                    'status' => 200,
                    'data' => $appointments
                ];
            }else{
                $response = [
                    'status' => 404,
                    'message' => 'No appointments found'
                ];
            }
            return $this->response->setJSON($response);
        }catch(Exception $e){
            log_message('error', $e->getMessage());
            return $this->response->setJSON($e->getMessage());
        }
    }

    public function approveAppointment(){
        $appointmentUuid = $this->request->getPost('appointmentUuid');
        $appointmentStatus = $this->request->getPost('appointmentStatus');
        $doctorUuid = session()->get('user_uuid');
        try{
            $data = [
                'updated_at' => date('Y-m-d'),
                'appointment_status' => $appointmentStatus,
            ];
            $approveAppointment = $this->doctorModel->approveAppointment($data, $appointmentUuid, $doctorUuid);
            if($approveAppointment){
                $response = [
                    'status' => 200,
                    'message' => 'Appointment updated successfully'
                ];
            }else{
                $response = [
                    'status' => 500,
                    'message' => 'There was an error updating the appointment'
                ];
            }
            return $this->response->setJSON($response);
        }catch(Exception $e){
            log_message('error', $e->getMessage());
            return $this->response->setJSON($e->getMessage());
        }
    }

    public function getPatients()
    {
        $patient = $this->request->getPost('patient');
        $startDate = $this->request->getPost('startDate');
        $endDate = $this->request->getPost('endDate');

        try {
            switch (true) {
                case !empty($startDate) && !empty($endDate) && !empty($patient):
                    $patients = $this->doctorModel->getPatientsDateRangeName($startDate, $endDate, $patient);
                    break;

                case !empty($patient):
                    $patients = $this->doctorModel->getPatientsByName($patient);
                    break;

                case !empty($startDate) && !empty($endDate):
                    $patients = $this->doctorModel->getPatientsDateRange($startDate, $endDate);
                    break;

                default:
                    $patients = $this->doctorModel->getPatients();
                    log_message('info', 'default');
            }

            $response = ($patients) ?
                ['status' => 200, 'data' => $patients] :
                ['status' => 404, 'message' => 'No patients found'];

            return $this->response->setJSON($response);
        } catch (Exception $e) {
//            log_message('error', $e->getMessage());
            return $this->response->setJSON($e->getMessage());
        }
    }

}