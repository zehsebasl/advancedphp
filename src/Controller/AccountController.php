<?php

namespace Controller;

session_start();

use Entity\User\Admin;
use Entity\User\Customer;
use Entity\User\Editor;
use Interfaces\AccountInterface;

$selectedRole = $_REQUEST["role"];

class AccountController
{
  public function create(AccountInterface $userType)
  {
    $userType->accountProcess();
  }
}

if ($selectedRole === 'admin') {
  $userType = new Admin();
} elseif ($selectedRole === 'editor') {
  $userType = new Editor();
} else {
  $userType = new Customer();
}

$createAccount = new AccountController();
$createAccount->create($userType);
