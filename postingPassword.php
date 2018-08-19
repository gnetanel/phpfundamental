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
        <form action="" method="POST">
            <br>Name:<br>
            <input type="text" name="name">
            <br>Password:<br>
            <input type="password'" name="password">
            <br>
            <input type="submit" value="Submit">
            <br>
        </form>
        
        <?php
        $name = $_POST['name'];
        $password = $_POST['password'];
        
        if(isset($name) && isset($password)){
            if (!empty($name) && !empty($password)){
                echo "Name is $name, password is $password";
            } else {
                echo "Name and password are empty";
            }
        } else {
            echo "Name and password are not set";
        }
        
        ?>
    </body>
</html>
