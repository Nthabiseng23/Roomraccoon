<html>
    <head>
    <title>ROOMRACCOON Assessment</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>    
</head>
<body>

<h1>Add item</h1>

<form name = "myForm" action="data_file.php" method = "post" >    
    <div class = "container">    
        <div class = "form_group">    
            <label>Item Name:</label>    
            <input class="form-control" type = "text" id = "item_name" name = "item_name" required/>    
        </div>    
        <br/>
        <div class = "form_group">    
            <a class='btn btn-success submit' type='submit'>Submit</a> | <a class='btn btn-primary' href='index.php'>home</a>
        </div>    
            
    </div>    
</form>  


</tbody>
</table>

<script>
    $(".submit").click(function() {
        console.log($("#item_name").val());
        var itemName = $("#item_name").val();

        if(itemName == '' || itemName == null){
            alert("Please enter the Item name");
            return;
        }

        var formData = {
            itemName: itemName,
        };

        $.ajax({
            type: "POST",
            url: "data_file.php",
            data: formData,
            dataType: "json",
            encode: true, 
            success: function(html) {
                console.log(html);
                $("form").trigger("reset");
                alert("Saved");
            }
        });
    });
</script>



















</body>
</html>
