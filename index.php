<?php
    
    header('Access-Control-Allow-Origin: *');
    if ($_SERVER['REQUEST_METHOD'] === "GET"){
    echo('Hello world') ;}
    if ($_SERVER['REQUEST_METHOD'] === "POST"){
    echo('Hello world 2');
    echo($_POST)

    $op = ($_POST['op']);
    $n1 = ($_POST['n1']);
    $n2 = ($_POST['n2']);
    echo $n1;
    
    var_dump($op);
    var_dump($n1);
    var_dump($n2);
    
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
    
