<?php // open php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL); // code to report ERRORS

function pre_r( $array )  // Super Gobal Variable ARRAY
{     
    echo '<pre>';
    print_r($array);
    echo '</pre>'; 
}

pre_r($_POST); // Calling SuperGlobal  $_POST

$idr = "16.103,73"; // rate of 25-2-2022 to 1EURO

$eur = 1;

echo $idr;

echo $eur;

if(isset($_POST['submit'])){ // in Use of submit

    fromToCheck(); // start this function

}

function fromToCheck(){ // function that checks From / To
    if ($_POST['valuta1'] =="EUR" AND $_POST['valuta2'] == "IDR"){
        
        echo ($_POST["amountInput"]." ". $_POST["valuta1"] );

        echo " Is worth ";

        echo ($_POST["valuta2"]);

    } else if($_POST['valuta1'] =="IDR" AND $_POST['valuta2'] == "EUR"){

        echo ($_POST["amountInput"]." ".$_POST["valuta1"]);

        echo " Is worth ";

        echo ($_POST["valuta2"]);
    }
}



require "view.php";