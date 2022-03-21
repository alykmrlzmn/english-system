<?php
include 'conn.php';
include 'nav-bar-latest.html';
$result = mysqli_query($conn,"SELECT * FROM online_video ");
?>
<!DOCTYPE html>
<html>
 <head>
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> 
   <link rel="stylesheet" type="text/css" href="retrieve.css">
 <title> Retrive data</title>
 <style>
 h2{
font-weight: bold;
 }
 .parent{
  text-align: center;
  
 }
 .parent > ul { /* li? */
  display: inline-block;
  text-align: justify;
  font-weight: bold; 
  /*position: absolute; - dia akan display ke kanan */ 
 }

</style>
 </head>

<body>
 
<?php
if (mysqli_num_rows($result) > 0) {
?>
<br><br>
<div class="container"> <center>
    <h2>LIST OF ONLINE VIDEOS LINKS</h2>
    <div class="parent">
    <ul>
        This page is the record of url links that you have created.
        <li>This page is for you to saved the important video links for the study purpose</li>
        <li>You can create another video links by pressing the "add link videos"</li>
        <li>"My videos" button will directly go to the current page</li>
        <li>"Go To Youtube" button will redirecting to the youtube page</li>    
       </ul> 
    </div>
  </center>
</div>

<br>
<center><button class="addwords-button" onclick="window.location.href='create-videos.php'">Add link videos</button>
<button class="addwords-button" onclick="window.location.href='retrieve-videos.php'">My videos</button>
  <button class="button" onclick="window.location.href='https://www.youtube.com/'">Go to Youtube</button> 

</center>
<br>
<center>
  <table id="words-1">
  
  <tr>
    <th>Video Link</th>
    <th>Explaination</th>
    <th>Actions</th>

  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><a href="<?php echo $row["video_url"]; ?>"><?php echo $row["video_url"]; ?></td>
    <td><?php echo $row["video_notes"]; ?></td>
   
    <td><center>
            
                                          <a href="update-videos.php?id=<?php echo $row['video_id']; ?>" class="mr-4" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>
                                            <a href="delete-videos.php?Delete=<?php echo $row['video_id']; ?>" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>
                                       
        

    </center></td>


</tr>
<?php
$i++;
}
?>
</table>
</center>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>