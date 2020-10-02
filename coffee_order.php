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
    <h1 class="text-center">Bean House Coffee</h1>

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



//check true variable

$formOkay = true;

// check to see if any field has no input

if(
    empty($coffee) || !is_numeric($quantity) || empty($name) || empty($email) || empty($phone) || empty($address) || empty($city) || empty($state) || empty($zip))
    {
        $formOkay = false;
    }



if($formOkay)
{

   echo "<h2 class=\"text-left\"> Your Information Summary:</h2>";

   // total variable
   $total = $quantity * ($price + $typeCost);

   //arrays to hold key and values to be printed
   $info = [$city,$state,$zip];
   $info = implode(', ',$info);
   $sucess = ['Name'=> ucwords($name),'Adress'=>ucwords($address), 'City, State, Zip' => ucwords($info), 'Phone #' =>$phone, 'E-Mail'=> $email];
   


   echo "<table class=\"table table-striped border\">";
   foreach($sucess as $key => $value)
   {
       echo"<tr>";
       echo " <td>$key:</td>  <td>$value</td>";
       echo "</tr>";
   }

   
   
   echo "</table>";

   

   echo"<table class=\"table table-striped border\">";
   echo "<caption class=\"text-center font-weight-bold display-4\" style=\"caption-side: top;\">Your Order Details</caption>";
   echo "<thead>
            <tr>
            <th>Coffee</th><th>Type</th><th>Quantity</th><th>Unit Cost</th><th>Total</th>
            </tr>
        </thead>";
    echo "<tbody>
            <tr>
            <td>$displayName</td><td>$type</td><td>$quantity lb(s)</td><td>\$$price</td><td>\$$total</td> 
            </tr>";
    
    echo "<tr><td colspan=\"5\"><input class=\"btn btn-dark\" type=\"button\" onclick=\"window.location.href='/school/CIT_253_Assignment6/coffeeshop_input.html';\" value=\"Return to Order Form\" /> </td></tr>";       
    echo "</tbody></table>" ; 
}

else
{
    echo "<h2 class=\"text-center text-danger display-1 font-weight-bold\"> ERROR! </h2>";
        if(empty($coffee))
        {
            echo "<p class=\"text-center text-danger\">please select a coffe type </p>";
    
        }

        if (!is_numeric($quantity))
        {
            echo "<p class=\"text-center text-danger\">Please select a numeric value for quantity</p>";
    
        }

        if(empty($name))
        {
            echo "<p class=\"text-center text-danger\">please enter a name</p>";

        }

        if(empty($email))
        {
            echo "<p class=\"text-center text-danger\">Please enter an email address </p>";
    
        }

        if(empty($phone))
        {
            echo "<p class=\"text-center text-danger\">Please enter a phone number </p>";
    
        }

        if(empty($address))
        {
            echo "<p class=\"text-center text-danger\">Please enter an address </p>";
    
        }

        if(empty($city))
        {
            echo "<p class=\"text-center text-danger\">Please enter a city </p>";
    
        }

        if(empty($state))
        {
            echo "<p class=\"text-center text-danger\">Please enter a state</p>";
    
        }
        if(empty($zip))
        {
            echo "<p class=\"text-center text-danger\">Please enter a zip code </p>";

        }


 echo "<input class=\"btn btn-danger  \" type=\"button\" onclick=\"window.location.href='/school/CIT_253_Assignment6/coffeeshop_input.html';\" value=\"Return to Order Form\" />";
}




?>

<body>    



<html>   