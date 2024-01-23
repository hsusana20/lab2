<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>
<header>
   <div id="logo">
   <img src="dog.gif" alt="ling" style="width:200px;height:200px;"> 
   </div>
</header>
<style>
body {
   background-image: url("bg.gif");
  }
#h1 {
  color: white;
  text-align: center;
  font-family: "Sofia", sans-serif;	
  font-size: 40px;
  }
#myBtn {
  float: left;
  margin-left: 15px;
  }
div.gallery {
  margin: 55px;
  border: 1px solid #ccc;
  float: left;
  width: 280px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
  color: white;
}

#h2 {
 color: white;
 font-size: 16px;
 text-align: center;
 }
 
#h3 {
	color: white;
	text-align: center:
	font-size: 15px;
}
</style>
<body>
  <header>
    <div id="h1">
      <h1><b>My Pets</b></h1>
    </div>
  </header>
<button id="myBtn">Click it</button>

<script>
document.getElementById("myBtn").addEventListener("click", function() {
  alert("Arf Arf!");
});
</script>

<div id="h2">
  <?php
  echo "<h2><b>I Love All My Pets</b></h2>";
?>
</div>

<div id="h3">
  <?php
  function myMessage() {
	  echo "<h3><b>This is My Favorite Pets!</b></h3>";
  }
  myMessage();
?>
</div>

<div class="gallery">
  <a target="_blank" href="lucky.png">
    <img src="lucky.png" alt="mother dog" width="600" height="400">
  </a>
  <div class="desc"><b>Name: Lucky</b></div>
</div>

<div class="gallery">
  <a target="_blank" href="dagul.png">
    <img src="dagul.png" alt="baby dog" width="600" height="400">
  </a>
  <div class="desc"><b>Name: Dagul</b></div>
</div>

<div class="gallery">
  <a target="_blank" href="dina.png">
    <img src="dina.png" alt="baby dog" width="600" height="400">
  </a>
  <div class="desc"><b>Name: Dina</b></div>
</div>

<div class="gallery">
  <a target="_blank" href="oreo.png">
    <img src="oreo.png" alt="white dog" width="600" height="400">
  </a>
  <div class="desc"><b>Name: Oreo</b></div>
</div>
</body>
</html> 
