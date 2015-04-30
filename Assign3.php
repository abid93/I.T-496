<?php

//In this program we will use 2 files with information about the person and the address and fill the information within an array.

require "info.php";
require "Address.php";

//Create instances

$my_info = new Person;
$my_address = new Address;
    
//Populating information into an array

$My_array = array("Taha","Abid", "Mahmood", "22", "250 Jaycee Ct", "Apt 210", "Mankato", "MN", "56001");

//Populating from both files

$my_info -> firstName = $My_array[0];
$my_info -> middleName = $My_array[1];
$my_info -> lastName = $My_array[2];
$my_info -> age = $My_array[3];
$my_address -> street1 = $My_array[4];
$my_address -> street2 = $My_array[5];
$my_address -> city = $My_array[6];
$my_address -> state = $My_array[7];
$my_address -> zipCode = $My_array[8];

//Printing My_array

echo '<pre>';
print_r($My_array);
echo '</pre>';

?>