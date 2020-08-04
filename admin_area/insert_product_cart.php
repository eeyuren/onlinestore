<?php

include("includes/db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
        <div class="form-group"><!-- form-group Begin -->
                       
                <label class="col-md-3 control-label"> Cart Title </label> 
                      
            <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                <input name="cart_title" type="text" class="form-control" required>
                          
            </div><!-- col-md-6 Finish -->
                       
        </div><!-- form-group Finish -->

        <div class="form-group"><!-- form-group Begin -->
                       
                <label class="col-md-3 control-label"> Cart Desc </label> 
                      
            <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                <textarea name="cart_desc" class="form-control" required></textarea>
                          
            </div><!-- col-md-6 Finish -->
                       
        </div><!-- form-group Finish -->

        <input type="submit" name="submit">
                   
    </form>
</body>
</html>

<?php

if(isset($_POST['submit'])){

    $cart_title = $_POST['cart_title'];
    $cart_desc = $_POST['cart_desc'];

    $insert = "INSERT INTO product_categories(p_cat_title, p_cat_desc) values ('$cart_title', '$cart_desc')";

    $query = mysqli_query($con, $insert);

    if($query){
        echo "<script>alert('Product category has been Inserted Successfully')</script>";
        echo"<script>windows.open('insert_producr.php','_self')</script>";
    }

}


?>