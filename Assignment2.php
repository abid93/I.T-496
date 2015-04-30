<?php

//Read the file and store the contents into an array called $array_all and print out the contents as they appear in the file.

//Split $array_all into two new arrays called $array_string and $array_int. Sort the arrays by descending order and print out the array. Each value should be on a new line.

//All three arrays

$array_all = array();
$array_int = array();
$array_string = array();

//Opening and reading the text file

$My_file = fopen("Assignment2.txt", "r");

//Storing the contents into an array

while(!feof($My_file)) {

    $array_all[] = fgets($My_file);}

//Printing the contents of an array
echo"<br>";
echo "Main_array."."<br>";
foreach($array_all as $row){
echo $row . "<br>";}

//Splitting integers from strings

foreach($array_all as $row) {
 if ((int)$row == 0 && $row != "0"){
     $array_string[] = $row;}
    else{
$array_int[] = (int)$row;}
}

//Sorting array to print integers

asort($array_int);
echo"<br>";
echo"Integers."."<br>";
foreach ($array_int as $row){
echo $row.'<br>';}

//Sorting array to print strings

asort($array_string);
echo"<br>";
echo "Strings."."<br>";
foreach ($array_string as $row){
echo $row.'<br>';}

//Closing the file

fclose($My_file);
?>