<!DOCTYPE html>
<?php
ini_set('display_errors', '1');
$server = '127.0.0.1';
$username = 'root';
$password = '';
$db = 'details';
$connection = mysqli_connect($server, $username, $password, $db)
   or die('Error connecting to the server');

$query = "SELECT * FROM myinfo";
$result = mysqli_query($connection, $query) 
   or die('Error connecting to database');
$myInfo = mysqli_fetch_array($result);
?>
<html>
<head>
	<title> My Info </title>
</head>
<body style="text-align: center;">
    <a href="index.php"> Go back </a>
    <h4 id="firstName"> First Name:
      <?php
        echo $myInfo['FirstName'];
      ?>
    </h4>
    <h4 id="lastName"> Last Name:
      <?php
        echo $myInfo['LastName'];
      ?>
    </h4>
    <h1> My Name is <?php echo $myInfo['FirstName'], $myInfo['LastName'];?></h1>
</body>
</html>