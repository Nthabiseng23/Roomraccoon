<?php 



    $connection = mysqli_connect("localhost", "root", ""); 
    $db = mysqli_select_db($connection,"roomraccoon-db"); 
    
    //Fetching Values from URL
    $itemId = $_POST['itemId'];
    
    //update query
    $query = mysqli_query($connection,"update products SET deleted = 1 WHERE id = $itemId");
    
    echo "Deleted";
    
    mysqli_close($connection);


?>