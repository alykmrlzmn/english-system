<?php 
include 'conn.php';

  if(isset($_GET['Delete']))

  {
    $id = $_GET['Delete'];
    $query = "delete from online_video where video_id = '".$id."' ";
    $result = mysqli_query($conn, $query);


    if($result)
    {
      header("location:retrieve-videos.php");
    }

    else {
      echo 'please try again';
    }


}



?>