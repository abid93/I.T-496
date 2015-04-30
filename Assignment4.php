<?php
//connection using connect.php 
require 'connect.php';
//storing everything into results.
$result = $db -> query("SELECT * FROM inventory");
ChangeColumnName($db);
TrimColumnDescription($db);
//change column name from date_received column to date_updated.
    function ChangeColumnName($db){
        $db->query("ALTER TABLE `inventory` CHANGE `Date_Received` `Date_Updated` VARCHAR(25);");
    }
//trimming description column to a length of 20
    function TrimColumnDescription($db){
        $db->query("ALTER TABLE `inventory` CHANGE `Description` `Description` VARCHAR(20);");
    }
//removing timestamp from Date_Received column
    function RemoveTimeStamp($dateStr){
        return substr($dateStr,0,10);
    }
// Print Table
if ($result -> num_rows >0) {
    echo "<table><tr><th>Inventory_ID</th><th>Part_Number</th><th>Descripton</th><th>Quantity</th><th>Price</th><th>Date_Updated</th></tr>";
    while($r = $result->fetch_assoc()) {
//calling RemoveTimeStamp funtion within echo statement 
    echo "<tr><td>".$r["Inventory_Id"]."</td><td>".$r["Part_Number"]."</td><td>".$r["Description"]."</td><td>".$r["Quantity"]."</td>                 <td>".$r["Price"]."</td><td>".removeT($r["Date_Updated"])."</td></tr>";}
    echo "</table>";} 
    else {echo "0 results";}
$db -> close();
?>