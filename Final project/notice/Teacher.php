<?php
   //include_once("student.html");
  include_once("navigation.php");
  echo "";
?>
<html>
<head>
<br>
</head>
<body>
  <br>
<div align="center">
			<fieldset>
            <legend>Schedule</legend>
<body>
    <?php
     echo "<tr>
            <td>";
               // your database connection
			   $host       = "localhost"; 
               $username   = "root"; 
               $password   = "";
               $database   = "teacher"; 
			   
               // select database
			   $con=mysqli_connect($host,$username,$password) or die(mysql_error()); 
               mysqli_select_db($con,$database) or die(mysql_error()); 

                    $query = ("SELECT  Course, Section, Room, Days ,StartTime, EndTime FROM routine");
                    $result = mysqli_query($con,$query) or die(mysql_error());
                    echo "<div class='container'><table width='' class='table table-bordered' border='1' >
                            <tr>
                                <th>Course</th>
                                <th>Section</th>
								<th>Room</th>
                <th>Days</th>
								<th>Start time</th>
								<th>End time</th>
                                </tr>";
                        while($row = mysqli_fetch_array($result))
                        {
                        echo "<tr>";
                        echo "<td>" . $row['Course'] . "</td>";
                        echo "<td>" . $row['Section'] . "</td>";
						//echo "<td>" . $row['Faculty'] . "</td>";
                        echo "<td>" . $row['Room'] . "</td>";
						echo "<td>" . $row['Days'] . "</td>";
						echo "<td>" . $row['StartTime'] . "</td>";
						echo "<td>" . $row['EndTime'] . "</td>";
                       
                        }
       

       // delete record
    	
    ?>
</fieldset>
</form>
</div>
</div>
</div>

<div align="center">
<br>
</div>
</div>
	</body>
	</html>

