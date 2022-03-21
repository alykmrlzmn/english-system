<?php 
include 'conn.php';

  if(isset($_GET['Delete']))

  {
    $id = $_GET['Delete'];
    $query = "delete from vowel_words where vowel_id = '".$id."' ";
    $result = mysqli_query($conn, $query);


    if($result)
    {
      header("location:retrieve-vowel.php");
    }

    else {
      echo 'please try again';
    }


}



?>