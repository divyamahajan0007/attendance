<?php
include("db.php");
include("header.php");
    $flag=0;
	if(isset($_POST['submit']))
	{
		foreach($_POST['attendance_status'] as $id=>$attendance_status)
		{
			$student_name=$_POST['student_name'][$id];
			$roll_number=$_POST['roll_number'][$id];
			$date=date("y-m-d H:i:s");

			$result=mysqli_query($con,"insert into attendance_record(student_name,roll_number,attendance_status,date)values('$student_name','$roll_number','$attendance_status','$date')");
			if($result)
			{
				$flag=1;

			}

		}
	}
?>

<style>


</style>

<div class="panel panel-default">
	<div class="panel panel-heading">
		<h2>
			<a class="btn btn-success" href="add.php">Add Student</a>
			<a class="btn btn-info pull-right" href="viewall.php">View All</a>
		</h2>
        <?php if($flag){  ?>
		<div class="alert alert-success">
			Attendance Marked Succesfully!!!
		</div>
	<?php  } ?>

		<h3><div class="well text-center"> Date:<?php echo date("y-m-d");?></div></h3>

<div class="panel panel-body">
		<form action="index.php" method="Post">
		<table class="table table-striped">
			<tr>
              <th>#sr. No</th><th>Student Name</th><th>Roll Number</th><th>Attendance Status</th>
            </tr>

			    <?php $result = mysqli_query($con , "select * from attendance");
				$serialnumber=0;
				$counter=0;
				while($row=mysqli_fetch_array($result))
				{
					$serialnumber++;

					
				?>

				

                    <tr>
							<td><?php echo $serialnumber; ?> </td>
							<td> <?php echo $row['student_name']; ?>

							<input type="hidden" value="<?php echo $row['student_name']; ?>" name="student_name[]">
						    </td>	
								
							<td><?php echo $row['roll_number']; ?>
							<input type="hidden" value="<?php echo $row['roll_number']; ?>" name="roll_number[]">
							</td>
                              

						    <td>
							<input type="radio" name="attendance_status[<?php echo $counter; ?>]" value="present">Present
							<input type="radio" name="attendance_status[<?php echo $counter; ?>] " value="absent">Absent
						    </td>

				    </tr>
				    <?php
				    $counter++;
				}
				?>

		</table>

		<input type="submit" name="submit" value="submit" class="btn btn-success">

	</form>
</div>
</div>
</div>



