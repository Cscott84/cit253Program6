<html lang="en">
<!--Corey Scott CIT 253 Assignment 6 10/11/2020-->
<head>
    <title>Order results</title>
    <meta charset="UTF-8">
    <!--BootStrap-->
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>    
<body class="container">

<?php
// error reporting 
error_reporting(E_ALL);

// get variables from form
$coffee = $_POST['coffee'];
$type = $_POST['type'];
$quantity = $_POST['quantity'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];


//switch to set price and proper display of the user's choice

switch ($coffee)
{
    case 'bocaVilla':
        $price = 7.99;
        $displayName = "Boca Villa";
    break;
    case 'southBeachRhythm':
        $price = 8.99;
        $displayName = "South Beach Rhythm";
    break;
    case 'pumpkinParadise':
        $price = 8.99;
        $displayName = "Pumkin Paradise";
    break;
    case 'sumatranSunset':
        $price = 9.99;
        $displayName = "Sumatran Sunset";
    break;
    case 'baliBatur':
        $price = 10.95;
        $displayName = "Bali Batur";
    break;
    case 'doubleDark':
        $price = 9.95;
        $displayName = "Double Dark";
    break;
    default:
    $price = 0.00;
break;

}

//  add dollar to decafinated coffee
if($type == "decaf")
{
    $typeCost = 1.00; 
}
else
{
    $typeCost = 0.00;
}



echo $typeCost;

$formOkay = true;


if(empty($name))
{
    echo "please enter a name";
    $formOkay = false;
}


if($formOkay)
{

    echo "hello $name $phone";

}
    else
    {
        echo "Warning, you have the following Errors";
    }



?>

<body>    



<html>   