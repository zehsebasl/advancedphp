<?php

session_start();

include_once('../Entity/Product/Digital.php');
include_once('../Entity/Product/Download.php');
include_once('../Entity/Product/Physical.php');

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
