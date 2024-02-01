<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>
<header>
   <div id="logo">
   <img src="ling.gif" alt="ling" style="width:200px;height:200px;"> 
   </div>
<nav>
   <a href="welcome.php">Home</a>
   <a href="index.php">About Me</a>
   <a href="family.php">My Family</a>
   <a href="my pets.php">My Pets</a>
   <a href="forms.php">Forms</a>
</nav>
</header>
<style>
#btn1 {
   float: right;
   margin-right: 10px;
   }
body {
  background-image: url("bg.gif");
}
header {
     padding: 10px;
     text-align: center;
     display: flex;
     align-items: center;
     justify-content: space-between;
    }

nav {
   display: flex;
  }
nav a {
    color: skyblue;
    text-decoration: none;
    padding: 10px;
    margin-right: 200px;
	text-align: center;
	font-size: 25px;
	font-style: bold;
  }

nav a:hover {
      background-color: #555;
    }
#h1 {
  font-size: 50px;
  font-family: "Sofia", sans-serif;
  text-shadow: 3px 3px 3px #ababab;
  color: white;
  text-align: center;
  }
#p1 {
  font-size: 20px;
  font-style: oblique;
  color: white;
  text-align: center;
  }
#img1 {
  display: block;
  margin-left: auto;
  margin-right: auto;
  border-style: double;
  border-color: white;
  }
#d1 {
  margin-top: 50px;
  }
#div1 {
  float: left;
  padding: 20px;
  margin-bottom: 500px;
  }
#h2 {
  color: white;
  font-size: 35px;
  font-family: "Sofia", sans-serif;
  text-shadow: 3px 3px 3px #ababab;
  }
#txt {
  color: white;
  font-size: 18px;
  float: left;
  margin-left: 15px;
  font-weight: bold;
  }
#btn2 {
  float: left;
  margin-left: 15px;
}  

#div2 {
  float: right;
  color: white;
  margin-right: 15px;
}

#array {
	color: white;
	float: right;
	margin-right: 10px;
	margin-top: 10px;
}
  
</style>
<script>
function startTime() {
  const today = new Date();
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =  h + ":" + m + ":" + s;
  setTimeout(startTime, 1000);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
<div id="btn1">
   <button onclick="myFunction()">Click this after your visit my Web Page</button>
</div>
<script>
   function myFunction() {
     alert("Thank you for visiting my Profile Page!");
}
</script>
<button id="btn2" onclick="changeColor()">Change Color</button>
  <script>
    let colors = ["blue", "red", "green", "orange", "purple", "white"]; // Add more colors as needed
    let colorIndex = 0;

    function changeColor() {
      document.getElementById("h1").style.color = colors[colorIndex];
      colorIndex = (colorIndex + 1) % colors.length;
    }
</script>
<body onload="startTime()">
<div id="txt"></div>  
<div id="d1">
  <h1 id="h1"><b>"Hi I'm Heiro Usana"</b></h1>
  <p id="p1"><b>Welcome to my Personal Profile,<br>
   I hope you like my content.</b></P>
  <img id="img1"src="me.jpg" alt="white" style="width:400px;height:500px;">
</div>

<div id="div1">
   <h2 id="h2"><b>My Social Media</b></h2>
   <a href="https://www.facebook.com/heiro.usana.5" target="_blank"><img src="fb.gif" alt="fb icon" style="width:100px;height:100px;"></a>
   <a href="https://www.tiktok.com/@keep_sil3nt?lang=en" target="_blank"><img src="tiktok.gif" alt="tiktok icon" style="width:100px;height:100px;"></a>
   <a href="https://www.youtube.com/channel/UCJSfFWsiw49X7JA1GBBXjwQ" target="_blank"><img src="yt.gif" alt="yt icon" style="width:100px;height:100px;"></a>
</div>   

<div id = "div2">
     <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
       Name: <input type="text" name="fname">
       <input type="submit">
     </form>
	 
     <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
         // collect value of input field
         $name = $_POST['fname'];
         if (empty($name)) {
             echo "Name is empty";
         } else {
             echo $name;
         }
}
?>
</div>

<div id="array">
  <pre>
  <?php
  $nba = array("Stephen Curry", "Lebron James", "Kyrie Irving");

  var_dump($nba);
?>
</pre>
</div>


   


</body>
</html>
