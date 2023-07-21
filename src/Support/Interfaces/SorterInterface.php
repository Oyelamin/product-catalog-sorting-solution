<?php
/**
 * Created by PhpStorm.
 * User: blessing
 * Date: 21/07/2023
 * Time: 1:16 am
 */

namespace ProductCatalogSorting\Support\Interfaces;

interface SorterInterface
{
    public function sort(array $products): array;
}