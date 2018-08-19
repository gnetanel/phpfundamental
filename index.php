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
        function name($param1){
            echo "<br>Inside function, param1 = $param1<br>";
        }
        
        function functParams(){
            echo "<br>Inside function functParams<br>";
            print_r(func_get_args());          
            echo "<br>";
        }
        
        name('Dave');
        echo "hello world2</br>";
        
        functParams('1','2','abc');
       
        $mystr = 'str1';
        switch ($mystr){
            case 'str1':
                echo "STR1";
                break;
            case 'str2':
                echo "STR2";
                break;
            default :
                echo "Unknown srt";
                
        }
        echo "</br>";
        $names = array('Alex'=>21, 'Bob'=>22);
        print_r($names);
       echo "<br> Start running with foreach loop <br>";
        foreach($names as $value){
            echo $value.'<br>';
        }
        
        foreach ($names as $key => $value){
            echo "key=$key, Value = $value <br>";
        }
       
        ?>
    </body>
</html>