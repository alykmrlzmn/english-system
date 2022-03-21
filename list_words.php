<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="style-two.css">
	<!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
 <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> 
  	
  <title>List of words</title>
	<style>
		#words-1{
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

#words-1 td, #words-1 th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

#words-1 tr:nth-child(even){
  /*background-color: #c0fdff; /* soft blue */
}

#words-1 tr:hover {background-color: #ddd;}

#words-1 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #5c578c; /*  purple */
  color: white;
}
      /* CSS comes here */
      #body {
          font-family:arial;
      }
      #input {
          padding: 10px;
          width: 300px;
          border-radius: 5px;
          border: solid 2px #BBB;
      }
      #div {
          margin:10px 0px;
      }
   button {
  background-color:#57cc99;  /*green*/
  border: none;
  color: black;
  font-weight: bold;
  padding: 20px 38px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 15px;
}
h2{
  color: #003566;  /* navy blue */
}
.parent{
  text-align: center;
  
 }
 .parent > ul { /* li? */
  display: inline-block;
  text-align: justify;
  font-weight: bold; 
  color: #003566;  /* navy blue */
  /*position: absolute; - dia akan display ke kanan */ 
 }


</style>
</head>

</head>
<body>
<section id="nav-bar">
      
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container-fluid">
    <a class="navbar-brand"><img class ="logo" src="logo-latest-part2.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
     
      <!--<span class="navbar-toggler-icon"></span> -->
      <i class="fa-solid fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="homepage.php">HOME</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#top">SILENT VOWEL SOUNDS</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#consonant-words">SILENT CONSONANTS SOUNDS</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#misspronounce-words">COMMON MISPRONOUNCED WORDS</a>
        </li>
      </ul>
      </div>
    </div>
  </div>
  </nav>
</section>

<br>
<center>
<section id =" vowel-words">
  <h2> SILENT VOWEL LETTERS</h2>
  <div class="container">
    <div class="parent"> 
      <ul>
        <li>A,E,I,O,U  is the vowel letters.</li>
        <li>A silent letters—is a letter/letter combination that is usually not pronounced in a word.</li>
        <li>Here is the example of words that has silent vowel letters.</li>
         <li>"watch video"—further explaination about vowel letters.</li>
         <li><i class="fas fa-volume-up" ></i> - to hear the right pronunciation for the vowel words.</li>
       </ul> 
     </div>
  </div>
<br>
<button class="addwords-button" onclick="window.location.href='create-vowel.php'">ADD WORDS</button><button class="addwords-button" onclick="window.location.href='retrieve-vowel.php'">MY WORDS</button><button class="addwords-button" onclick="window.location.href='https://www.youtube.com/watch?v=aRzF2YgxC9I&t=2s&ab_channel=Pronuncian-AmericanEnglishPronunciation'">WATCH VIDEOS</button><br><br>
<table id="words-1">
  <tr>
    <th>Word</th>
    <th>Text pronunciation</th>
    <th>Pronunciation</th>
  </tr>
  <!-- alphabet e -->
   <tr>
  	<td colspan="3"><center><b>SILENT  'E' LETTERS</center></td></tr>
  <!-- 1 -->

    <td>Surgeon</td>  <!-- column word -->
    <td>Ser-jen</td> <!-- column notes -->
    <td><center><i class="fas fa-volume-up" onclick="surgeon()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function surgeon() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "surgeon";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>


 <!-- 2 -->
<tr>
    <td>Courageous</td>  <!-- column word -->
    <td>Ke-ray-jes</td> <!-- column notes -->
     <td><center><i class="fas fa-volume-up" onclick="Courageous()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Courageous() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Courageous";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>

  </tr>


   <!-- 3 -->
<tr>
    <td>Sergeant</td>  <!-- column word -->
    <td> S-err-jent  </td> <!-- column notes -->
     <td><center><i class="fas fa-volume-up" onclick="Sergeant()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Sergeant() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Sergeant";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>
    

     <!-- alphabet i -->

   <tr>
    <td colspan="3"><center><b>SILENT  'I' LETTERS</center></td></tr>
<!-- 1 -->
<tr>
    <td>Region</td>  <!-- column word -->
    <td> Re-jen </td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Region() "></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Region() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Region";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>



     <!-- 2 -->
<tr>
    <td>Religious</td>  <!-- column word -->
    <td>rey-ley-jes</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Religious()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Religious() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Religious";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>	

       <!-- 3 -->
<tr>
    <td>Religion</td>  <!-- column word -->
    <td>Rey-ley-jen</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Religion()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Religion() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Religion";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr> 

       <!-- 4 -->
