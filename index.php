<?php // open php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL); // code to report ERRORS

// function pre_r( $array )  // Super Gobal Variable ARRAY
// {     
//     echo '<pre>';
//     print_r($array);
//     echo '</pre>'; 
// }

// pre_r($_POST); // Calling SuperGlobal  $_POST

$idr = 16103.73; // rate of 25-2-2022 to 1EURO

$eur = 0.000062; // rate of 25-2-2022 to 1 idr



if(isset($_POST['submit'])){ // in Use of submit

    $result = fromToCheck($idr,$eur); // start this function

}

function fromToCheck($idr,$eur){ // function that checks From / To
   
    if ($_POST['valuta1'] =="EUR" AND $_POST['valuta2'] == "IDR"){
        $transformtValue = $_POST['amountInput']  * $idr;
        $message = $_POST['amountInput']. " " . $_POST['valuta1'] . ' Is worth ' . $transformtValue. " " . $_POST['valuta2'];
        return $message;
    }

     else if ($_POST['valuta1'] =="IDR" AND $_POST['valuta2'] == "EUR"){
        $transformtValue = $_POST['amountInput'] * $eur;
        $message = $_POST['amountInput']. " " . $_POST['valuta1'] . ' Is worth ' . $transformtValue. " " . $_POST['valuta2'];
        return $message;
    }
}

require "view.php";