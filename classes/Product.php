<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Product {
    protected $_price;
    const TEST = 0.20;
    public function __construct($price) {
        $this->_price = $price;
    }
          
    public function getProductPrice(){
        return $this->_price;
    }  
    
    public function calculateProductVat(){
        return $this->_price * 0.20;
    }
    
    public function getTest(){
        return self::TEST;
    }
}

?>