<tr>
    <td>Fashion</td>  <!-- column word -->
    <td>Fe-shen</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Fashion()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Fashion() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Fashion";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr> 

       <!-- 5 -->
<tr>
    <td>Cushion</td>  <!-- column word -->
    <td>Ku-syen</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Cushion()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Cushion() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Cushion";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr> 



  <!-- alphabet u -->
   <tr>
    <td colspan="3"><center><b>SILENT  'U' LETTERS</center></td></tr>
<!-- 1 -->
<tr>
    <td>Guard</td>  <!-- column word -->
    <td> Ga-rd </td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Guard() "></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Guard() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Guard";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>



     <!-- 2 -->
<tr>
    <td>Guess</td>  <!-- column word -->
    <td>Gess</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Guess()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Guess() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Guess";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr> 

       <!-- 3 -->
<tr>
    <td>Guest</td>  <!-- column word -->
    <td>Ges-t</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Guest()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Guest() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Guest";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr> 

       <!-- 4 -->
<tr>
    <td>Guide</td>  <!-- column word -->
    <td>g-ayd</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Guide()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Guide() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Guide";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>

       <!-- 5 -->
<tr>
    <td>Guilt</td>  <!-- column word -->
    <td>gew-lt</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Guilt()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Guilt() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Guilt";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>
       <!-- 6 -->
<tr>
    <td>Guilty</td>  <!-- column word -->
    <td>gew-lti</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Guilty()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Guilty() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Guilty";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>

       <!-- 7 -->
<tr>
    <td>Biscuit</td>  <!-- column word -->
    <td>Bis-ket</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Biscuit()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Biscuit() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Biscuit";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>

       <!-- 7 -->
<tr>
    <td>Vague</td>  <!-- column word -->
    <td>Vegg</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Vague()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Vague() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Vague";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>


       <!-- 8 -->
<tr>
    <td>Language</td>  <!-- column word -->
    <td>Leng-guwej</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Language()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Language() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Language";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>


</table>
</section>

<section id = "consonant-words">
  <br>
  <center>
<h2>SILENT CONSONANT LETTERS</h2>
<div class="container">  
    <div class="parent"> 
      <ul>
        <li>B,C,D,G,H,K,L,M,N,P,T,W is the consonants letters.</li>
        <li>A silent letters—is a letter/letter combination that is usually not pronounced in a word.</li>
        <li>Here is the example of many words that has silent consonants letters.</li>
         <li>"watch video"—further explaination about consonants letters.</li>
         <li><i class="fas fa-volume-up" ></i> - to hear the right pronunciation for the consonants words.</li>


       </ul> 
     </div>
   </div>
<br>
<button class="addwords-button" onclick="window.location.href='create-consonants.php'">ADD WORDS</button><button class="addwords-button" onclick="window.location.href='retrieve-consonants.php'">MY WORDS</button><button class="addwords-button" onclick="window.location.href='https://www.youtube.com/watch?v=4cU9fqpCqBA&ab_channel=Rachel%27sEnglish'">WATCH VIDEOS</button>
</center>
<br><br>
<table id="words-1">
  <tr>
    <th>WORD</th>
    <th>TEXT PRONUNCIATION</th>
    <th>PRONUNCIATION</th>
  </tr>
    <!-- alphabet B -->
   <tr>
    <td colspan="3"><center><b>SILENT  'B' LETTERS</center></td></tr>
  <!-- 1 -->
  <tr>
    <td>Climb</td>  <!-- column word -->
    <td>Kel-laim</td> <!-- column notes -->
    <td><center><i class="fas fa-volume-up" onclick="Climb()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Climb() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Climb";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>


 <!-- 2 -->
<tr>
    <td>Comb</td>  <!-- column word -->
    <td>Kom</td> <!-- column notes -->
     <td><center><i class="fas fa-volume-up" onclick="Comb()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Comb() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Comb";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>

  </tr>


   <!-- 3 -->
<tr>
    <td>Thumb</td>  <!-- column word -->
    <td> Tham</td> <!-- column notes -->
     <td><center><i class="fas fa-volume-up" onclick="Thumb()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Thumb() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Thumb";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>
    

     <!-- 4 -->
<tr>
    <td>Debt</td>  <!-- column word -->
    <td> Deb</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Debt() "></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Debt() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Debt";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>



     <!-- 5 -->
<tr>
    <td>Lamb</td>  <!-- column word -->
    <td>Lemb</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Lamb()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Lamb() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Lamb";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>


     <!-- 6 -->
