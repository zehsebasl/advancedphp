<?php

namespace Controller;

session_start();

use Digital;
use Download;
use Physical;

$selectedProductType = $_REQUEST["product-type"];

class CreateProduct
{
    public function create(ProductInterface $productType)
    {
        $productType->productProcess();
    }
}

if ($selectedProductType === 'digital') {
    $productType = new Digital();
} elseif ($selectedProductType === 'download') {
    $productType = new Download();
} else {
    $productType = new Physical();
}

$createProduct = new CreateProduct();
$createProduct->create($productType);
