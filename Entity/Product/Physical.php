<?php

include_once('../Interface/ProductInterface.php');

class Physical implements ProductInterface
{
    public function createProduct()
    {
    }

    public function getProductName()
    {
        return 'Windows 10 cd key in box';
    }

    public function getProductType()
    {
        return 'Fysical product';
    }

    public function productProcess()
    {
        $_SESSION['product'] = $this->getProductName();
        header("Location: ../index.phtml");
    }
}
