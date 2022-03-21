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
        $sql = "SELECT * from consonant_words where cons_id = '".$_GET['id']."' ";
       $result2 = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result2))
                        {
                          while($consonant_words = mysqli_fetch_array($result2))
                          { 



        ?> 
        <div class = "update"> 
        <br>    
          <h2>Update your words</h2>
      
              <form action="update-consonants.php" method="POST">

               <center>
              <label><b>Id: <?php  echo $_GET['id']; ?>  </label>
              <br><br>
              <label><b>Word: </label>
              <input class="form" type="text" name="cons_name" value ="<?php echo $consonant_words["cons_name"]; ?>">
              <br>
              <br>
              <label for = "textarea"><b>Notes: </label>
              <textarea id="cons_notes" name="cons_notes"><?php echo $consonant_words["cons_notes"];   ?></textarea>
              <input type="hidden" name="cons_id" id="cons_id" value="<?php echo $_GET['id']; ?>" > </br>
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
  $id = $_POST['cons_id']; 

  $query = "UPDATE consonant_words SET cons_name = '".$_POST['cons_name']."', cons_notes = '".$_POST['cons_notes']."'  where cons_id = '".$_POST['cons_id']."' ";
  $result = mysqli_query($conn,$query);

  if($result)
  {
    echo '<script type = "text/javascript> alert("Data Updated") </script>';
    header('location: retrieve-consonants.php');
  }
  else
  {
     echo '<script type = "text/javascript> alert("Failed to update") </script>';
      header('location: retrieve-consonants.php');
  }
}

?>