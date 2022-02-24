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
pre_r($_GET);
$intro = "This is the intro text";
if(isset($_POST['submit'])){
    echo($_POST['amountInput']);
}
require "view.php";