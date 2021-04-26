<?php 
    if ($type_of_req === "POST"):

    # 1. Данные отправлялись методом POST 
    # 3. Наша форма не выводилась, если мы отправили данные, а выводилась только когда мы открыли страницу методом GET,
    # выводить захешированные данные только, если мы их отправили методом POST

    $op = $_POST['op'];
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    // var_dump($op);
    // var_dump($n1);
    // var_dump($n2);
    
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
   
    ?> 
    
    <?php endif ?>
