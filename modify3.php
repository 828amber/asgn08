<!DOCTYPE html>
<!--Author: Amber Rice
	Date: 10/5/2020
	File: modify3.php
	Purpose: This program lists the complete names and hourly wage of all employees with the last name of Smith. Modify this so that prints the complete names and hourly wage of all employees with a last name that begins with 'S'.
	Hint: You will need to use a wild card character, and the '=' operator must be changed.
-->
<html>
<head>
	<title>Modify 3</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>Modify 3 </h1>
<?php

include_once('../database/connection.php');

$connect=mysqli_connect(SERVER, USER, PW, DB);

if( !$connect)
{
	die("ERROR: Cannot connect to database $db on server $server
	using user name $user (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
}
else
{
	$userQuery = "SELECT firstName, lastName, hourlyWage FROM personnel WHERE lastName LIKE 'S%'";
	$result = mysqli_query($connect, $userQuery);

	if (!$result)
	{
		die("Could not successfully run query ($userQuery) from $db: " . mysqli_error($connect) );
	}

	if (mysqli_num_rows($result) == 0)
	{
		print("No records found with query $userQuery");
	}
	else
	{
		 while ($row = mysqli_fetch_assoc($result))
		{
			print (	"<p>".$row['firstName']." ".$row['lastName']."'s hourly wage is $".
			number_format($row['hourlyWage'], 2)."</p>");
		}

	}
     mysqli_close($connect);
}

?>

</body>
</html>
