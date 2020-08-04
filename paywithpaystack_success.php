<?php

include("includes/db.php");
include("functions/functions.php");


if(isset($_GET['pro_id'])){
    
    $pro_id = $_GET['product_id'];
    
    $query = "SELECT product FROM products WHERE pro_id=$pro_id";
    
    $query_sql = mysqli_query($con, $query);
    
    while($row = mysqli_fetch_array($query_sql)){
        
        
        $product = $row['product'];
        
    }
    
    echo "<p>Right click to download file ".$product."</p>";
    echo "
    <button type='button'>
    
    <a href='www.renaissanceassembly.org/admin_area/main_product/".$product."' download>Download</a>
        
    </button>";
    
}
else{
    echo "Error!";
}
