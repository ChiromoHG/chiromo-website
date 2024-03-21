<?php

namespace Modules\Admin\Models;

use CodeIgniter\Model;

class AdminModel extends Model{
    public function checkRole($role): bool
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

    public function newRole($data): bool
    {
        $builder = $this->db->table('roles');
        $builder->insert($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
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

    public function getRolesNames(): array
    {
        $builder = $this->db->table('roles');
        $builder->select('role_uuid, role_name');
        $builder->orderBy('created_at', 'DESC');
        $query = $builder->get();
        return $query->getResultArray();
    }

//    sidebar seeder model functions
    public function getAllSidebar(): array
    {
        $builder = $this->db->table('sidebar');
        $builder->select('*');
        $builder->orderBy('sidebar_order', 'ASC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function deleteSidebar($id): bool
    {
        $builder = $this->db->table('sidebar');
        $builder->where('sidebar_uuid', $id);
        $builder->delete();
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function insertSidebar($data): bool
    {
        $builder = $this->db->table('sidebar');
        $builder->insert($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

//    permissions seeder model functions
    public function getAllPermissions(): array
    {
        $builder = $this->db->table('permissions');
        $builder->select('*');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function deletePermission($id): bool
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


    public function insertPermission($data): bool
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

    public function assignPermissionAdmin($data): bool
    {
        $builder = $this->db->table('role_permission');
        $builder->insert($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function assignPermissionPsychologist($data): bool
    {
        $builder = $this->db->table('role_permission');
        $builder->insert($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function assignPermissionPsychiatric($data): bool
    {
        $builder = $this->db->table('role_permission');
        $builder->insert($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function createUser($data): bool
    {
        $builder = $this->db->table('users');
        $builder->insert($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function getUsers(): array
    {
        $builder = $this->db->table('users');
        $builder->select('users.user_uuid, users.fname, users.lname, users.email, users.created_at, roles.role_name');
        $builder->join('roles', 'roles.role_uuid = users.role_uuid', 'left');
        $builder->orderBy('users.created_at', 'DESC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getUser($id): ?array
    {
        $builder = $this->db->table('users');
        $builder->select('users.user_uuid, users.fname, users.lname, users.email, roles.role_name');
        $builder->join('roles', 'roles.role_uuid = users.role_uuid', 'left');
        $builder->where('users.user_uuid', $id);
        $query = $builder->get();
        return $query->getRowArray();
    }

    public function updateUser($data, $id): bool
    {
        $builder = $this->db->table('users');
        $builder->where('user_uuid', $id);
        $builder->update($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function getUserByEmail($email): ?array
    {
        $builder = $this->db->table('users');
        $builder->select('users.user_uuid, users.fname, users.lname, users.email, users.password, roles.role_name, roles.role_uuid');
        $builder->join('roles', 'roles.role_uuid = users.role_uuid', 'left');
        $builder->where('users.email', $email);
        $query = $builder->get();
        return $query->getRowArray();
    }


    public function createUserLoginActivity($data): bool
    {
        $builder = $this->db->table('user_login_activity');
        $builder->insert($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function saveMessage($data): bool
    {
        $builder = $this->db->table('email_trail');
        $builder->insert($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function getCurrentLoggedInUser($id): ?array
    {
        $builder = $this->db->table('users');
        $builder->select('users.user_uuid, users.fname, users.lname, users.email, users.password');
        $builder->where('users.user_uuid', $id);
        $query = $builder->get();
        return $query->getRowArray();
    }

    public function updateUserPass($data, $id): bool
    {
        $builder = $this->db->table('users');
        $builder->where('user_uuid', $id);
        $builder->update($data);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function updateLoginActivity($data, $id): bool
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
    public function getAllSidebarComponent($role_name): array
    {
        $builder = $this->db->table('sidebar');
        $builder->select('sidebar.sidebar_label, sidebar.sidebar_url, sidebar.sidebar_icon, sidebar.owner');
        $builder->where('owner', $role_name);
        $builder->orderBy('sidebar.sidebar_order', 'ASC');
        $query = $builder->get();
        return $query->getResultArray();

    }
}