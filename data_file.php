<?php

$connection = mysqli_connect("localhost", "root", ""); 
$db = mysqli_select_db($connection,"roomraccoon-db"); 

//Fetching Values from URL
$itemName = $_POST['itemName'];

//Insert query
$query = mysqli_query($connection,"insert into products(id, prod_name, deleted, checked) values ('', '$itemName',0,0)");

echo "Saved";

mysqli_close($connection);

?>