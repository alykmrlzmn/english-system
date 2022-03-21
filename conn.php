<?php
//localhost,username,password,database name
$conn = new mysqli('localhost','root','','project');

if($conn){
    echo '';
}
else{
  die(mysqli_error($conn));
}


?>