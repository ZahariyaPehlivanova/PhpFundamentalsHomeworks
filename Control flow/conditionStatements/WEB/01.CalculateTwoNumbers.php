<?php
if(isset($_GET['calc'])){
    $operation = $_GET['operation'];
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $result = "";
    if($operation == 'sum'){
        $result = $num1 + $num2;
    }else{
        $result = $num1 - $num2;
    }
}
include '01.FrontEnd.php';
