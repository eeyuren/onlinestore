<center><!-- Center begins -->

    <h1>Do You Really Want to Delete Your Account? </h1>

        <form action="" method="post"><!-- form begins -->

            <input type="submit" name="Yes" value="Yes, I want to Delete" class="btn btn-danger">

            <input type="submit" name="No" value="No, I don't Want to Delete" class="btn btn-primary">

        </form><!-- form ends -->

</center><!-- Center ends -->

<?php

$c_email = $_SESSION['customer_email'];

if(isset($_POST['Yes'])){

$delete_customer = "delete from customers where customer_email='$c_email'";

$run_delete_customer = mysqli_query($con, $delete_customer);

if($run_delete_customer){
    
    session_destroy();
    
    echo"<script>alert('Are you sure you want to delete your account? This action cannot be reversed!')</script>";
    
    echo"<script>window.open('../index.php')</script>";
  }
    
}

if(isset($_POST['No'])){
    
    echo"<script>window.open('my_account.php?my_orders','_self')</script>";
}

?>