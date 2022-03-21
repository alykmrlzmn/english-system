<?php
include 'conn.php';


 /*if(isset($_REQUEST['submit'])){

  $name = $_POST['stud_name'];
  $username = $_POST['stud_username'];
  $password = $_POST['stud_password'];

  $sql = "insert into student (stud_name, stud_username, stud_password) values ('$name','$username', '$password')";

  $result = mysqli_query( $conn, $sql);

  if($result)
  {
    echo "Data inserted successfully";
  }
  else {
    die(mysqli_error($conn)); }

 }

?> 

 */ 

if(isset($_REQUEST['save']))
{
  
$sql = "INSERT INTO student (stud_username, stud_name, stud_password)
VALUES ('".$_POST['stud_username']."','".$_POST['stud_name']."','".$_POST['stud_password']."')";

if (mysqli_query($conn, $sql)) {
  echo "<script>window.alert('The account is successful created')</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);

}

//else{ 
?>

<!DOCTYPE html>
<html><head>
  <meta charset="utf-8">
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <div class="login-form">
        <h1>CREATE YOUR OWN ACCOUNT</h1>
        <div class="container">
            <div class="main">
                <div class="content">
                    <!--<h2>login</h2>-->
                    <form action="register.php"method="post">
                         <label><b>Name</b></label>
                        <input type="text" name="stud_name" placeholder="Name" autofocus="" id="stud_name">
                        <label><b>Username</b></label>
                         <input type="text" name="stud_username" placeholder="Username" autofocus="" id="stud_username">
                        <label><b>Password</b></label>
                        <input type="password" name="stud_password" placeholder="Password" autofocus="" id="stud_password">
                        <button class="btn" type="submit" name="save">SUBMIT</button>
                    </form>
                    <p class="account">Already have an account? <a href="login.php">Login here</a></p>
                </div>  
                <div class="form-img">
                    <img src="gambar-login-2.jpg"> 
                </div>
            </div>
        </div>
    </div>

</body>
</html>
