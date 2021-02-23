<?php

session_start();

include('../Entity/Product/Digital.php');
include('../Entity/Product/Download.php');
include('../Entity/Product/Physical.php');

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
