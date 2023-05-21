<?php
// Connect to the database
$conn = mysqli_connect("localhost","root","","attendance-system");

// Check for errors
if (mysqli_connect_errno()) {
	die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// Get the form data
if (isset($_POST['subject'])){
	$subject = $_POST['subject'];
}
else{
	$subject="";
}if (isset($_POST['sub_code'])){
	$sub_code = $_POST['sub_code'];
}
else{
	$sub_code="";
}
if (isset($_POST['unit'])){
$unit = $_POST['unit'];
}
else{
	$unit="";
}
if (isset($_POST['Topic'])){
	$Topic = $_POST['Topic'];
}
else{
	$Topic="";
}
if (isset($_POST['Topic_num'])){
$Topic_num = $_POST['Topic_num'];
}
else{
	$Topic_num="";
}
if (isset($_POST['lect_num'])){
$lect_num = $_POST['lect_num'];
}
else{
	$lect_num="";
}

