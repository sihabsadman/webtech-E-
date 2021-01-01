<?php session_start();
  if(!isset($_SESSION['id_number'])){
    header('location:admin_login.php');
  }
  ?>
 
<center><h1><b>Admin Panel</b></h1></center>
<center><h3><b>Student Information</b></h3></center>
	

 
         <?php
 header("Access-Control-Allow-Origin: *");
include_once 'Crud.php';

$crud = new Crud();

$query = "Select * from student order by id DESC";

$result = $crud->getData($query);

?>
        
<center><table border="1" class="table">


<b><tr>
<td>Student Name</td>
<td>Student ID</td>
<td>Father Name</td>
<td>Mothers Name</td>
<td>Address</td>
<td>Section</td>
<td>Class</td>
<td>Roll</td>
<td>Phone</td>
<td>Email</td>
<td>Session</td>
<td>Gender</td>
<td>Academics</td>
<td>Grade Report</td>
</tr>
</b>

  <?php
   foreach($result as $key=>$res){
     echo "<tr>";
     echo "<td>".$res['Student_Name']."</td>";
     echo "<td>".$res['Student_ID']."</td>";
     echo "<td>".$res['Father_Name']."</td>";
     echo "<td>".$res['Mother_Name']."</td>";
     echo "<td>".$res['Address']."</td>";
     echo "<td>".$res['Section']."</td>";
     echo "<td>".$res['Class']."</td>";
     echo "<td>".$res['Roll']."</td>";
     echo "<td>".$res['Phone']."</td>";
     echo "<td>".$res['Email']."</td>";
     echo "<td>".$res['Session']."</td>";
     echo "<td>".$res['Gender']."</td>";
     echo "<td>".$res['Academic']."</td>";
     echo "<td>".$res['Grade_report']."</td>";
      echo "<td><a href='delete.php?id=$res[ID]'>Delete</a></td>";
     echo "</tr>";
   }
   ?>
</table></center>
</div>


<center><a href="AdminHome.php"><button class="button" >Back</button></a></center>

	


<style>


.table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.table td, .table th {
  border: 1px solid #ddd;
  padding: 8px;
}

.table tr:nth-child(even){background-color: #f2f2f2;}

.table tr:hover {background-color: #ddd;}

.table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}


	.button{
   background-color: #FC4747;
  border: none;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
border-radius: 100px;
  width: 50%;
  align-items: right;
  font-size: 1.2rem;
   font-family: 'PT Sans', sans-serif;

	}


</style>
