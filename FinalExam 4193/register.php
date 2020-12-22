<html>
<head>
<title>User Registration</title>
</head>
<body>
<form action="register.php" method="post">
<table style="border=1">
<tr>
<td>Name:
</td>
</tr>
<tr>
<td><input type="text" name="name">
</td>
</tr>
<tr>
<td>Username
</td>
</tr>
<tr>
<td><input type="text" name="user">
</td>
</tr>
<tr>
<td>Password:
</td>
</tr>
<tr>
<td><input type="password" name="userpassword">
</td>
</tr>
<tr>
<td>City:
</td>
</tr>
<tr>
<td><select name="city" id="city">
  <option value="Skopje">Skopje</option>
  <option value="Berlin">Berlin</option>
  <option value="Paris">Paris</option>
  <option value="Vienna">Vienna</option>
</select>
</td>
</tr>
<tr>
<td>Type of user:
</td>
</tr>
<tr>
<td>
<input type="radio" name="type" value="Free">Free<br>
<input type="radio" name="type" value="Basic">Basic<br>
<input type="radio" name="type" value="Premium">Premium<br>
</td>
</tr>
<tr>
<td>End User Agreement:
</td>
</tr>
<tr>
<td>
<input type="checkbox" name="agreement" value="Accept" required>I accept the agreement<br>
<input type="checkbox" name="agreement" value="Decline">I do not accept the agreement
</td>
</tr>
</table>
<input type="submit" value="Register">
</form>

<?php
if(isset($_POST["name"])){
    $hostname='localhost';
    $username='root';
    $password='';
    $database='test';

$name;
$user;
$userpassword;
$city;
$type;

if (isset($_POST['name'])){		
    $name = $_POST['name'];		
}
if (isset($_POST['user'])){		
    $user = $_POST['user'];		
}
if (isset($_POST['userpassword'])){		
    $userpassword = $_POST['userpassword'];		
}
if (isset($_POST['city'])){		
    $city = $_POST['city'];		
}	
if (isset($_POST['type'])){		
    $type = $_POST['type'];	
}

$mysqli=new mysqli($hostname,$username,$password,$database);

if (isset($_POST['agreement'])){		
    $sql = "INSERT INTO test.reservation (Name, Username, Password, City, tUser) VALUES ('{$name}','{$user}','{$userpassword}','{$city}','{$type}');";
}

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