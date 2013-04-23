<?php
include_once('./common.php');
if(!$_SESSION['user'])
	die("user not found");
?>
<html>
<meta charset='UTF-8'>
        <title>SG</title>
        <style>
       
		</style>
    <script src="js/tagcanvas.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      window.onload = function() {
        try {
          TagCanvas.Start('myCanvas','tags',{
		  	
            textColour: '#ff0000',
            outlineColour: '#ff00ff',
            reverse: true,
            depth: 0.8,
            maxSpeed: 0.5,
            shape: "hring",
  lock: "x",
  textFont: 'Impact,"Arial Black",sans-serif',
 textColour: '#00f',
 textHeight: 25,
          });
        } catch(e) {
          // something went wrong, hide the canvas container
          document.getElementById('myCanvasContainer').style.display = 'none';
        }
      };
    </script>
  </head>
  <body>
    <h1>TagCanvas example page</h1>
    <div id="myCanvasContainer">
      <canvas width="300" height="300" id="myCanvas">
        <p>Anything in here will be replaced on browsers that support the canvas element</p>
      </canvas>
    </div>
    <div id="tags">
      <ul>
        <li><a href="http://www.google.com" target="_blank">Google</a></li>
        <li><a href="/fish">Fish</a></li>
        <li><a href="/chips">Chips</a></li>
        <li><a href="/salt">Salt</a></li>
        <li><a href="/vinegar">Vinegar</a></li>
      </ul>
    </div>
  </body>

</html>