<?php

require_once 'classes/Database.php';

$db = new Database('localhost', 'root', 'galigali', 'testgalwebsite');
 // good
 //  $db->query("SELECT `articles`.`article`, `articles`.`id` FROM `articles`");
 // Below also seesm to work!, not sure why ` is mention in the course page
  $db->query("SELECT articles.article, articles.id FROM articles");
// $db->query("SELECT articles.article FROM articles");
echo $db->numRows();
$db->disconnect();

if ($db->numRows() == 0){
    echo "No Articles";
} else {
    foreach($db->rows() as $article){
        echo '<pre>', print_r($article), '</pre>'; 
    }
}

//if 

//db->query("SELECT `articles`.`title` FROM `articles`");
//
//if($db->numRows == 0){
//    echo "No aricles";
//} else {
//    foreach ($db->rows() as $article){
//        echo $article['title'], '<br>';
//    }
//}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/*
 * Info on databse...
 * dbname testgalwebsite, table articles, values id (primary key) and article (text)
 */