<?php
// create a connection to the database 

$servername =  "localhost";
$username = "root";
$password = "";
$dbname = "testMit";


//use mysqli extension to connect to db 
$conn = new mysqli($servername,$username,$password,$dbname);

// //check if the connection is valid
// if ($conn->connect_error) {
//       die("connection failed" . $conn->connect_error);
//  } 

//  echo "successfully connected";


 //create a db
 // $sql = 'CREATE DATABASE testMit';

 // //checkinf if db has been created 
 // if ($conn->query($sql) === TRUE) {
 // 	# code...
 // 	echo "database created";
 // } else {
 // 	echo "failed : " . $conn->error;
 // }

//creating table 
$sql = 'CREATE TABLE students(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
admission_number INT(22),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)';

if ($conn->query($sql) === TRUE) {
	# code...
	echo "Table created ";
} else {
	echo "table not created" . $conn->error;
}

$conn->close(); //closes the connection


?>