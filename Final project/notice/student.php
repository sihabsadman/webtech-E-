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
 
include_once 'Crud.php';

$crud = new Crud();

$query = "Select * from routine order by id DESC";

$result = $crud->getData($query);

?>
        
<center><table border="1" class="table">


<b><tr>
<td>Course</td>
<td>Section</td>
<td>Teacher</td>
<td>Room</td>
<td>Days</td>
<td>Start Time</td>
<td>Endtime</td>
</tr>
</b>

  <?php
   foreach($result as $key=>$res){
     echo "<tr>";
     echo "<td>".$res['Sectinon']."</td>";
     echo "<td>".$res['Course']."</td>";
     echo "<td>".$res['Teacher']."</td>";
     echo "<td>".$res['Room']."</td>";
     echo "<td>".$res['Days']."</td>";
     echo "<td>".$res['StartTime']."</td>";
     echo "<td>".$res['EndTime']."</td>";

     echo "</tr>";
   }
   ?>
</table></center>
</div>
>

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

