<?php
	$request = $_REQUEST; 
	$email = $request['email']; 
	$name = $request['name'];
	$phonenumber = $request['phonenumber'];
	$dob = $request['dob'];
    $gender =$request['gender'];
    $age =$request['age'];

	$servername = "localhost"; 
	$username = "root"; 
	$password = ""; 
	$dbname = "exams"; 

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO employees (name,email,phonenumber,dob,age,gender) VALUES ('".$name."', '".$email."', '".$phonenumber."', '".$dob."','".$age."', '".$gender."')";
	$conn->exec($sql);
    echo "New record created successfully";
}
catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn=null;

?>