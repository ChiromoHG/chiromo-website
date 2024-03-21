<?php

namespace Modules\Admin\Models;

use CodeIgniter\Model;

class ServicesModel extends Model{

    public function getAllDepartments(): array
    {
        $builder = $this->db->table('departments');
        $builder->select('*');
        $result = $builder->get()->getResultArray();
        if(count($result) > 0){
            return $result;
        }else{
            return [];
        }

    }

    public function updateService(array $serviceData, string $serviceId): bool
    {
        $builder = $this->db->table('services');
        $builder->where('service_uuid', $serviceId);
        $builder->update($serviceData);
        if($this->db->affectedRows() > 0) {
            return true;
        }else{
            return false;
        }
    }

    public function createService(array $serviceData): bool
    {
        $builder = $this->db->table('services');
        $builder->insert($serviceData);
        if($this->db->affectedRows() > 0) {
            return true;
        }else{
            return false;
        }
    }

    public function getAllServices(): array
    {
        $builder = $this->db->table('services');
        $builder->select('*');
        $builder->join('departments', 'departments.department_uuid = services.department_uuid');
        $result = $builder->get()->getResultArray();
        if(count($result) > 0){
            return $result;
        }else{
            return [];
        }
    }

    public function getServiceById(string $serviceId): array
    {
        $builder = $this->db->table('services');
        $builder->select('*');
        $builder->join('departments', 'departments.department_uuid = services.department_uuid');
        $builder->where('service_uuid', $serviceId);
        $result = $builder->get()->getResultArray();
        if(count($result) > 0){
            return $result;
        }else{
            return [];
        }
    }

    public function getServiceName(string $serviceId): array
    {
        $builder = $this->db->table('services');
        $builder->select('service_name, service_price');
        $builder->where('service_uuid', $serviceId);
        $result = $builder->get()->getRowArray();
        if(count($result) > 0){
            return $result;
        }else{
            return [];
        }
    }
}