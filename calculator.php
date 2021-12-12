<?php
    echo "hello world!";

    $a = 10;
    $b = 20;
    $sum = $a + $b;
    $dif = $b - $a;
    $pro = $a * $b;
    $quo = $a / $b;
    echo "<br> Sum = ".$sum;
    echo "<br> Difference = ".$dif;
    echo "<br> Product = ".$pro;
    echo "<br> Quotient = ".$quo."<br>";

    if($a>$b)
        echo $a." is greater.";
    else if($b>$a)
        echo $b." is greater.";
    else
        echo "Neither is greater.";
?>