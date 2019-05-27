<?php

namespace Musica;

class User
{
    public $login_name;

    public $login_password;

    public $last_name;

    public $email;

    public function setLoginName($LoginName)
    {
        $this->login_name = trim($LoginName);
    }

    public function getLoginName()
    {
        return $this->login_name;
    }

    public function setLoginPassword($LoginPassword)
    {
        $this->login_password = trim($LoginPassword);
    }

    public function getLoginPassword()
    {
        return $this->login_password;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }


    public function getEmailVariable()
    {
        return [
            'full_name' => $this->getFullName(),
            'email' => $this->getEmail(),
        ];
    }
}
