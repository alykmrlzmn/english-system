<?php
include 'nav-bar-latest.html';


?>
<!doctype html>
	<head>
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> 
		<title>Features</title>
		<style>
			/* CSS comes here */
			/*body {
			    font-family:arial;
			    background-color:  #FEFAE0;
			} */
			input {
			    padding: 10px;
			    width: 300px;
			    border-radius: 5px;
			    border: solid 2px #BBB;
			}
			div {
			    margin:15px 0px;
			}
			button {
			    padding:10px;
			    background-color:#f65868; /* pink */
			    color: #003566;
			    font-weight: bold;
			    border: 0px;
			    cursor:pointer;
			    border-radius: 5px;
			   
			}

.TextToSpeech {
  background-color: #57cc99;  /*green*/
  /*background-color: #a5d79d; /* soft green*/
  /*background-color: #9ef01a; /* striking green */
  height: 280px;
  width: 50%;
  float: down;
   margin-top: 100px;
  color: #003566;
}


.SpeechToText{
  background-color: #57cc99;  /*green*/
  height: 280px;
   height: 280px;
  width: 50%;
  margin-top: 25px;
  float: up;
  color: #003566;
}
/*.plus {
background-color: #8B4513; - brown color
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}  */


		</style>
		<title>Pure JavaScript Text to Audio</title>
	</head>
	<body>
		<br>
	 <center>
	 	<section>
		<div class="TextToSpeech"><br>
		<center><h2>Text to Speech</h2></center>
		<br>
		<div><input type="text" id="text-to-speech" placeholder="Enter text to speak..."/></div>
		
        <div><button type="button" onclick="textToAudio()">Audio</button></div>
        <br/>
        <b><small>Instruction : Enter text and click on speak button.</small>
		<script>
			/* JS comes here */
            function textToAudio() {
                let msg = document.getElementById("text-to-speech").value;
                
                let speech = new SpeechSynthesisUtterance();
                speech.lang = "en-US";
                
                speech.text = msg;
                speech.volume = 1;
                speech.rate = 1;
                speech.pitch = 1;
                
                window.speechSynthesis.speak(speech);
            }
		</script>
	</div>
</section>
</center>
<center>
	<section>
	<div class="SpeechToText">
		<br>
		<center><h2>Speech to Text</h2></center>
		<center><div>
        <small>Instruction : Once it listens to your microphone it shows the words u said. </small></div></center>
        <button type="button" onclick="runSpeechRecognition()">Speak</button> &nbsp; <span id="action"></span>
        <div id="output" class="hide"></div>
		<script>
			/* JS comes here */
		    function runSpeechRecognition() {
		        // get output div reference
		        var output = document.getElementById("output");
		        // get action element reference
		        var action = document.getElementById("action");
                // new speech recognition object
                var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
                var recognition = new SpeechRecognition();
            
                // This runs when the speech recognition service starts
                recognition.onstart = function() {
                    action.innerHTML = "<small>listening, please speak...</small>";
                };
                
                recognition.onspeechend = function() {
                    action.innerHTML = "<small>stopped listening, hope you are done...</small>";
                    recognition.stop();
                }
              
                // This runs when the speech recognition service returns result
                recognition.onresult = function(event) {
                    var transcript = event.results[0][0].transcript;
                    var confidence = event.results[0][0].confidence;
                    output.innerHTML = "<b>Text:</b> " + transcript + "<br/> <b>Confidence:</b> " + confidence*100+"%";
                    output.classList.remove("hide");
                };
              
                 // start recognition
                 recognition.start();
	        }
		</script>
		</section>
	</div>
</center>
<br><br>
<div style="float: center;">
	
</div>
	</body>
</html>