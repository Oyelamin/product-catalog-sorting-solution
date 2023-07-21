# Product Catalog Sorting Solution for Scnip


## **`Language Used`**
- PHP - OOP, Design patterns 


## **`Solution Installation`**
- Clone this repository: `git clone https://github.com/Oyelamin/product-catalog-sorting-solution.git`
- Install the dependency: `composer install`

<br>
Now You can run the code for use

## **`Solution Usage`**

1. Firstly, you can either choose to run the solution in the *index.php* file or inject in your 
php application as long as composer is installed, you are good to go!.<br><br>
2. You can initialise the Catalog class but you need to import it into your file or controller class. e.g:
<br>
    ###   *`use ProductCatalogSorting\Catalog;`*
<br>
3. Declare your product inputs. e.g:<br>

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
   <br>

4. Feed your declared inputs in the Catalog class as initialization:<br><br>
   `$catalog = new Catalog($products);
   `<br><br>
5. Declare/initialise the sorting helpers and feed the `getProducts()` method with the initialised classes:<br>


      $productPriceSorter = new PriceSorter();<br>
      $productSalesPerViewSorter = new SalesPerViewSorter();

      $productsSortedByPrice = $catalog->getProducts($productPriceSorter);
      $productsSortedBySalesPerView = $catalog->getProducts($productSalesPerViewSorter);
   
<br><br>
5. You can print the results:
<br>


      print_r($productsSortedByPrice);
      print_r($productsSortedBySalesPerView);


## **`Example`**

This is example of how you can run it:

    <?php

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


    // THANK YOU and i hope you enjoyed the code ❤ 🤗!!!!!