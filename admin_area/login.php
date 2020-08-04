<?php

include("includes/db.php");

include("server.php");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css" />


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="Newfont/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/animate.min.css">
  <link rel="icon" href="ioo.ico">  

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <style>
        .site-nav {
    margin-top: -90px;
    margin-right: 750px;
}

            header{
                margin-top: -70px;
            }

.site-nav ul {
    list-style: none;
    position: absolute;
}


.dp .nav_dropdown {
    background: seagreen;
    border-radius: 5px;
    box-shadow: 0px 0px 2px 0px gray;
    display: none;
    z-index: 1000;
}

section{
    margin: auto;
}
            
.error{
    width: 92%;
    margin: 0px auto;
    padding: 10px;
    border: 1px solid #a94442;
    color: #a94442;
    background: #f2dede;
    border-radius: 5px;
    text-align: left; 
}
</style>
</head>
<body>

        <?php

include "../includes/header.php";

?> 
<br><br><br><br>

<div class="container"><br><br><br><br>
    <div class="col-sm-12">
        <div class="row">     
            <section class="col-sm-6">
            <h2>Login</h2><br><br>
                <div class="wrapper">
                    <form method="post" enctype="multipart/form-data">
                        <!-- Display Validation errors here -->
                
                <?php include "errors.php"; ?>
                        
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" placeholder="Input Email" class="form-control" required>
                        </div><br>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" placeholder="Input Password" class="form-control" required>
                        </div><br>

                        <input type="submit" name="login" value="Login" class="btn btn-lg btn-success">
                    </form>
                </div>
            </section>
        </div>
    </div>
    </div>
    



    <br><br><br><br><br><br><br>
<?php
include "../includes/footer.php";
?>
</body>


<script>
  AOS.init();
</script>

<script src="js_1/jquery.js"></script>
<script src="js_1/jquery.scrollorama.js"></script>
<script src="js_1/jquery-ui.js"></script>
<script src="js/bootstrap.js"></script>
<script src="/path/to/bootstrap.min.js"></script>
<script src="bootstrap-hover-dropdown-master/bootstrap-hover-dropdown.min.js"></script>

<script>
   $(document).ready(function(){
        $('.dp').hover(function(){
            $(this).children('.nav_dropdown').slideDown(600);
        },
         
         function(){
             $(this).children('.nav_dropdown').slideUp(400);
         }

        );

       /*         $('.mobile_dp').click(function(){
            $(this).children('.mobile_nav_dropdown').slideDown(600);
        },
         
         function(){
             $(this).children('.mobile_nav_dropdown').slideUp(400);
         }

        ); */

         });
    </script>
</html>