<?php

use ProductInterface;

class Download implements ProductInterface
{
    public function createProduct()
    {
    }

    public function getProductName()
    {
        return 'Windows licence key';
    }

    public function getProductType()
    {
        return 'Download product';
    }

    public function productProcess()
    {
        $_SESSION['product'] = $this->getProductName();
        header("Location: ../index.phtml");
    }
}
