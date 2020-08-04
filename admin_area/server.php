<?php
session_start();

$email = "";
$password = "";
$errors = array();

 /* if(isset($_POST['submit'])){

    $title = mysqli_real_escape_string($conn, strip_tags($_POST['title']));
    $surname = mysqli_real_escape_string($conn, strip_tags($_POST['surname']));
    $firstname = mysqli_real_escape_string($conn, strip_tags($_POST['Firstname']));
    $phone = mysqli_real_escape_string($conn, strip_tags($_POST['phoneNo']));
    $email = mysqli_real_escape_string($conn, strip_tags($_POST['email']));
    $church = mysqli_real_escape_string($conn, strip_tags($_POST['church']));
    $member = mysqli_real_escape_string($conn, strip_tags($_POST['member']));
    $category = mysqli_real_escape_string($conn, strip_tags($_POST['category']));
    $levels = mysqli_real_escape_string($conn, strip_tags($_POST['levels']));
    $date = mysqli_real_escape_string($conn, strip_tags($_POST['date']));
    $password = mysqli_real_escape_string($conn, strip_tags($_POST['password']));
    $confirm_password = mysqli_real_escape_string($conn, strip_tags($_POST['confirm_password']));
     
     // ensure that form fields are filled properly
     if(empty($firstname)){
         array_push($errors, "First Name is required");
     }
     if(empty($email)){
         array_push($errors, "Email is required");
     }
     if(empty($title)){
         array_push($errors, "Title is required");
     }
     if(empty($surname)){
         array_push($errors, "Surname is required");
     }
     if(empty($category)){
         array_push($errors, "Category is required");
     }
     if(empty($levels)){
         array_push($errors, "Partnership Level is required");
     }
     if(empty($password)){
         array_push($errors, "Password is required");
     }
     if($password != $confirm_password){
         array_push($errors, "The Passwords do not match");
     } 
     
     // If there are no errors, insert into database
     
       if(count($errors) == 0){
           $password = md5($password);
           $insql = "INSERT INTO admin (title, surname, firstname, phoneNumber, email, church_chapter, member, category, partnership_level, mydate, mypassword)
        VALUES ('$title', '$surname', '$firstname', '$phone', '$email', '$church', '$member', '$category', '$levels', '$date', '$password')";

        $work = mysqli_query($conn, $insql);

        if($work){
            ?>
              <script>window.location="login.php";</script>
            <?php
        }
        else{
            echo "Not Successful";
        }
       } */
        
 }

if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($con, strip_tags($_POST['email']));
    $password = mysqli_real_escape_string($con, strip_tags($_POST['password']));
    $id = mysqli_real_escape_string($con, strip_tags($_POST['id']));
    
    // Ensure that form fields are filled properly
    if(empty($email)){
        array_push($errors, "Email is required");
    }
    if(empty($password)){
        array_push($errors, "Password is required");
    }
    
    if(count($errors) == 0 ){
        $password = md5($password);
    $query = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) == 1 ){
        // Login User in
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $id;
        $_SESSION['success'] = "You are now logged in";
        header('location: insert_product.php');
     } else{
        array_push($errors, "wrong email/password");
        header('location: login.php');
    }
    }
}

// Logout
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['email']);
    header('location: login.php');
}

?>