<?php

use ProductInterface;

class Digital implements ProductInterface
{
    public function createProduct()
    {
    }

    public function getProductName()
    {
        return 'Windows 10';
    }

    public function getProductType()
    {
        return 'Digital product';
    }

    public function productProcess()
    {
        $_SESSION['product'] = $this->getProductName();
        header("Location: ../index.phtml");
    }
}
