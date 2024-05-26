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

    public function saveOffer($data){
        $builder = $this->db->table('offers');
        $result = $builder->insert($data);
        if($result){
            return $this->db->insertID();
        }else{
            return false;
        }
    }

    public function getOffers(): Array
    {

        $builder = $this->db->table('offers');
        $builder->select('offers.offer_uuid, offers.offer_title, offers.offer, offers.offer_start_date, offers.offer_end_date');
        $builder->where('offers.status', '0');
        $result = $builder->get();
        if($result){
            return $result->getResultArray();
        }else{
            return array();
        }
    }

    public function checkOffer($offerId){

        $builder = $this->db->table('offers');
        $builder->select('offers.offer_uuid');
        $builder->where('offers.offer_uuid', $offerId);
        $result = $builder->get();
        if ($result !== false && $result->getNumRows() > 0) {
            return true; // Offer exists
        } else {
            return false; // Offer not found
        }
    }

    function deleteOffer($offerId){
        $builder = $this->db->table('offers');
        $builder->where('offers.offer_uuid', $offerId);
        $builder->delete();
        $result = $builder->get();
        if($result){
            return true; // Offer deleted
        }else{
            return false; // Offer not found
        }
    }

    public function endOffer($offerId){
        $builder = $this->db->table('offers');
        $builder->where('offers.offer_uuid', $offerId);
        $builder->update(['offers.status' => 1]);
        $result = $builder->get();
        if($result !== false  && $result->getNumRows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function editOffer($data, $offerId){
        $builder = $this->db->table('offers');
        $builder->where('offers.offer_uuid', $offerId);
        $builder->update($data);
        $result = $builder->get();
        if($result !== false  && $result->getNumRows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function getOfferId($offerId){
        $builder = $this->db->table('offers');
        $builder->select('offers.offer_uuid, offers.offer_title, offers.offer, offers.offer_start_date, offers.offer_end_date');
        $builder->where('offers.offer_uuid', $offerId);
        $result = $builder->get();
        if($result !== false  && $result->getNumRows() > 0){
            return $result->getResultArray();
        }else{
            return [];
        }
    }
}