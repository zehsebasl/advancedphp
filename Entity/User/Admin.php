<?php

include_once('../Interface/AccountInterface.php');

class Admin implements AccountInterface
{
    public function createUser()
    {
    }

    public function getAccountType()
    {
        return 'Admin';
    }

    public function getUsername()
    {
        return 'Admin Username.';
    }

    /**
     * Store user in database
     */
    public function accountProcess()
    {
        $_SESSION['username'] = $this->getUsername();
        header("Location: ../index.phtml");
    }
}
