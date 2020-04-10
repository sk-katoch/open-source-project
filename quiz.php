<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>General Knowledge Quiz</title>
</head>
<body>
	<form action="" method="post">
	<center><h1> General Knowledge Quiz </h1></center>
		<table align="center">
		<tr>
			<td> 1. what is the height of mount Everest.</td>
			</tr>
		<tr>
			
			<td><input type="radio" name="mountEverest" 
			 value="1048">1048</td>
			</tr>
		<tr>
			
			<td><input type="radio" name="mountEverest" 
			 value="1148">1148</td>
			</tr>
		<tr>
			
			<td><input type="radio" name="mountEverest" 
		    value="1248">1248</td>
			</tr>
		<tr>
			
			<td><input type="radio" name="mountEverest"
			 value="1038">1038</td>
			</tr>
		<td> 2. what is the Capital of Japan.</td>
			</tr>
		<tr>
			
			<td><input type="radio" name="capital" 
			 value="Singapore">Singapore</td>
			</tr>
		<tr>
			
			<td><input type="radio" name="capital" 
			 value="Tokyo">Tokyo</td>
			</tr>
		<tr>
			
			<td><input type="radio" name="capital" 
		    value="Dhaka">Dhaka</td>
			</tr>
		<tr>
			
			<td><input type="radio" name="capital"
			 value="Paris">Paris</td>
			</tr>
		<tr>
			<td> 3. what is the national sport of india.</td>
			</tr>
		<tr>
			
			<td><input type="radio" name="nationalsport" 
			 value="Hockey">Hockey</td>
			</tr>
		<tr>
			
			<td><input type="radio" name="nationalsport" 
			 value="Cricket">Cricket</td>
			</tr>
		<tr>
			
			<td><input type="radio" name="nationalsport" 
		    value="Volleyball">Volleyball</td>
			</tr>
		<tr>
			
			<td><input type="radio" name="nationalsport"
			 value="Basketball">Basketball</td>
			</tr>
		<tr>
			<td> 4. 2021 Olympics is going to held in which country.</td>
			</tr>
		<tr>
			
			<td><input type="radio" name="Olympics" 
			 value="India">India</td>
			</tr>
		<tr>
			
			<td><input type="radio" name="Olympics" 
			 value="Australia">Australia</td>
			</tr>
		<tr>
			
			<td><input type="radio" name="Olympics" 
		    value="Japan">Japan</td>
			</tr>
		<tr>
			
			<td><input type="radio" name="Olympics"
			 value="England">England</td>
			</tr>
		<tr>
			<td> 5. Bhuj Khalifa is located in which country.</td>
			</tr>
		<tr>
			
			<td><input type="radio" name="mountEverest" 
			 value="India">India</td>
			</tr>
		<tr>
			
			<td><input type="radio" name="mountEverest" 
			 value="England">England</td>
			</tr>
		<tr>
			
			<td><input type="radio" name="mountEverest" 
		    value="Egypt">Egypt</td>
			</tr>
		<tr>
			
			<td><input type="radio" name="mountEverest"
			 value="Dubai">Dubai</td>
			</tr>
			
		
			
			<td><input type="submit" name="submit" value="submit"</td>
			</tr>
		
	
</body>
</html>
<?php
$con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db('my_database', $con)or die(mysql_error());
?>