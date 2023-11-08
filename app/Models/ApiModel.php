<?php

namespace App\Models;

use CodeIgniter\Model;

class ApiModel extends Model
{
    public function registerPatient($data)
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

    public function checkPatient($phone, $email)
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

    public function getUserByEmail($email){
        $builder = $this->db->table('patients');
        $builder->select('patients.patient_uuid, patients.fname, patients.lname, patients.phone, patients.email, patients.password');
        $builder->where('patients.email', $email);
        $query = $builder->get();
        if($query->getNumRows() > 0){
            return $query->getRowArray();
        }else{
            return false;
        }
    }

}