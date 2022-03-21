<?php
include'conn.php';
include 'nav-bar-latest.html';

?>


<?php
include_once 'conn.php';
if(isset($_POST['save']))
{  
   $word_name = $_POST['word_name'];
   $word_notes = $_POST['word_notes']; 
   $sql = "INSERT INTO form_word (word_name,word_notes)
   VALUES ('$word_name','$word_notes')";
   if (mysqli_query($conn, $sql)) {
    echo "New record created successfully !";
    header('location: retrieve-words.php');
   } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
   }
   mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head><title>Create words</title> </head>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="create.css">
</head>
<style>
  
</style>
<body>
  <div class="wrapper">
     <div class="home-img"> <!-- .wrapper > div:nth-child(odd) { -->
     <img src="gambar-login-2.jpg"> 
      </div> 
      <div class =" content"> <!-- .wrapper > div:nth-child(odd)  -->
        <br><br><br>
  You can add the words that you had recently learned today and you can put anything on the notes section as your own study notes. As soon as you have done adding the words and notes please enter the submit button to save the words.<br>
  <br><br>
  For example :
   
  <br><b>word : Apple

  <br>Notes : Defination of apple = red fruits.</b>


  </div>   
</div> <center>
<div class="create-words">  

        <form method="post" action="create-words.php">
          <br>
          <h4>INSERT YOUR OWN WORD</h4>
          <br>
             <center>
              <label><b>Word: </label>
              <input type="text" name="word_name">
              <br>
              <br>
              <label for = "textarea"><b>Notes: </label>
              <textarea id="word_notes" name="word_notes"></textarea>
              <br><br>
              <button class="button" name = "save" value = "submit">Save</button> 
      
        </form>  

      </div></center>

  </body>
</html>