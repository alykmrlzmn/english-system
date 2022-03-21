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
        $sql = "SELECT * from vowel_words where vowel_id = '".$_GET['id']."' ";
       $result2 = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result2))
                        {
                          while($vowel_words = mysqli_fetch_array($result2))
                          { 



        ?> 
        <div class = "update"> 
        <br>    
          <h2>Update your words</h2>
      
              <form action="update-vowel.php" method="POST">

               <center>
              <label><b>Id: <?php  echo $_GET['id']; ?>  </label>
              <br><br>
              <label><b>Word: </label>
              <input class="form" type="text" name="vowel_name" value ="<?php echo $vowel_words["vowel_name"]; ?>">
              <br>
              <br>
              <label for = "textarea"><b>Notes: </label>
              <textarea id="vowel_notes" name="vowel_notes"><?php echo $vowel_words["vowel_notes"]; ?></textarea>
              <input type="hidden" name="vowel_id" id="vowel_id" value="<?php echo $_GET['id']; ?>" > </br>
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
  $id = $_POST['vowel_id']; 

  $query = "UPDATE vowel_words SET vowel_name = '".$_POST['vowel_name']."', vowel_notes = '".$_POST['vowel_notes']."'  where vowel_id = '".$_POST['vowel_id']."' ";
  $result = mysqli_query($conn,$query);

  if($result)
  {
    echo '<script type = "text/javascript> alert("Data Updated") </script>';
    header('location: retrieve-vowel.php');
  }
  else
  {
     echo '<script type = "text/javascript> alert("Failed to update") </script>';
      header('location: retrieve-vowel.php');
  }
}

?>