<?php


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Book
 *
 * @author netanel
 */
class Book extends Product{
    //put your code here
    public function __construct($price) {
        parent::__construct($price);
    }
    
     public function calculateProductVat(){
        return $this->_price * 0.10;
    }
}
