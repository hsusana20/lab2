<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>My Family Introduction</title>
<script>
function goBack() {
  window.history.back()
}
</script>
</head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">
<style>
body {
  background-image: url("bg.gif");
  }
  
#h1 {
    border-style:inset;
    border-color: black;
	color: white;
	border-width: 10px;
	text-align: center;
	font-style: oblique;
	font-family: "Sofia", sans-serif;	
	}
#h2 {
   text-align: center;
   color: white;
   font-style: italic;
   font-size: 25px;
   }
   
#demo {
  text-align: center;
  font-size: 25px;
  color: white;
  }
#btn1 {
  float: left;
  margin-left: 10px;
  }
div.gallery {
  margin: 55px;
  border: 1px solid white;
  float: left;
  width: 300px;
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

</style>
<body>
<h1 id="h1"><b>My Family</b></h1>
<input id="btn1" type="button" value="Back" onclick="goBack()">
<p id="demo"></p>
<script>
let text = "Happy";
text += " Family";
document.getElementById("demo").innerHTML = text;
</script>

<div class="gallery">
  <a target="_blank" href="father.png">
    <img src="father.png" alt="my father" width="700" height="500">
  </a>
  <div class="desc"><b>This is my father his name is Heinrich Usana, he is 50 years<br>
old. My father is a soldier in Air Force. He is hardworking, kind,<br>
kind, helpul and most of all he always puts us first before himself.</b></div>
</div>

<div class="gallery">
  <a target="_blank" href="mother.png">
    <img src="mother.png" alt="my mother" width="700" height="500">
  </a>
  <div class="desc"><b>This is my mother her name is Rosabella Usana, she is 50 years<br>
old. She is kind, hardworking just like my father, delicious<br>
and a good cook</b></div>
</div>

<div class="gallery">
  <a target="_blank" href="my sister.png">
    <img src="my sister.png" alt="my sister" width="700" height="500">
  </a>
  <div class="desc"><b>This is my eldest sister her name is Rica Rose Usana,  <br>
she is 22 years old. She works in Cebu Pacific and is <br>
assigned to the international airport in Pasay. She <br>
is kind and hardworking just like them mom.</b></div>
</div>

<div class="gallery">
  <a target="_blank" href="youngest sister.png">
    <img src="youngest sister.png" alt="youngest" width="700" height="500">
  </a>
  <div class="desc"><b>This is my youngest sister her name is Erich Usana, she is <br>
17 years old. She is in grade 11 now and his grade is high <br>
so he gets many awards and he is always included in the<br>
 honors.</b></div>
</div>

</body>
</html>
