<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>
<header>
   <div id="logo">
   <img src="lesly.gif" alt="mm" style="width:200px;height:200px;"> 
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
.error {color: #FF0000;}

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

#div1 {
	color: white;
	font-size: 19px;
	float: left;
	margin-left: 350px;
	margin-top: 15px;
	background-color: black;
}

#div2 {
	color: white;
	font-size: 19px;
	float: right;
	margin-right: 350px;
	margin-top: 15px;
	background-color: black;
}

#h2 {
	color: white;
	font-size: 45px;
	font-family: "Sofia", sans-serif;
	text-align: center;
}

#p1 {
	text-align: center;
	font-size: 19px;
}
	
</style>
<body>
<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $message = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = " Full Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["message"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div id="h2">
<h2>Fill up this Form</h2>
</div>

<div id="p1">
<p><span class="error">* required field</span></p>
</div>

<div id="div1">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Full Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Message: <textarea name="message" rows="5" cols="40"><?php echo $message;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</div>

<div id="div2">
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $message;
echo "<br>";
echo $gender;
?>
</div>

<?php
// For Xampp Localhost
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "myDB";

//For Socitcloud
$servername = "localhost";
$username = "webprogmi221";
$password = "g_6bCitLu.ljMK*m";
$dbname = "webprogmi221";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO hsusana_myguests (name, email, website, message, gender)
VALUES ('$name', '$email', '$website', '$message', '$gender')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


</body>
</html>