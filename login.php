<?php
include 'conn.php';
session_start();


 if(isset($_POST['submit'])){


$username =$_POST['stud_username'];
$password =$_POST['stud_password'];

 
  $sql = "select * from student where stud_username ='".$username."' and stud_password = '".$password."' limit 1";

  $result = mysqli_query( $conn, $sql);

  
  if (mysqli_num_rows($result)==1) {


         $_SESSION['submit']=true;
          $_SESSION['stud_username']=$username;
        header("Location: homepage.php");
        exit();
      
    }
    else
    {    echo 'You can not accesss';
    }
   
}




?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Login page</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <div class="login-form">
        <h1>LOGIN TO YOUR ACCOUNT</h1>
        <div class="container">
            <div class="main">
                <div class="content">
                    <!--<h2>login</h2>-->
                    <form action="login.php"method="post">
                        <input type="text" name="stud_username" placeholder="Username" autofocus="" id="stud_username">
                        <input type="password" name="stud_password" placeholder="Password" autofocus="" id="stud_password">
                        <button class="btn" type="submit" name="submit">LOGIN</button>
                    </form>
                    <p class="account"> Don't have an account? <a href="register.php">Register</a></p>
                </div>  
                <div class="form-img">
                    <img src="gambar-login-cartoon.png"> 
                </div>
            </div>
        </div>
    </div>

</body>
</html>


