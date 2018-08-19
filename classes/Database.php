<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author netanel
 */
class Database {
    protected $_link;
    protected $_result;
    protected $_numRows;
    
    public function __construct($server, $username, $password, $db) {
//        $this->_link = mysqli_connect($server, $username, $password, $db, $port, $socket)
          $this->_link = mysqli_connect($server, $username, $password);        
          mysqli_select_db($this->_link, $db);
    }
    
    public function disconnect(){
        mysqli_close($this->_link);
    }
    
    public function query($sql){
        $this->_result = mysqli_query($this->_link, $sql);
        $this->_numRows = mysqli_num_rows($this->_result);
    }
    
    public function numRows(){
        return $this->_numRows;
    }
    
    public function rows(){
        $rows = array();
        for($x = 0; $x < $this->numRows(); $x++){
            $rows[$x] = mysqli_fetch_assoc($this->_result);
        }
        return $rows;
    }
    
}
