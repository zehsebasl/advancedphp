<?php

namespace Entity\User;

use AccountInterface;

class Editor implements AccountInterface
{
    public function createUser()
    {
    }

    public function getAccountType()
    {
        return 'Editor';
    }

    public function getUsername()
    {
        return 'Editor Username.';
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
