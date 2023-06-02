  <?php 


var_dump($_POST);
$date1 = $_POST['date1'];
$subject = $_POST['mySub'];
$lecture_no = $_POST['lecture_no'];
$unitno = $_POST['unitno'];
$topicno = $_POST['topicno'];
$records = $_POST['records'];

$conn = mysqli_connect("localhost", "root", "", "attendance-system");

if ($conn) {
    mysqli_query($conn, "INSERT INTO arecords(date1,  subject, lecture_no,unitno, topicno, records) VALUES ('$date1',
      '$subject','$lecture_no','$unitno','$topicno', '$records')");

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