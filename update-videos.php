<?php
include 'conn.php';
session_start();

?>
<html>
  <head> <link rel="stylesheet" type="text/css" href="update.css">
    <style type="text/css">
   
    </style>
    <body>
      <center>
       
        
        <br>
        <?php
        /* echo $_GET['id']; */ 
        $sql = "SELECT * from online_video where video_id = '".$_GET['id']."' ";
       $result2 = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result2))
                        {
                          while($online_video = mysqli_fetch_array($result2))
                          { 



        ?> 
        <div class = "update"> 
        <br>    
          <h2>Update your words</h2>
      
              <form action="update-videos.php" method="POST">

               <center>
              <label><b>Id: <?php  echo $_GET['id']; ?>  </label>
              <br><br>
              <label><b>Word: </label>
              <input class="form" type="text" name="video_url" value ="<?php echo $online_video["video_url"]; ?>">
              <br>
              <br>
              <label for = "textarea"><b>Notes: </label>
              <textarea id="video_notes" name="video_notes"><?php echo $online_video["video_notes"]; ?></textarea>
              <input type="hidden" name="video_id" id="video_id" value="<?php echo $_GET['id']; ?>" > </br>
              <br>
              <button class="button" type = "submit" name = "update" value = "submit">UPDATE</button> 
      
        </form> 
      </div>
     
        <?php 
      }
    } 
        ?>
      </center>
</html>
 <?php

if(isset($_POST['update']))
{
  $id = $_POST['video_id']; 

  $query = "UPDATE online_video SET video_url = '".$_POST['video_url']."', video_notes = '".$_POST['video_notes']."'  where video_id = '".$_POST['video_id']."' ";
  $result = mysqli_query($conn,$query);

  if($result)
  {
    echo '<script type = "text/javascript> alert("Data Updated") </script>';
    header('location: retrieve-videos.php');
  }
  else
  {
     echo '<script type = "text/javascript> alert("Failed to update") </script>';
      header('location: retrieve-videos.php');
  }
}

?>