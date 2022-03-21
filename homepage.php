<?php 
include 'conn.php';
include 'nav-bar-latest.html';

/*if(!empty($_SESSION["stud_username"])){
  $username = $_SESSION["stud_username"];
  $result = mysqli_query($conn, "SELECT * FROM student WHERE stud_id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
} */

 ?> 

<!DOCTYPE html>
<html>
<head> <title>Homepage</title>
  <style>
  button {
  background-color: #f65868;/*pink*/
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  cursor: pointer;
  border-radius: 20px;
  margin-top: 20px; 
  margin-bottom: 50px;
  margin-left: 15px;
  margin-right: 15px;
  font-weight: bold;
 
}

 .wrapper {
    display: grid;
    grid-template-columns: 50% 50% ;

  } 

  .wrapper > div { 

  width: 500px;
  height: 300px;
  margin: 50px;
  text-align: justify; 
  font-weight:500;
  }
.wrapper > div:nth-child(odd) {   /* content part */
  width: 600px;
  height: 300px;
  margin: 50 px; 
}
.home-img{
  width: 500px;
  height: 400px;
  margin: 20px; 

}
.home-img img {
  width: 100%;
  height: 90%;
  object-fit: contain; 
  object-position: center;

}
.home-text {
  width: 400px;
  margin: 10px;
}

h2{
  font-weight: bold;
}

  </style>

</head>
<body>
  <br>
<center><h2> Welcome to the Speak-It-Right!</h2></center>

  <br>
  <div class="wrapper">
     <div class="home-img"> 
     <img src="study-library.jpg"> 
      </div> 
      <div class =" content"> <!-- .wrapper > div:nth-child(odd)  -->
        <br>  
     <p><b>
      Speak-It-Right (S-I-R) is an English web-based system that aims to help the students to improve their English pronunciation using the Text-To-Speech and Speech-To-Text tools. On top of that, S-I-R includes the list of silent vowels and consonants letters as it is important to master the silent sounds of the words in order to have the clear and perfect pronunciation. S-I-R was designed as the study platforms for the students to record their study progress in English pronunciation.  </p>

  </div> 
</div>

<div>
<center>
<button class="button" onclick="window.location.href='features.php'">SPEAK WORDS</button>


<button class="button" onclick="window.location.href='list_words.php'">LEARN WORDS</button>


</center>
</div>



<!-- smooth scroll -->
<script src="smooth-scroll.js">
  var scroll = new SmoothScroll('a[href*="#"]');
</script>
</body>
</html>