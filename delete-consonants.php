<?php 
include 'conn.php';

  if(isset($_GET['Delete']))

  {
    $id = $_GET['Delete'];
    $query = "delete from consonant_words where cons_id = '".$id."' ";
    $result = mysqli_query($conn, $query);


    if($result)
    {
      header("location:retrieve-consonants.php");
    }

    else {
      echo 'please try again';
    }


}



?>