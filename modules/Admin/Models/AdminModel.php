<?php

namespace Modules\Admin\Models;

use CodeIgniter\Model;

class AdminModel extends Model{
    public function checkRole($role)
    {
        $builder = $this->db->table('roles');
        $builder->select('*');
        $builder->where('role_name', $role);
        $query = $builder->get();
        if ($query->getNumRows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function newRole($data)
    {
        $builder = $this->db->table('roles');
        $builder->insert($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function getRoles()
    {
        $builder = $this->db->table('roles');
        $builder->select('roles.role_uuid, roles.role_name, roles.role_description, roles.created_at, COUNT(users.role_uuid) as user_count');
        $builder->join('users', 'users.role_uuid = roles.role_uuid', 'left');
        $builder->groupBy('roles.role_uuid, roles.role_name, roles.role_description, roles.created_at');
        $builder->orderBy('roles.created_at', 'DESC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getRolesNames()
    {
        $builder = $this->db->table('roles');
        $builder->select('role_uuid, role_name');
        $builder->orderBy('created_at', 'DESC');
        $query = $builder->get();
        return $query->getResultArray();
    }

//    permissions seeder model functions
    public function getAllPermissions()
    {
        $builder = $this->db->table('permissions');
        $builder->select('*');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function deletePermission($id)
    {
        $builder = $this->db->table('permissions');
        $builder->where('permission_uuid', $id);
        $builder->delete();
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }


    public function insertPermission($data)
    {
        $builder = $this->db->table('permissions');
        $builder->insert($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function getPermissionUuid($permission_name)
    {
        $builder = $this->db->table('permissions');
        $builder->select('permission_uuid');
        $builder->where('permission_name', $permission_name);
        $query = $builder->get();
        return $query->getRow()->permission_uuid;
    }

    public function assignPermissionAdmin($data)
    {
        $builder = $this->db->table('role_permission');
        $builder->insert($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function assignPermissionAuth($data)
    {
        $builder = $this->db->table('role_permission');
        $builder->insert($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function assignPermissionSecurity($data)
    {
        $builder = $this->db->table('role_permission');
        $builder->insert($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function createUser($data)
    {
        $builder = $this->db->table('users');
        $builder->insert($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function getUsers(){
        $builder = $this->db->table('users');
        $builder->select('users.user_uuid, users.fname, users.lname, users.email, users.created_at, roles.role_name');
        $builder->join('roles', 'roles.role_uuid = users.role_uuid', 'left');
        $builder->orderBy('users.created_at', 'DESC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getUser($id){
        $builder = $this->db->table('users');
        $builder->select('users.user_uuid, users.fname, users.lname, users.email, roles.role_name');
        $builder->join('roles', 'roles.role_uuid = users.role_uuid', 'left');
        $builder->where('users.user_uuid', $id);
        $query = $builder->get();
        return $query->getRowArray();
    }

    public function updateUser($data, $id){
        $builder = $this->db->table('users');
        $builder->where('user_uuid', $id);
        $builder->update($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function getUserByEmail($email){
        $builder = $this->db->table('users');
        $builder->select('users.user_uuid, users.fname, users.lname, users.email, users.password, roles.role_name, roles.role_uuid');
        $builder->join('roles', 'roles.role_uuid = users.role_uuid', 'left');
        $builder->where('users.email', $email);
        $query = $builder->get();
        return $query->getRowArray();
    }


    public function createUserLoginActivity($data){
        $builder = $this->db->table('user_login_activity');
        $builder->insert($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function saveMessage($data){
        $builder = $this->db->table('email_trail');
        $builder->insert($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function getCurrentLoggedInUser($id){
        $builder = $this->db->table('users');
        $builder->select('users.user_uuid, users.fname, users.lname, users.email, users.password');
        $builder->where('users.user_uuid', $id);
        $query = $builder->get();
        return $query->getRowArray();
    }

    public function updateUserPass($data, $id){
        $builder = $this->db->table('users');
        $builder->where('user_uuid', $id);
        $builder->update($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function updateLoginActivity($data, $id)
    {
        $builder = $this->db->table('user_login_activity');
        $builder->where('user_uuid', $id);
        $builder->where('logout_time', null);
        $builder->update($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function truncateNavbar()
    {
        $builder = $this->db->table('navbar');
        if($builder->truncate()){
            return true;
        }else{
            return false;
        }
    }

    public function insertNavbar($data)
    {
        $builder = $this->db->table('navbar');
        $builder->insert($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }
}