<tr>
    <td>Limb</td>  <!-- column word -->
    <td>Lim</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Limb()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Limb() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Limb";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>


     <!-- 7 -->
<tr>
    <td>Bomb</td>  <!-- column word -->
    <td>bom</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Bomb()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Bomb() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Bomb";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>


     <!-- 8 -->
<tr>
    <td>Dumb</td>  <!-- column word -->
    <td>Dam</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Dumb()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Dumb() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Dumb";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>


     <!-- 9 -->
<tr>
    <td>Plumber</td>  <!-- column word -->
    <td>Plumb-mer</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Plumber()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Plumber() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Plumber";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>

     <!-- 10 -->
<tr>
    <td>Doubt</td>  <!-- column word -->
    <td>dawb</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Doubt()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Doubt() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Doubt";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>


  <!-- alphabet H -->
   <tr>
    <td colspan="3"><center><b>SILENT  'H' LETTERS</center></td></tr>
<!-- 1 -->
<tr>

     <!-- 1 -->
<tr>
    <td>Honest</td>  <!-- column word -->
    <td>A-nes</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Honest()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Honest() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Honest";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>

     <!-- 2 -->
<tr>
    <td>Hour</td>  <!-- column word -->
    <td>A-wer</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Hour()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Hour() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Hour";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>

     <!-- 3 -->
<tr>
    <td>Honour</td>  <!-- column word -->
    <td>A-ner</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Honour()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Honour() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Honour";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>

  <!-- alphabet G -->
   <tr>
    <td colspan="3"><center><b>SILENT  'G' LETTERS</center></td></tr>

     <!-- 1 -->
<tr>
    <td>Foreigner</td>  <!-- column word -->
    <td>For-rener</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Foreigner()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Foreigner() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Foreigner";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>

     <!-- 2 -->
<tr>
    <td>Design</td>  <!-- column word -->
    <td>Di-zain</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Design()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Design() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Design";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>

       <!-- 3 -->
<tr>
    <td>Reign</td>  <!-- column word -->
    <td>Rin</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Reign()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Reign() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Reign";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>

 <!-- alphabet K -->
   <tr>
    <td colspan="3"><center><b>SILENT  'K' LETTERS</center></td></tr>

       <!-- 1 -->
<tr>
    <td>Knowledge</td>  <!-- column word -->
    <td>Naw-lej</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Knowledge()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Knowledge() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Knowledge";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>

       <!-- 2 -->
<tr>
    <td>Kneel</td>  <!-- column word -->
    <td>Niil</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Kneel()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Kneel() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Kneel";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>

       <!-- 3 -->
<tr>
    <td>Knot</td>  <!-- column word -->
    <td>Not</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Knot()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Knot() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Knot";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>


       <!-- 4 -->
<tr>
    <td>Knee</td>  <!-- column word -->
    <td>Ni-ee</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Knee()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Knee() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Knee";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>

      <!-- 5 -->
<tr>
    <td>Knock</td>  <!-- column word -->
    <td>Nock</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Knock()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Knock() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Knock";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>

        <!-- 6 -->
<tr>
    <td>Know</td>  <!-- column word -->
    <td>No</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Know()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Know() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Know";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>

 <!-- alphabet L -->
   <tr>
    <td colspan="3"><center><b>SILENT  'L' LETTERS</center></td></tr>

        <!-- 1 -->
<tr>
    <td>Colonel</td>  <!-- column word -->
    <td>ker-nel / kur-nuhl</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Colonel()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Colonel() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Colonel";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>

          <!-- 2 -->
<tr>
    <td>Walk</td>  <!-- column word -->
    <td>Waak</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Walk()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Walk() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Walk";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>

          <!-- 3 -->
<tr>
    <td>Calm</td>  <!-- column word -->
    <td>Kaam</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Calm()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Calm() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Calm";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>

            <!-- 4 -->
<tr>
    <td>Calf</td>  <!-- column word -->
    <td>Kaf</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Calf()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Calf() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Calf";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>

            <!-- 5 -->
<tr>
    <td>Chalk</td>  <!-- column word -->
    <td>Chaak</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Chalk()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Chalk() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Chalk";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>


            <!-- 6 -->
<tr>
    <td>Palm</td>  <!-- column word -->
    <td>Paam</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Palm()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Palm() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Palm";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>


            <!-- 7 -->
<tr>
    <td>Could</td>  <!-- column word -->
    <td>Kud</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Could()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Could() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Could";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>
            <!-- 8 -->
