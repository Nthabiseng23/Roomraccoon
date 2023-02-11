<html>
    <head>
    <title>ROOMRACCOON Assessment</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
<body>

<h1>Products list</h1>
<div>
    <a class="btn btn-primary" href="">Add Item</a>
</div>
<br/>
<table class="table table-striped">
    <thead class="table-dark">
    <tr>
        <th>Name</th>
        <th>Actions</th>
    </tr>
    </thead>
<tbody>

<?php
include('db.php');

if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	$page_no = $_GET['page_no'];
	} else {
		$page_no = 1;
        }

	$total_records_per_page = 5;
    $offset = ($page_no-1) * $total_records_per_page;
	$previous_page = $page_no - 1;
	$next_page = $page_no + 1;
	$adjacents = "2"; 

	$result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM `products`");
	$total_records = mysqli_fetch_array($result_count);
	$total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
	$second_last = $total_no_of_pages - 1; 

    $result = mysqli_query($con,"SELECT * FROM `products` LIMIT $offset, $total_records_per_page");
    while($row = mysqli_fetch_array($result)){
		echo "<tr>
			  <td>".$row['prod_name']."</td>
	 		  <td><a class='btn btn-secondary' href=''>Edit</a> | <a class='btn btn-danger' href=''>Delete</a> | <input type='checkbox'>Checked</td>
		   	  </tr>";
        }
	mysqli_close($con);
    ?>
</tbody>
</table>

<script>
    
</script>



















</body>
</html>