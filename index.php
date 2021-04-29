<?php
    
    header('Access-Control-Allow-Origin: *');
    if ($_SERVER['REQUEST_METHOD'] === "POST"){

    $op = ($_POST['op']);
    $n1 = ($_POST['n1']);
    $n2 = ($_POST['n2']);
   
    
    switch ($op) {
    case "add":
        $res = $n1 + $n2;
        echo $res;
        break;
    case "substract":
        $res = $n1 - $n2;
        echo $res;
        break;
    case "multiply":
        $res = $n1 * $n2;
        echo $res;
        break;
    case "divide":
        $res = $n1 / $n2;
        echo $res;
        break;
    case "exponentiate":
        $res = $n1 ** $n2;
        echo $res;
        break;
    }
    }
   
    ?> 
    
