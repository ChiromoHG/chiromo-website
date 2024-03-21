<?php

namespace Modules\Admin\Models;

use CodeIgniter\Model;

class DepartmentModel extends Model
{

    public function updateDepartment($departmentId, $departmentEdit): bool
    {
        $builder = $this->db->table('departments');
        $builder->where('department_uuid', $departmentId);
        $builder->update($departmentEdit);
        if ($this->db->affectedRows() > 0) {
            return true;
        } else {
            return false;
        }

    }

    public function createDepartment($department): bool
    {
        $builder = $this->db->table('departments');
        $builder->insert($department);
        if ($this->db->affectedRows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllDepartments(): array
    {
        $builder = $this->db->table('departments');
        $builder->select('department_uuid, department_name, department_description');
        $result = $builder->get()->getResultArray();
        if(count($result) > 0){
            return $result;
        }else{
            return [];
        }
    }

    public function getDepartmentById($departmentId): array
    {
        $builder = $this->db->table('departments');
        $builder->select('department_uuid, department_name, department_description');
        $builder->where('department_uuid', $departmentId);
        $result = $builder->get()->getResultArray();
        if(count($result) > 0){
            return $result;
        }else{
            return [];
        }
    }

    public function getDepartmentByName($departmentName): array
    {
        $builder = $this->db->table('departments');
        $builder->select('department_uuid, department_name, department_description');
        $builder->like('department_name', $departmentName);
        $result = $builder->get()->getResultArray();
        if(count($result) > 0){
            return $result;
        }else{
            return [];
        }
    }
}