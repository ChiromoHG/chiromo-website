<?php

namespace App\Models;

use CodeIgniter\Model;

class ApiModel extends Model
{
    public function getCarousel()
    {
        $builder = $this->db->table('carousel');
        $builder->orderBy('created_at', 'ASC');
        $result = $builder->get();
        if ($result) {
            return $result->getResultArray();
        } else {
            return [];
        }
    }

    public function registerPatient($data): bool
    {
        $builder = $this->db->table('patients');
        $builder->insert($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    //check if the patient has already registered

    public function checkPatient($phone, $email): bool
    {
        $builder = $this->db->table('patients');
        $builder->select('*');
        $builder->where('patients.phone', $phone);
        $builder->orWhere('patients.email', $email);
        $query = $builder->get();
        if ($query->getNumRows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getUserByEmail($email)
    {
        $builder = $this->db->table('patients');
        $builder->select('patients.patient_uuid, patients.fname, patients.lname, patients.phone, patients.email, patients.password');
        $builder->where('patients.email', $email);
        $query = $builder->get();
        if ($query->getNumRows() > 0) {
            return $query->getRowArray();
        } else {
            return false;
        }
    }

    public function getPsychologists($doctorType): ?array
    {
        $builder = $this->db->table('users as u');
        $builder->select('u.user_uuid, u.title, u.fname, u.lname');
        $builder->join('roles', 'u.role_uuid = roles.role_uuid');
        $builder->where('roles.role_name', $doctorType);
        $query = $builder->get();

        if ($query->getNumRows() > 0) {
            return $query->getResult();
        } else {
            return null;
        }
    }

    public function getDoctorById($doctorId)
    {
        $builder = $this->db->table('users as u');
        $builder->where('u.user_uuid', $doctorId);
        $query = $builder->get();

        if ($query->getNumRows() > 0) {
            return $query->getRowArray();
        } else {
            return false;
        }
    }

    public function getDoctorType($doctorId)
    {
        $builder = $this->db->table('users as u');
        $builder->select('r.role_name');
        $builder->join('roles as r', 'u.role_uuid = r.role_uuid');
        $builder->where('u.user_uuid', $doctorId);
        $query = $builder->get();

        if ($query->getNumRows() > 0) {
            return $query->getRowArray();
        } else {
            return false;
        }
    }

    public function getDoctorSchedule($doctorId): ?array
    {
        $builder = $this->db->table('doctor_time_slot as ds');
        $builder->select('ds.slot_uuid, ds.slot_start_date, ds.slot_end_date, ds.slot_start_time, ds.slot_end_time');
        $builder->where('ds.user_uuid', $doctorId);
        $query = $builder->get();

        if ($query->getNumRows() > 0) {
            return $query->getRowArray();
        } else {
            return [];
        }
    }

    public function getPatientById($patientId)
    {
        $builder = $this->db->table('patients as p');
        $builder->select('p.patient_uuid, p.fname, p.lname, p.phone, p.email, p.password');
        $builder->where('p.patient_uuid', $patientId);
        $query = $builder->get();

        if ($query->getNumRows() > 0) {
            return $query->getRowArray();
        } else {
            return false;
        }
    }

    public function getAppointmentByDate($appointmentDate, $appointmentTime): bool
    {
        $builder = $this->db->table('appointments as a');
        $builder->select('a.appointment_uuid, a.patient_uuid, a.doctor_uuid, a.appointment_date, a.appointment_time, a.appointment_status');
        $builder->where('a.appointment_date', $appointmentDate);
        $builder->where('a.appointment_time', $appointmentTime);
        $query = $builder->get();

        if ($query->getNumRows() > 0) {
            return true;
        } else {
            return false;
        }

    }

    public function saveBookedAppointment($data): bool
    {
        $builder = $this->db->table('appointments');
        $builder->insert($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function getPatientAppointments($patientId): array
    {
        $builder = $this->db->table('appointments as a');
        $builder->select('a.appointment_uuid, a.appointment_title, a.appointment_date, a.appointment_time, a.appointment_status, d.user_uuid as doctor_uuid, d.title as doctor_title, d.fname as doctor_fname, d.lname as doctor_lname');
        $builder->join('users as d', 'a.doctor_uuid = d.user_uuid');
        $builder->where('a.patient_uuid', $patientId);
//        $builder->where('a.appointment_status', 'success');
        $query = $builder->get();

        if ($query->getNumRows() > 0) {
            return $query->getResult();
        } else {
            return [];
        }
    }

    public function saveCancelAppointment($data): bool
    {
        $builder = $this->db->table('canceled_appointments');
        $builder->insert($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function setStatusCancel($appointmentId): bool
    {
        $builder = $this->db->table('appointments');
        $builder->set('appointment_status', 'Canceled');
        $builder->set('appointment_date', '0000-00-00');
        $builder->set('appointment_time', '00:00:00');
        $builder->where('appointment_uuid', $appointmentId);
        $builder->update();
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function getPatientAppointmentsFullCalender($patientId): array
    {
        $builder = $this->db->table('appointments as a');
        $builder->select('a.appointment_uuid, a.appointment_title, a.appointment_date, a.appointment_time');
        $builder->join('users as d', 'a.doctor_uuid = d.user_uuid');
        $builder->where('a.patient_uuid', $patientId);
        $builder->where('a.appointment_status', 'success');
        $query = $builder->get();

        if ($query->getNumRows() > 0) {
            return $query->getResult();
        } else {
            return [];
        }
    }

    public function getPatientBasicInformation($patientId)
    {
        $builder = $this->db->table('patients as p');
        $builder->select('p.uhid, p.encounter_number, p.fname, p.lname, p.gender, p.dob, p.residence, p.phone, p.email');
        $builder->where('p.patient_uuid', $patientId);
        $query = $builder->get();

        if ($query->getNumRows() > 0) {
            return $query->getRowArray();
        } else {
            return false;
        }
    }

    public function getDoctorAssigned($patientId)
    {
        $builder = $this->db->table('appointments as a');
        $builder->select('a.appointment_uuid, d.title as doctor_title, d.fname as doctor_fname, d.lname as doctor_lname');
        $builder->join('users as d', 'a.doctor_uuid = d.user_uuid');
        $builder->where('a.patient_uuid', $patientId);
        $builder->where('a.appointment_status', 1);
        $query = $builder->get();
        if ($query->getNumRows() > 0) {
            return $query->getRowArray();
        } else {
            return false;
        }
    }

    public function checkPatientAdditionalInformation($patientId)
    {
        $builder = $this->db->table('patient_additional_info');
        $builder->select('*');
        $builder->where('patient_uuid', $patientId);
        $query = $builder->get();
        if ($query->getNumRows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function savePatientAdditionalInformation($data): bool
    {
        $builder = $this->db->table('patient_additional_info');
        $builder->insert($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function saveUpdateAdditionalInformation($patientId, $data): bool
    {
        $builder = $this->db->table('patient_additional_info');
        $builder->where('patient_uuid', $patientId);
        $builder->update($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function getPatientAdditionalData($patientId)
    {
        $builder = $this->db->table('patient_additional_info');
        $builder->select('*');
        $builder->where('patient_uuid', $patientId);
        $query = $builder->get();
        if ($query->getNumRows() > 0) {
            return $query->getRowArray();
        } else {
            return false;
        }
    }

    public function saveFeedback($data): bool
    {
        $builder = $this->db->table('feedback');
        $builder->insert($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function savePaymentsData($data)
    {

        $builder = $this->db->table('appointment_payments');
        $builder->insert($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllOffers(){
        $builder = $this->db->table('offers');
        $builder->select('*');
        $builder->limit(1);
        $result = $builder->get();
        if($result !== false && $result->getNumRows() > 0) {
            return $result->getResultArray();
        }else{
            return [];
        }
    }

    public function savePayment($payment){
        $builder = $this->db->table('payments');
        $builder->insert($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

}