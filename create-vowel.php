<?php
	include'conn.php';
 include 'nav-bar-latest.html';

?>


<?php
include_once 'conn.php';
if(isset($_POST['save']))
{  
   $vowel_name = $_POST['vowel_name'];
   $vowel_notes = $_POST['vowel_notes']; 
   $sql = "INSERT INTO vowel_words (vowel_name,vowel_notes)
   VALUES (' $vowel_name','$vowel_notes')";
   if (mysqli_query($conn, $sql)) {
     echo "<script>window.alert('New words have successfully recorded')</script>";
    header('location: retrieve-vowel.php');
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
<head></head>
<style>
  .wrapper {
    display: grid;
    grid-template-columns: 50% 50% ;

  } 

  .wrapper > div {

    /*background: #eee; /* white */
    /*padding: 1em; */
    width: 500px;
  height: 400px;
  margin: 10 px;
  text-align: justify;
  }
.wrapper > div:nth-child(odd) {
  /*background: ; /* soft grey*/
  width: 600px;
  height: 400px;
  margin: 10px;
  /*border: 3px solid silver; */
 
}
.home-img {
  width: 600px;
  height: 400px;
  margin: 20px; 
}

.home-img img {
  width: 100%;
  height: 100%;
  object-fit: contain; 
  object-position: center;
}
.create-words {
  padding-bottom: 15px;
   padding-top: 0px;
   border: 3px solid silver ;
}

button {
  background-color:#f65868;/*pink*/
  border: none;
  color: black;
  font-weight: bold;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 20px;
}
label,
textarea{
  display:inline-block;
  vertical-align:middle;

}
.content {
  text-align: justify; 
  text-align: center;
  background-color:white;
   width: 600px;
  height: 100px;
  color: black;
  object-position: center;
   /*border: 3px solid silver; */
}
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

        <form method="post" action="create-vowel.php">
          <br>
          <h4>INSERT YOUR OWN WORD</h4>
             <center>
              <label><b> Word: </label>
              <input type="text" name="vowel_name">
              <br>
              <br>
              <label for = "textarea"><b>Notes: </label>
              <textarea id="vowel_notes" name="vowel_notes"></textarea>
              <br><br>
              <button class="button" name = "save" value = "submit">SAVE</button> 
      
        </form>  

      </div></center>

  </body>
</html>