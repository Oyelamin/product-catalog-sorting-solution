<?php
/**
 * Created by PhpStorm.
 * User: blessing
 * Date: 21/07/2023
 * Time: 12:52 am
 */

require 'vendor/autoload.php';

use ProductCatalogSorting\Helper\PriceSorter;
use ProductCatalogSorting\Helper\SalesPerViewSorter;
use ProductCatalogSorting\Catalog;


$products = [
    [
        'id' => 1,
        'name' => 'Alabaster Table',
        'price' => 12.99,
        'created' => '2019-01-04',
        'sales_count' => 32,
        'views_count' => 730,
    ],
    [
        'id' => 2,
        'name' => 'Zebra Table',
        'price' => 44.49,
        'created' => '2012-01-04',
        'sales_count' => 301,
        'views_count' => 3279,
    ],
    [
        'id' => 3,
        'name' => 'Coffee Table',
        'price' => 10.00,
        'created' => '2014-05-28',
        'sales_count' => 1048,
        'views_count' => 20123,
    ]
];


$productPriceSorter = new PriceSorter();
$productSalesPerViewSorter = new SalesPerViewSorter();

$catalog = new Catalog($products);
$productsSortedByPrice = $catalog->getProducts($productPriceSorter);
$productsSortedBySalesPerView = $catalog->getProducts($productSalesPerViewSorter);

print_r($productsSortedByPrice);
print_r($productsSortedBySalesPerView);
