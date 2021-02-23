<?php

session_start();

include('../Entity/User/Admin.php');
include('../Entity/User/Customer.php');
include('../Entity/User/Editor.php');

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
