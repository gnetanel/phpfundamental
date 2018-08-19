<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        

require_once './classes/Product.php';
require_once './classes/Book.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$book = new Book(8.99);
$price = $book->getProductPrice();
echo "book price is $price"

?>
        
        
       
    </body>
</html>
