<?php 



    $connection = mysqli_connect("localhost", "root", ""); 
    $db = mysqli_select_db($connection,"roomraccoon-db"); 
    
    //Fetching Values from URL
    $itemId = $_POST['itemId'];
    $itemName = $_POST['itemName'];
    
    //update query
    $query = mysqli_query($connection,"update products SET name = $itemName WHERE id = $itemId");
    
    echo "Updated";
    
    mysqli_close($connection);


?>