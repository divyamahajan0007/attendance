<html>
<head>
	<title>Student Attendance</title>
<style>

	body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #250b3e;
        }

	.container{
   
  border: 1px solid #ccc;
  border-radius: 10px;
  padding: 70px;
  font-family: Arial, sans-serif;
  margin: 500px 450px;
  margin-top: 50px;
  font-size: 20px;
  background-color: #c5a6e0;
  width: 500px;
  height: 350px;
  align-items: center;
  text-align: center;
  justify-content: center;
	}

	header {
            background-color: #261d83;
            color: #f1eaea;
            padding: 20px;
            text-align: center;
        }
        img {
  width: 65px;
  border: 1px solid black;
  margin-bottom: 10px;
}

        
        h1 {
            margin: 0;
            font-size: 24px;
        }

        .H1{
        	text-align: center;
        	background-color: #c5a6e0;
        	font-size: 30px;
        }

        .btn{

        	font-size:20px;
        	border-radius:10px;
        	padding: 3px;

        }
        .btn:hover{
        	background-color: #dcdcdc;
        }


</style>

</head>


<body>

	<header>
        <img src="./logo.jpg" alt="KBTCOE" style="display;">

        <h1><h1>KBTCOE ERP ATTENDANCE SYSTEM</h1></h1>
    </header>
      

       <h1  class="H1">Teaching Plan</h1>

	<div class="container">
	
	<form method="POST" action="connection.php">
		
		<label>Subject:</label>
		<input type="text" name="subject">
			<br><br>
		<label>Subject Code:</label>
		<input type="text" name="subject_code">
			<br><br>
		<label>Unit:</label>
		<input type="text" name="unit">
			<br><br>
		<label>Topic:</label>
		<input type="text" name="topic">
			<br><br>
		<label>Topic Number:</label>
		<input type="text" name="topic_number">
			<br><br>
		<label>Lecture Number:</label>
		<input type="text" name="lecture_number">
			<br><br><br>
		<input class= "btn" type="submit" value="submit">
	</form>
</div>
</body>
</html>
