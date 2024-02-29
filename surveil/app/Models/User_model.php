<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';

    protected $allowedFields = ['email', 'password'];

    public function create_user($email, $password)
    {
        $data = [
            'email' => password_hash($email, PASSWORD_BCRYPT),
            'password' => $password
        ];
    
        return $this->insert($data);
    }

    public function get_user($email)
    {
        return $this->where('email', $email)->first();
    }
}