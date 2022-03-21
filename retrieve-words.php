<?php
include 'conn.php';
include 'nav-bar-latest.html';
$result = mysqli_query($conn,"SELECT * FROM form_word ");
?>
<!DOCTYPE html>
<html>
 <head>
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> 
   <link rel="stylesheet" type="text/css" href="retrieve.css">
 <title> Retrive data</title>
 <style> 
</style>
 </head>

<body>
 
<?php
if (mysqli_num_rows($result) > 0) {
?>
<br><br>

<div class="container"> <center>
    <h2>COMMON MISPRONOUNCED WORDS</h2>
     <div class="parent"> 
      <ul>
        <li>you can create your new words that you have learned today</li>
        <li>The 'notes' section is for you to write anything about the words</li>
        <li><i class="fas fa-volume-up" ></i> -  to hear the right pronunciation for the words created</li>
        <li><i class="fa fa-pencil" ></i> -  to update the words and notes that you just have created</li>
        <li><i class="fa fa-trash" ></i> -  to delete the words and notes that you just have created</li>

       </ul> 
     </div>
    
  </center>
</div>
<br>
<center><button class="addwords-button" onclick="window.location.href='create-words.php'">Create new words</button></center>
<br>
<center>
  <table id="words-1">
  
  <tr>
    <th>Word</th>
    <th>Notes</th>
    <th>Pronunciation</th>
    <th>Actions</th>

  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["word_name"]; ?></td>
    <td><?php echo $row["word_notes"]; ?></td>
    <td><center><i class="fas fa-volume-up" onclick="word<?php echo $i; ?>()"></i></center>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function word<?php echo $i; ?>(<?php $row["word_name"] ?>){
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = '<?php echo $row["word_name"]; ?>' ;
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> 
    <td><center>
            
                                          <a href="update-form.php?id=<?php echo $row['word_id']; ?>" class="mr-4" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>
                                            <a href="delete.php?Delete=<?php echo $row['word_id']; ?>" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>
                                       
        

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