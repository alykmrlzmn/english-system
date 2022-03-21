<?php 
include 'nav-homepage.php';
include 'conn.php';
 ?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

 

<head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color:  #FEFAE0;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049; 
}

.container {
  border-radius: 5px;
  background-color:  #FEFAE0;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
/*@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
} */

.button {
  background-color: #8d0801; /* maroon */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body bgcolor="#FEFAE0">

<center><h2>what are the new words that you have learnt today? <i class="far fa-grin-beam"></i></h2></center>

<div class="container">
  <form action="">
  <div class="row">
    <div class="col-25">
      <label for="word">Word</label>
    </div>
    <div class="col-75">
      <input type="text" id="word_name" name="word_name" placeholder="Insert word">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="missword_notes">notes</label>
    </div>
    <div class="col-75">
      <textarea id="word_notes" name="word_notes" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>


  </form>
</div>

<button type="submit" style="background-color: #8d0801;" class="btn btn-primary" name="save">Submit</button>

</body>
</html>

<?php


if(isset($_REQUEST['save']))
{
  
$sql = "INSERT INTO misspronounce_word (missword_name, missword_notes)
VALUES ('".$_POST['missword_name']."','".$_POST['missword_notes']."')";

if (mysqli_query($conn, $sql)) {
  echo "The word is successful created";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);

}






  ?>