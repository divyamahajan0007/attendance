  <?php 


var_dump($_POST);
$date1 = $_POST['date1'];
$lecture_no = $_POST['lecture_no'];
$subject = $_POST['mySub'];
$records = $_POST['records'];

$conn = mysqli_connect("localhost", "root", "", "attendance-system");

if ($conn) {
    mysqli_query($conn, "INSERT INTO arecords(date1, lecture_no, subject, records) VALUES ('$date1',
      '$lecture_no','$subject', '$records')");

    echo "Inserted successfully...";
  
} else {
    echo "Connection failed: " . mysqli_connect_error();
}

  
    $query="select * from arecords";
    if($result=mysqli_query($conn,$query))
    {
      while($row=mysqli_fetch_assoc($result))
      {
        $mark=explode("," , $row['records']);
         
             
  }
}
  ?>