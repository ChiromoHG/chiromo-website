<?php

class TestControler extends BaseController
{
    public function getDoctorDateTimeSlots(){

        $doctorId = $this->request->getPost('doctorId');
        $appointmentDate = $this->request->getPost('appointmentDate');

        $doctor = $this->apiModel->getDoctorById($doctorId);

        if(!$doctor){
            return $this->response->setJSON(['status' => 500, 'message' => 'Invalid doctor, please try again.']);
        }

        $doctorSchedule = $this->apiModel->getDoctorSchedule($doctorId);

        if(!$doctorSchedule){
            return $this->response->setJSON(['status' => 500, 'message' => 'Doctor schedule not found, please try again.']);
        }

        $doctorSchedule = json_decode($doctorSchedule['schedule'], true);

        $doctorSchedule = $doctorSchedule[$appointmentDate];

        if(!$doctorSchedule){
            return $this->response->setJSON(['status' => 500, 'message' => 'Doctor schedule not found, please try again.']);
        }

        $doctorSchedule = array_filter($doctorSchedule, function($schedule){
            return $schedule['status'] == 'available';
        });

        $doctorSchedule = array_map(function($schedule){
            return $schedule['time'];
        }, $doctorSchedule);

        return $this->response->setJSON($doctorSchedule);
    }


    public function test2(){
        $formattedData = array_merge(...array_map(function($schedule) {
            $startDate = date('Y-m-d', strtotime($schedule['slot_start_time']));
            $endDate = date('Y-m-d', strtotime($schedule['slot_end_time']));
            //one hour interval
            $interval = new DateInterval('P1D');


            $dateRange = [];
            while ($startDate <= $endDate) {
                $dateRange[] = [
                    'start_time' => $schedule['slot_start_time'],
                    'end_time' => $schedule['slot_end_time'],
                ];

                $startDate = (new DateTime($startDate))->add($interval)->format('Y-m-d');

            }

            return $dateRange;
        }, $doctorSchedule));
    }
}