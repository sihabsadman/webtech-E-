
<form action="Teacherregistration.php" method = "POST" style="border:1px solid #ccc">
  <div class="container">

  	<h2>TEACHER REGSTRATION</h2>
    <h3>Teacher information</h3>

  <b>Teacher Name <span style="color: red">*</span></b>
  <input type=text name="TeacherName" id="Teachername" size="20"><br>

  <b>Teacher ID<span style="color: red">*</span></b>
  <input type="text"  name="TeacherID" id="TeacherID" size="20"><br>

  <b>Father Name<span style="color: red">*</span></b>
 <input type="text"  name="FatherName" id="FatherName" size="20"><br>

 <b>Mothers Name<span style="color: red">*</span></b>
 <input type="text"  name="MothersName" id="MothersName" size="20"><br>

<b>Address</b>
   <input type="text" rows="4" cols="50" name="Address"> 
   <br>

<b>Section <span style="color: red">*</span></b>
<select name="Section" class="select">
<option value="1" selected>Select a ClassRoom</option>
<option value="Class 1">Class 1</option>
<option value="Class 2">Class 2</option>
</select><br>

<b>Phone<span style="color: red">*</span></b>
<input type="text" name="phone" id="phone" size="15"><br>

<b>Email<span style="color: red">*</span></b>
<input type="text" name="email" id="email" size="30"><br>


<b>Gender <span style="color: red">*</span></b>
<select name="Gender" class="select">
<option value="1" selected>Select a Gender</option>
<option value="Male"> Male</option>
<option value="Female"> Female</option>
</select><br>

<b>Academics <span style="color: red">*</span></b>
	<select name="Academics" class="select">
	<option value="1" selected>Select a Academics</option>
	<option value="Registation"> Registation</option>
	<option value="offered course">offered course</option>
	</select><br>

	<b>Subject Name <span style="color: red">*</span></b>
	<select name="Subject" class="select">
	<option value="1" selected>Select a Subject</option>
	<option value="Bangla"> Bangla</option>
	<option value="English"> English</option>
	<option value="Mathematics">Mathematics</option>
	</select><br>

	<input type="submit" value="Submit" name="submit" class="button">
    <input type="reset" value="Reset" class="button">
    <a href="home.php">HOME</a>
  	</div>
  	</form>



<?php 
include_once 'crud.php';
   $crud = new crud();

   if(isset($_POST['submit'])){
   	$TeacherName=$_POST['TeacherName'];
	$TeacherID=$_POST['TeacherID'];
	$FatherName=$_POST['FatherName'];
	$MothersName=$_POST['MothersName'];
	$Address=$_POST['Address'];
	$Section=$_POST['Section'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$Gender=$_POST['Gender'];
	$Academics=$_POST['Academics'];
	$Subject=$_POST['Subject'];
	



       $res = $crud->execute("insert into teacher(Teacher_Name,Teacher_ID,Father_Name,Mother_Name,Address,Section,Phone,Email,Gender,Academics,Subject_Name) values('$TeacherName','$TeacherID','$FatherName', '$MothersName','$Address','$Section','$phone','$email','$Gender','$Academics','$Subject')");

       if($res){
           echo("Successfully Teacher registrared");
           echo("<br/>");
       }
       else{
           echo("something is wrong");
           echo("<br/>");
       }

   }

?>



<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
   background-color: #eee;
  border: none;
  padding: 12px 15px;
  margin: 8px 0;
  width: 100%;
}

.select {
   background-color: #eee;
  border: none;
  padding: 12px 15px;
  margin: 8px 0;
  width: 100%;
}
.button{
  border-radius: 20px;
  border: 1px solid #FF4B2B;
  background-color: #FF4B2B;
  color: #FFFFFF;
  font-size: 12px;
  font-weight: bold;
  padding: 12px 200px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: transform 80ms ease-in;
}

.button:hover {
  opacity:1;
}


.container {
  padding: 16px;
}


</style>