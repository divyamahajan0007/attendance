<!DOCTYPE html>
<html>
<head>
  <style>
    body{
      text-align: center;
      margin-top: 200px;
      border-radius: 20px;
       margin-left: 80px;
       border-width: 30px;
       background-color:#F8F8FF;

    }
    .btn{
      border-color: #000000;
      size: 30px;
      border-radius: 10px;
      padding: 10px;
      font-size: 20px;
      background-color: #9343cc;
      margin-right: 60px;
      color:#FFFFFF;
    }
    .btn:hover{
      background-color: #ec4289;
    }
    table {
     
      width: 80%;
      padding: block;
      margin: 100px;
      border-collapse: collapse;
      border-color: #000000;
      height: 100px;
      font-size: 25px;
      border:100px solid #000000;


    }


    table, th, td {
      border: 1px solid black;
      border-color: #000000;
      height: 80px;
      text-align: center;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-color: #000000;
      text-align: center;
    }

    th {
      background-color:#9343cc;
      color: #FFFFFF;
      text-align: center;

    }
    section{
      box-sizing: border-box;
      background-color: #261d83;
      padding: 5px;
      font-size: 20px;
      width: 100%;
      margin-top: 1%; 
     text-align: center;
      color: #FFFFFF;


    }

    /*.btn{

          font-size:20px;
          border-radius:10px;
          padding: 3px;

        }
        .btn:hover{
          background-color: #dcdcdc;
        }*/

  </style>
</head>
<body>
  <section>
        <h1>Welcome to the Student Attendance System of Adv. Karmaveer Baburao Thakare College Of Engineering,Nashik</h1>
        
        <h3>This system allows you to keep track and manage student attendance easily.</h3>
        <br>
    </br>
  
</section>
  <form method="POST" action="home.html">
    <table>
      <thead>
        <tr>
          <th>Date</th>
          <th>Subject</th>
          <th>Lecture_no</th>
          <th>Unit</th>
          <th>Topic</th>
          <th>Records</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input type="date" name="date1"></td>
           <td><lable for="subject">Subject</lable>
                    <select name="mySub" id="subject">
                        <option value="DBMS">DBMS</option>
                        <option value="PA">PA</option>
                        <option value="M3">M3</option>
                        <option value="CG">CG</option>
                        <option value="SE">SE</option>
                        
                    </select></td>
                    <td><input type="text" name="lecture_no"></td>

                     <td><lable for="unitno">Units</lable>
                    <select name="unitno" id="unit">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        
                    </select></td>

                    <td><lable for="topicno">Topics</lable>
                    <select name="topicno" id="topic">
            

                        <option value=""></option>
                        <option value="3.1.Introduction to SQL">3.1.Introduction to SQL</option>
                        <option value="3.2.SQL operators Tables">3.2.SQL operators Tables</option>
                        <option value="3.3.Aggregate Functions">3.3.Aggregate Functions</option>
                        <option value="3.4.Triggers">3.4.Triggers</option>
                        <option value="3.5.Embedded And Dynamic SQL">3.5.Embedded And Dynamic SQL</option>
                        <option value="3.6.SQL and DML Queries">3.6.SQL and DML Queries</option>
                        }
                    </select></td>
                    
 
          <td><input type="text" name="records"></td>
        </tr>
      </tbody>
    </table>
    
        <input class= "btn" type="Submit" value="Submit">

  </form>



  </body>
</html>


