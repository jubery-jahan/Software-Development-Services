<?php


namespace App\classes;


class Auth
{
    public $userName, $password, $user, $users;

    public function login($post)
    {
        $this->userName = $post['user_name'];
        $this->password = $post['password'];

        $this->user  = new User();
        $this->users = $this->user->getAllUser();
        foreach ($this->users as $user)
        {
            if ($user['user_name'] == $this->userName && $user['password'] == $this->password)
            {
                echo 'log in successfully';
                exit();
            }
        }
        header('Location: action.php?page=login&&message=Sorry .. invalid credential.');
    }
}