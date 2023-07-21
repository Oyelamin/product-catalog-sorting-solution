<?php
/**
 * Created by PhpStorm.
 * User: blessing
 * Date: 21/07/2023
 * Time: 12:50 am
 */

namespace ProductCatalogSorting\Helper;

use ProductCatalogSorting\Support\Interfaces\SorterInterface;

class SalesPerViewSorter implements SorterInterface
{
    /**
     * @param array $products
     * @return array
     */
    public function sort(array $products): array
    {
        usort($products, function ($a, $b) {
            $salesPerViewA = $a['sales_count'] / $a['views_count'];
            $salesPerViewB = $b['sales_count'] / $b['views_count'];
            return $salesPerViewA <=> $salesPerViewB;
        });
        return $products;
    }

}