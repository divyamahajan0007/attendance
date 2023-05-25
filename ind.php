<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <style>
    
      .home_btn {
  background-color: #261d83; /* Set the background color */
  color: rgb(255, 255, 255); /* Set the text color */
  padding: 20px 30px; /* Add some padding */
  font-size: 20px; /* Set the font size */
  border: none;
  cursor: pointer;
  border-radius: 13px;
  margin-left: 120px;
}

.home_btn:hover {
  background-color: #ec4289; /* Change the background color on hover */
}

  </style>
</head>
<body>

<div class="header">
	<!-- <h2>Home Page</h2> -->
  <h2>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h2>

</div>
	
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>

      <a href="home.html">
        <button type="submit" class="home_btn" name="home_btn">Go To Home Page</button>
      </a>
    	
    	<p> <a href="ind.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

</body>
</html>
