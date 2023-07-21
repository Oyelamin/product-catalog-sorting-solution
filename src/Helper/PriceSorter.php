<?php

/**
 * Created by PhpStorm.
 * User: blessing
 * Date: 21/07/2023
 * Time: 12:43 am
 */

namespace ProductCatalogSorting\Helper;


use ProductCatalogSorting\Support\Interfaces\SorterInterface;
class PriceSorter implements SorterInterface
{
    /**
     * @param array $products
     * @return array
     */
    public function sort(array $products): array
    {
        usort($products, function ($a, $b) {
            return $a['price'] <=> $b['price'];
        });
        return $products;
    }
}