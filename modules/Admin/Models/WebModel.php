<?php

namespace Modules\Admin\Models;
use CodeIgniter\Model;

class WebModel extends Model
{

    public function saveCarousel($data)
    {

        $builder = $this->db->table('carousel');
        $result = $builder->insert($data);
        if($result){
            return $this->db->insertID();
        }else{
            return false;
        }

    }

    public function getCarousel()
    {
        $builder = $this->db->table('carousel');
        $builder->orderBy('created_at', 'ASC');
        $result = $builder->get();
        if($result){
            return $result->getResultArray();
        }else{
            return [];
        }
    }

    public function getJobs()
    {
        $builder = $this->db->table('jobs');
        $builder->select('jobs.job_title, COUNT(jobs.job_title) as job_count');
        $result = $builder->get();
        if($result){
            return $result->getResultArray();
        }else{
            return [];
        }
    }

    public function getRoles(): array
    {
        $builder = $this->db->table('roles');
        $builder->select('roles.role_uuid, roles.role_name, roles.role_description, roles.created_at, COUNT(users.role_uuid) as user_count');
        $builder->join('users', 'users.role_uuid = roles.role_uuid', 'left');
        $builder->groupBy('roles.role_uuid, roles.role_name, roles.role_description, roles.created_at');
        $builder->orderBy('roles.created_at', 'DESC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function saveJob($data)
    {
        $builder = $this->db->table('jobs');
        $result = $builder->insert($data);
        if($result){
            return $this->db->insertID();
        }else{
            return false;
        }
    }
}