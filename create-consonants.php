<?php
	include'conn.php';
  include 'nav-bar-latest.html';

?>


<?php
include_once 'conn.php';
if(isset($_POST['save']))
{  
   $cons_name = $_POST['cons_name'];
   $cons_notes = $_POST['cons_notes']; 
   $sql = "INSERT INTO consonant_words (cons_name,cons_notes)
   VALUES ('$cons_name',' $cons_notes')";
   if (mysqli_query($conn, $sql)) {
    echo "New record created successfully !";
    header('location: retrieve-consonants.php');
   } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
   }
   mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head><title>Create vowel words</title> </head>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="create.css">
</head>
<style>

</style>
<body>
  <div class="wrapper">
     <div class="home-img"> 
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

        <form method="post" action="create-consonants.php">
          <br>
          <h4>INSERT CONSONANT WORDS</h4>
          <br>
             <center>
              <label><b> Word: </label>
              <input type="text" name="cons_name">
              <br>
              <br>
              <label for = "textarea"><b>Notes: </label>
              <textarea id="cons_notes" name="cons_notes"></textarea>
              <br><br>
              <button class="button" name = "save" value = "submit">SAVE</button> 
      
        </form>  

      </div></center>

  </body>
</html>