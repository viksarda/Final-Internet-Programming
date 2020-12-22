<html>
<head>
<title>User Registration</title>
</head>
<body> 
<form action="Register.php" method="post" >
<table border="0" >

<tr>
<td>Name:
</td>
</tr>
<tr>
<td>
<input type="text" name="name"><br>
</td>
</tr>

<tr>
<td>Username:
</td>
</tr>
<tr>
<td>
<input type="text" name="username"><br>
</td>
</tr>

<tr>
<td>Password:
</td>
</tr>
<tr>
<td>
<input type="password" name="password"><br>
</td>
</tr>

<tr>
<td>
CITY: 
<input type="radio" name="city" value="Skopje" checked> Skopje
<input type="radio" name="city" value="Veles"> Veles
<input type="radio" name="city" value="Bitola"> Bitola
<input type="radio" name="city" value="Struga"> Struga
<input type="radio" name="city" value="Ohrid"> Ohrid
</td>
</tr>

<tr>
<td>
MEMBERSHIP:
<input type="radio" name="tuser" value="Free" checked> Free&nbsp;
<input type="radio" name="tuser" value="Basic"> Basic
<input type="radio" name="tuser" value="Premium"> Premium
</td>
</tr>
</table>
  <input type="submit" value="Submit">
</form>
<br> 


<?php
if (isset($_POST['name'])){ 

$hostname='localhost';
$username='root';
$password='';
$database='test';

$name;
$city;
$tuser;
$user;
$pass;


	if (isset($_POST['name'])){		
		$name = $_POST['name'];		
	}
	if (isset($_POST['username'])){		
		$user = $_POST['username'];		
	}
	if (isset($_POST['password'])){		
		$pass = $_POST['password'];		
	}
	if (isset($_POST['city'])){		
		$city = $_POST['city'];		
	}
	if (isset($_POST['tuser'])){		
		$tuser = $_POST['tuser'];		
	}

	$mysqli = new mysqli($hostname, $username, $password, $database);
	if ($mysqli->connect_errno) {
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	
    $sql = "INSERT INTO reservation (Name, Username, Password, City, tUser) VALUES ('".$name."','".$user."','".$pass."','".$city."','".$tuser."');";
    //echo $sql;
    
	if(mysqli_query($mysqli,$sql)){
		echo "<br>";
        echo "New record created successfully";
    }else{
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

	mysqli_close($mysqli);
}
?>
</body>
 </html>