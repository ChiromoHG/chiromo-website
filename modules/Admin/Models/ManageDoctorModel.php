<?php

namespace Modules\Admin\Models;

use CodeIgniter\Model;

class ManageDoctorModel extends Model
{


    public function deleteTimeSlot($user_uuid)
    {
        $builder = $this->db->table('doctor_time_slot');
        $builder->where('user_uuid', $user_uuid);
        $result = $builder->delete();
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function checkTimeSlot($data): bool
    {
        $builder = $this->db->table('doctor_time_slot');
        $builder->where('user_uuid', $data['user_uuid']);
        $query = $builder->get();
        $result = $query->getRow();
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function saveTimeSlot($data)
    {
        $builder = $this->db->table('doctor_time_slot');
        $result = $builder->insert($data);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getTimeSlots($user_uuid)
    {
        $builder = $this->db->table('doctor_time_slot');
        $builder->select('doctor_time_slot.slot_start_date, doctor_time_slot.slot_end_date, doctor_time_slot.slot_start_time, doctor_time_slot.slot_end_time, users.title, users.fname,users.lname,');
        $builder->join('users', 'users.user_uuid = doctor_time_slot.user_uuid');
        $builder->where('doctor_time_slot.user_uuid', $user_uuid);
        $query = $builder->get();
        $result = $query->getResult();
        if ($result) {
            return $result;
        } else {
            return false;
        }

    }

    public function getDoctorAppointments($user_uuid): array
    {
        $builder = $this->db->table('appointments');
        $builder->select('appointments.appointment_uuid, appointments.appointment_date, appointments.appointment_time, appointments.appointment_status, appointments.created_at, patients.fname, patients.lname,');
        $builder->join('users', 'users.user_uuid = appointments.doctor_uuid');
        $builder->join('patients', 'patients.patient_uuid = appointments.patient_uuid');
        $builder->where('appointments.doctor_uuid', $user_uuid);
        $builder->where('appointments.appointment_status', 0);
        $query = $builder->get();
        $result = $query->getResultArray();
        if ($result) {
            return $result;
        } else {
            return [];
        }

    }

    public function getDoctorCanceledAppointments($user_uuid)
    {
        $builder = $this->db->table('canceled_appointments');
        $builder->select('canceled_appointments.cancel_appointment_uuid, canceled_appointments.appointment_reason, canceled_appointments.created_at, patients.fname, patients.lname');
        $builder->join('appointments', 'appointments.appointment_uuid = canceled_appointments.appointment_uuid');
        $builder->join('users', 'users.user_uuid = canceled_appointments.doctor_uuid');
        $builder->join('patients', 'patients.patient_uuid = canceled_appointments.patient_uuid');
        $builder->where('appointments.doctor_uuid', $user_uuid);
        $builder->where('appointments.appointment_status', 'canceled');
        $query = $builder->get();
        $result = $query->getResult();
        if ($result) {
            return $result;
        } else {
            return false;
        }

    }

    public function approveAppointment($data, $appointmentUuid, $doctorUuid): bool
    {
        $builder = $this->db->table('appointments');
        $builder->where('appointment_uuid', $appointmentUuid);
        $builder->where('doctor_uuid', $doctorUuid);
        $builder->update($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function getPatientAppointment($appointmentUuid): array
    {
        $builder = $this->db->table('appointments');
        $builder->select('appointments.appointment_date, appointments.appointment_time, appointments.appointment_title, appointments.appointment_notes, appointments.created_at, users.title, users.fname as doctor_fname, users.lname as doctor_lname, patients.fname, patients.lname, patients.uhid, patients.encounter_number');
        $builder->join('users', 'users.user_uuid = appointments.doctor_uuid');
        $builder->join('patients', 'patients.patient_uuid = appointments.patient_uuid');
        $builder->where('appointments.appointment_uuid', $appointmentUuid);
        $query = $builder->get();
        $result = $query->getResultArray();
        if ($result) {
            return $result;
        } else {
            return [];
        }
    }


    public function getPatientsByName($patient): array
    {
        $builder = $this->db->table('patients');
        $builder->select('patients.patient_uuid, patients.fname, patients.lname, patients.uhid, patients.encounter_number, patients.gender, patients.dob, appointments.updated_at, users.title, users.fname as doctor_fname, users.lname as doctor_lname');
        $builder->join('appointments', 'appointments.patient_uuid = patients.patient_uuid');
        $builder->join('users', 'users.user_uuid = appointments.doctor_uuid');
        $builder->where('appointments.appointment_status', 1);
        $builder->where('patients.fname', $patient);
        $builder->orWhere('patients.lname', $patient);
        $query = $builder->get();
        $result = $query->getResultArray();
        if ($result) {
            return $result;
        } else {
            return [];
        }
    }

    public function getPatientsDateRange($startDate, $endDate): array
    {
        $builder = $this->db->table('patients');
        $builder->select('patients.patient_uuid, patients.fname, patients.lname, patients.uhid, patients.encounter_number, patients.gender, patients.dob, appointments.updated_at, users.title, users.fname as doctor_fname, users.lname as doctor_lname');
        $builder->join('appointments', 'appointments.patient_uuid = patients.patient_uuid');
        $builder->join('users', 'users.user_uuid = appointments.doctor_uuid');
        $builder->where('appointments.appointment_status', 1);
        $builder->where('appointments.updated_at >=', $startDate);
        $builder->where('appointments.updated_at <=', $endDate);
        $query = $builder->get();
        $result = $query->getResultArray();
        if ($result) {
            return $result;
        } else {
            return [];
        }
    }

    public function getPatientsDateRangeName($patient, $startDate, $endDate): array
    {
        $builder = $this->db->table('patients');
        $builder->select('patients.patient_uuid, patients.fname, patients.lname, patients.uhid, patients.encounter_number, patients.gender, patients.dob, appointments.updated_at, users.title, users.fname as doctor_fname, users.lname as doctor_lname');
        $builder->join('appointments', 'appointments.patient_uuid = patients.patient_uuid');
        $builder->join('users', 'users.user_uuid = appointments.doctor_uuid');
        $builder->where('appointments.appointment_status', 1);
        $builder->where('patients.fname', $patient);
        $builder->orWhere('patients.lname', $patient);
        $builder->where('appointments.updated_at >=', $startDate);
        $builder->where('appointments.updated_at <=', $endDate);
        $query = $builder->get();
        $result = $query->getResultArray();
        if ($result) {
            return $result;
        } else {
            return [];
        }
    }

    public function getPatients(): array
    {
        $builder = $this->db->table('patients');
        $builder->select('patients.patient_uuid, patients.fname, patients.lname, patients.uhid, patients.gender, patients.dob, patients.encounter_number, appointments.updated_at, users.title, users.fname as doctor_fname, users.lname as doctor_lname');
        $builder->join('appointments', 'appointments.patient_uuid = patients.patient_uuid');
        $builder->join('users', 'users.user_uuid = appointments.doctor_uuid');
        $builder->where('appointments.appointment_status', 1);
        $query = $builder->get();
        $result = $query->getResultArray();
        if ($result) {
            return $result;
        } else {
            return [];
        }
    }

    public function getAdmittedPatientDetails($patient_uuid)
    {
        $builder = $this->db->table('patients');
        $builder->select('patients.patient_uuid, patients.fname, patients.lname, patients.uhid, patients.residence, patients.phone, patients.email, patients.profile, patients.gender, patients.dob, patients.encounter_number, appointments.updated_at, users.title, users.fname as doctor_fname, users.lname as doctor_lname');
        $builder->join('appointments', 'appointments.patient_uuid = patients.patient_uuid');
        $builder->join('users', 'users.user_uuid = appointments.doctor_uuid');
        $builder->where('appointments.appointment_status', 1);
        $builder->where('patients.patient_uuid', $patient_uuid);
        $query = $builder->get();
        $result = $query->getResultArray();
        if ($result) {
            return $result;
        } else {
            return [];
        }
    }
}