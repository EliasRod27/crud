<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';

    protected $allowedFields = [
        'user',
        'password'
    ];

    public function getByUser(string $user): array
    {
        $rq =  $this->where('user', $user)->first();

        return !is_null($rq) ? $rq : [];
    }

    public function searchUser(string $search): array
    {
        $rq = $this->db->table('users')->like('user', $search)->get();

        return !is_null($rq) ? $rq->getResultArray() : [];
    }

    public function deleteUser(string $user)
    {
        $this->where('user', $user)->delete();

        return true;
    }
}
