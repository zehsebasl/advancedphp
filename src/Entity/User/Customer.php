<?php

use AccountInterface;

class Customer implements AccountInterface
{
    public function createUser()
    {
    }

    public function getAccountType()
    {
        return 'Customer';
    }

    public function getUsername()
    {
        return 'Customer Username.';
    }

    public function accountProcess()
    {
        $_SESSION['username'] = $this->getUsername();
        header("Location: ../index.phtml");
    }
}