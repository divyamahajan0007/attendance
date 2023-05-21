<?php
include("first.php");
include("db.php");

if(isset($_POST['submit']))
{
	mysqli_query($con,"insert into attendance(student_name,roll_number)values('$_POST[name]','$_POST[roll]')");


}

?>
<style>

	.panel-heading{	
		box-align: center;
		margin-left: 200px;
		margin-right: 140px;
	}
	.panel-body{	
		box-align: center;
		margin-left: 200px;
		margin-right: 200px;
	}
	#btn{
		margin-right: 50px;
	}

</style>

 <div class="cantainer">
	<div class="panel-heading">
	<h2>
		<a class="btn btn-success" href="add.php">ADD STUDENT</a>
		<a class="btn btn-info pull-right" id="btn" href="second.php">Back</a>
	</h2>
	</div>

	<div class="panel-body">
		<form action="add.php" method="post">
	<div class="form-group">
		<label for="name">Student Name </label>
		<input type="text" name="name" id="name" class="form-control" required>
    </div>

    <div class="form-group">
		<label for="roll">Roll Number </label>
		<input type="text" name="roll" id="roll" class="form-control" required>
    </div>

    <div class="form-group">
		<input type="submit" name="submit" value="submit" class="btn btn-primary" required>
    </div>
 </div>

</div>
