<?php
	include'conn.php';
  include 'nav-bar-latest.html';

?>


<?php
include_once 'conn.php';
if(isset($_POST['save']))
{  
   $video_url= $_POST['video_url'];
   $video_notes = $_POST['video_notes']; 
   $sql = "INSERT INTO online_video (video_url,video_notes)
   VALUES (' $video_url','$video_notes')";
   if (mysqli_query($conn, $sql)) {
    echo "New record created successfully !";
    header('location: retrieve-videos.php');
   } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
   }
   mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head><title>Create videos</title> </head>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="create.css">
</head>
<style>

  
</style>
<body>
    <center><h2>Do you enjoy studying through online videos?</h2></center>
  <div class="wrapper">
     <!--<video position = "absolute" width="320" height="240" top = "15" left = "120" controls> <!-- .wrapper > div:nth-child(odd) { -->
     <video style="position:left;height:350px;width:600px;top:px;left:120px; margin-right:20px; margin-left: 25px ;" controls autoplay>   
     <source src="How to improve your English speaking skills (by yourself).mp4" type="video/mp4"> 
     </video>
    
      <div class =" content"> <!-- .wrapper > div:nth-child(odd)  -->
        <br><br><br>
  If yes, then you are free to search for other interesting videos regarding English subject and keep the link of the videos in the website. That way, you can practise a heutagogy. Dont know what is heutagogy? Explore what is heutagogy on Youtube now.   <i class="fab fa-youtube" onclick="window.location.href='https://www.youtube.com/'"></i> Goodluck!
  

  <br>
  For example :
  <br>
   
  <br><b>Video:</b><a href="https://www.youtube.com/watch?v=CAU2zx2Ri_M&ab_channel=EngFluent">https://www.youtube.com/watch?v=CAU2zx2Ri_M&ab_channel=EngFluent</a>

  <br>
<b>Notes : "Title = How to improve..."</b>


  </div>   
</div> <center>
<div class="create-words">  

        <form method="post" action="create-videos.php">
          <br>
          <h4>INSERT YOUR OWN WORD</h4>
          <br>
             <center>
              <label><b>Video url: </b></label>
              <input type="text" name="video_url">
              <br>
              <br>
              <label for = "textarea"><b>Notes: </label>
              <textarea id="video_notes" name="video_notes"></textarea>
              <br><br>
              <button class="button" name = "save" value = "submit">SAVE</button> 
      
        </form>  

      </div></center>

  </body>
</html>