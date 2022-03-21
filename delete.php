<?php 
include 'conn.php';

  if(isset($_GET['Delete']))

  {
    $id = $_GET['Delete'];
    $query = "delete from form_word where word_id = '".$id."' ";
    $result = mysqli_query($conn, $query);


    if($result)
    {
      header("location:retrieve-words.php");
    }

    else {
      echo 'please try again';
    }


}



?>