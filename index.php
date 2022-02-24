<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

function pre_r( $array )
{     
    echo '<pre>';
    print_r($array);
    echo '</pre>'; 
}
pre_r($_POST);

if(isset($_POST['submit'])){
    echo($_POST['amountInput']);
}
function balanceCheck(){
    if ($_POST['valuta1'] === "EUR"){
        echo "Euro";
    }
}
balanceCheck();


require "view.php";