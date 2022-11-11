<?php

include 'Calc.inc.php';

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$op = $_POST['op'];

$calculator = new Calc($num1,$num2,$op);
echo $calculator->calcMethod();
