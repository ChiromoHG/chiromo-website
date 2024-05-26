<?php

namespace Modules\Admin\Models;
use CodeIgniter\Model;

class WebModel extends Model
{

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

    public function getJobs(): Array
    {
        $builder = $this->db->table('jobs');
        $builder->select('jobs.job_uuid, jobs.job_title, jobs.job_closing_date');
        $result = $builder->get();
        if($result){
            return $result->getResultArray();
        }else{
            return [];
        }
    }
}
