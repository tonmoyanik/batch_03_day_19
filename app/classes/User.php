<?php
namespace App\classes;
class User
{
    public function getAllUser()
    {
        return [
            0=> [
                'id' => 1,
                'name' => 'Rafan',
                'email' => 'admin@gmail.com',
                'password' => '123456',
            ],
            1=> [
                'id' => 2,
                'name' => 'Mehedi',
                'email' => 'mehedi@gmail.com',
                'password' => '123789',
            ],
        ];
    }
}