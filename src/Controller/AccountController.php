<?php

namespace Controller;

session_start();

use Admin;
use Customer;
use Editor;

$selectedRole = $_REQUEST["role"];

class CreateAccount
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

$createAccount = new CreateAccount();
$createAccount->create($userType);
