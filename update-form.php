<?php
include 'conn.php';
session_start();

?>
<html>
  <head>

  <link rel="stylesheet" type="text/css" href="update.css">
    <style type="text/css">
    </style>
    <body>
      <center>
       
        
        <br>
        <?php
        /* echo $_GET['id']; */ 
        $sql = "SELECT * from form_word where word_id = '".$_GET['id']."' ";
       $result2 = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result2))
                        {
                          while($form_word = mysqli_fetch_array($result2))
                          { 



        ?> 
        <div class = "update"> 
        <br> 
          <h2>Update your words</h2>
      
              <form action="update-form.php" method="POST">

               <center>
              <label><b>Id: <?php  echo $_GET['id']; ?>  </label>
              <br><br>
              <label><b>Word: </label>
              <input class="form" type="text" name="word_name" value ="<?php echo $form_word["word_name"]; ?>">
              <br>
              <br>
              <label for = "textarea"><b>Notes: </label>
              <textarea id="word_notes" name="word_notes"><?php echo $form_word["word_notes"]; ?></textarea>
              <input type="hidden" name="word_id" id="word_id" value="<?php echo $_GET['id']; ?>" > </br>
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
  $id = $_POST['word_id']; 

  $query = "UPDATE form_word SET word_name = '".$_POST['word_name']."', word_notes = '".$_POST['word_notes']."'  where word_id = '".$_POST['word_id']."' ";
  $result = mysqli_query($conn,$query);

  if($result)
  {
    echo '<script type = "text/javascript> alert("Data Updated") </script>';
    header('location: retrieve-words.php');
  }
  else
  {
     echo '<script type = "text/javascript> alert("Failed to update") </script>';
      header('location: retrieve-words.php');
  }
}

?>