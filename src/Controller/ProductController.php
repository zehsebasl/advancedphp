<?php

namespace Controller;

session_start();

use Entity\Product\Digital;
use Entity\Product\Download;
use Entity\Product\Physical;

use Interfaces\ProductInterface;

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