<tr>
    <td>Would</td>  <!-- column word -->
    <td>Wud</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Would()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Would() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Would";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>

            <!-- 9 -->
<tr>
    <td>Yolk</td>  <!-- column word -->
    <td>Yook</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Yolk()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Yolk() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Yolk";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>

  <!-- alphabet N -->
   <tr>
    <td colspan="3"><center><b>SILENT  'N' LETTERS</center></td></tr>
               <!-- 1 -->
<tr>
    <td>Autumn</td>  <!-- column word -->
    <td>Aa-tm</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Autumn()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Autumn() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Autumn";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr> 

               <!-- 2 -->
<tr>
    <td>Column</td>  <!-- column word -->
    <td>Kaa-luhm</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Column()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Column() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Column";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr> 
               <!-- 3 -->
<tr>
    <td>Solemn</td>  <!-- column word -->
    <td>Saa-luhm</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Solemn()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Solemn() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Solemn";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr> 

               <!-- 4 -->
<tr>
    <td>Hymn</td>  <!-- column word -->
    <td>Him</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Hymn()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Hymn() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Hymn";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr> 


  </table>	
</section>



<br><br>
		
<section id = "misspronounce-words">
	<center>
<h2>COMMON MISPRONOUNCED WORDS</h2>  
<div class="container">
   <div class="parent"> 
      <ul>
        <li>Mispronounced— the act of pronouncing a word unconventional and non standard</li>
        <li>Here is the example of common mispronounced words</li>
         <li>"watch video"—further explaination about pronouncing the words wrongly</li>
         <li><i class="fas fa-volume-up" ></i> - to hear the right pronunciation for the common mispronounced words.</li>
         <li>You can add the mispronounced words that you have explored today</li>

       </ul> 
     </div>
</div>
<br>
<button class="addwords-button" onclick="window.location.href='create-words.php'">ADD WORDS</button><button class="addwords-button" onclick="window.location.href='create-words.php'">MY WORDS</button><button class="addwords-button" onclick="window.location.href='https://www.youtube.com/watch?v=GrH07hcokHU&ab_channel=linguamarina'">WATCH VIDEOS</button>
<br><br>
</center>
	<table id="words-1">
  <tr>
    <th>WORD</th>
    <th>TEXT PRONUNCIATION</th>
    <th>PRONUNCIATION</th>
  </tr>
  <!-- 1 -->
  <tr>
    <td>Youth</td>  <!-- column word -->
    <td>yuth</td> <!-- column notes -->
    <td><center><i class="fas fa-volume-up" onclick="Youth()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Youth() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Youth";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>


 <!-- 2 -->
<tr>
    <td>Spouse</td>  <!-- column word -->
    <td>Spaus</td> <!-- column notes -->
     <td><center><i class="fas fa-volume-up" onclick="Spouse()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Spouse() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Spouse";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>

  </tr>


   <!-- 3 -->
<tr>
    <td>Theraphy</td>  <!-- column word -->
    <td> Te-reypi</td> <!-- column notes -->
     <td><center><i class="fas fa-volume-up" onclick="Theraphy()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Theraphy() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Theraphy";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>
    

     <!-- 4 -->
<tr>
    <td>Epitome</td>  <!-- column word -->
    <td> Epi-tomi</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Epitome() "></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Epitome() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Epitome";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>

     <!-- 5 -->
<tr>
    <td>Stomach</td>  <!-- column word -->
    <td>Stu-muk-ake</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Stomach()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Stomach() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Stomach";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>

     <!-- 6 -->
<tr>
    <td>Southern</td>  <!-- column word -->
    <td>Sath-en</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Southern()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Southern() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Southern";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>

     <!-- 7 -->
<tr>
    <td>Schedule</td>  <!-- column word -->
    <td>Skeh-jul</td> <!-- column notes -->
  <td><center><i class="fas fa-volume-up" onclick="Schedule()"></i>
    <script>
      /* JS comes here (tukar kat sini yg text tu) */
            function Schedule() {
              var msg = new SpeechSynthesisUtterance();
        msg.volume = 1; // From 0 to 1
        msg.rate = 1; // From 0.1 to 10
        msg.pitch = 1; // From 0 to 2
        msg.text = "Schedule";
        msg.lang = 'en-US';
        speechSynthesis.speak(msg);
          }
    </script></center> </td> <!-- column pronunciation -->
  </tr>


</table>
</section>
    <!-- body end -->
    <!-- smooth scroll -->
<script src="smooth-scroll.js">
  var scroll = new SmoothScroll('a[href*="#"]');
</script>
</body>
</html>