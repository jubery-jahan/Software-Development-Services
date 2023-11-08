<?php


namespace App\classes;


class User
{
    public $users;

    public function __construct()
    {
        $this->users = [
            0 => [
                'id'        => 1,
                'name'      => 'Somrat Mondal',
                'user_name' => 'somrat',
                'password'  => '123456'
            ],
            1 => [
                'id'        => 2,
                'name'      => 'Tonni Akter',
                'user_name' => 'tonni',
                'password'  => '112233'
            ],
            2 => [
                'id'        => 3,
                'name'      => 'Ferdoush Ahmmed',
                'user_name' => 'ferdoush',
                'password'  => '555666'
            ],
        ];
    }

    public function getAllUser()
    {
        return $this->users;
    }
}