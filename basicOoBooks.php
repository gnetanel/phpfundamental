<?php

require_once './classes/Product.php';
require_once './classes/Book.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


ini_set('display_errors', 1);
error_reporting(E_ALL);        

$book = new Book(8.99);
$price = $book->getProductPrice();
$vat = $book->calculateProductVat();
echo "book price is $price, vat is $vat";       

?>