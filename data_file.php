<?php

$connection = mysql_connect("localhost", "root", ""); 
$db = mysql_select_db("roomraccoon-db", $connection); 

//Fetching Values from URL
$itemName = $_POST['itemName'];

//Insert query
$query = mysql_query("insert into products(id, prod_name, deleted, checked) values ('', '$itemName',0,0)");

echo "Saved";

mysql_close($connection);

?>