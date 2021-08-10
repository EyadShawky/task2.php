<?php

if(isset($_GET['submit+']))
{
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];
    echo $num1+$num2;
}elseif (isset($_GET['submit-'])) {
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];
    echo $num1-$num2;
} elseif (isset($_GET['submitx'])) {
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];
    echo $num1*$num2;
}elseif(isset($_GET['submit/'])){
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];
    echo $num1/$num2;
}

?>