<?php

	var_dump($_POST);
	$subject = $_POST['subject'];
	$subject_code = $_POST['subject_code'];
	$unit = $_POST['unit'];
	$topic = $_POST['topic'];
	$topic_number = $_POST['topic_number'];
	$lecture_number= $_POST['lecture_number'];


	//connection to database

	$conn= new mysqli('localhost','root','','attendance-system');

{
		
		mysqli_query($conn,"insert into teachplan(subject,subject_code,unit,topic,topic_number,lecture_number)values('$_POST[subject]',$_POST[subject_code],$_POST[unit],'$_POST[topic]',$_POST[topic_number],$_POST[lecture_number])");
		 //$stmt->execute();
		echo "Inserted succesfully....";
		//$stmt->close();
		$conn->close();
}




	?>










