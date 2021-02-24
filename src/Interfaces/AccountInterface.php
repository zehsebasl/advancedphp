<?php

namespace Interfaces;

interface AccountInterface
{
    public function createUser();
    public function accountProcess();
    public function getUsername();
    public function getAccountType();
}
