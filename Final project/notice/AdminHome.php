<?php session_start();
  if(!isset($_SESSION['id_number'])){
    header('location:AdminHome.php');
  }
  ?>
 
<center><h1><b>Admin Panel</b></h1></center>
<center><a href="admin.php"><button class="button" >Student Information</button></a></center>
<center><a href=""><button class="button" >Teacher Information</button></a></center>
<center><a href="student.php"><button class="button" >Student portal</button></a></center>
<center><a href=""><button class="button" >Teacher portal</button></a></center>
<center><a href=""><button class="button" >Notice Board</button></a></center>
<center><a href="logout.php"><button class="button" >Logout</button></a></center>



<style>
	
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