<?php

/**
 * Created by PhpStorm.
 * User: blessing
 * Date: 21/07/2023
 * Time: 12:40 am
 */
namespace ProductCatalogSorting;

use ProductCatalogSorting\Support\Interfaces\SorterInterface;

final class Catalog
{
    private array $products;

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    /** Get product
     * @param SorterInterface $sorter
     * @return array
     */
    public function getProducts(SorterInterface $sorter): array
    {
        return $sorter->sort($this->products);
    }

}