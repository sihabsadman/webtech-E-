
<form action="registration.php" method = "POST" style="border:1px solid #ccc">
  <div class="container">

  	<h2>STUDENT REGSTRATION</h2>
    <h3>Student information</h3>

  <b>Student Name <span style="color: red">*</span></b>
  <input type=text name="StudentName" id="Studentname" size="20"><br>

  <b>Student ID<span style="color: red">*</span></b>
  <input type="text"  name="StudentID" id="StudentID" size="20"><br>

  <b>Father Name<span style="color: red">*</span></b>
 <input type="text"  name="FatherName" id="FatherName" size="20"><br>

 <b>Mothers Name<span style="color: red">*</span></b>
 <input type="text"  name="MothersName" id="MothersName" size="20"><br>

<b>Address</b>
   <input type="text" rows="4" cols="50" name="Address"> 
   <br>

<b>Section <span style="color: red">*</span></b>
<select name="Section" class="select">
<option value="1" selected>Select a Section</option>
<option value="A">A</option>
<option value="B">B</option>
</select><br>

<b>Class<span style="color: red">*</span></b>
<input type="text"  name="Class" id="Class" size="20"><br>


<b>Roll<span style="color: red">*</span></b>
<input type="text"  name="Roll" id="Roll" size="20"><br>

<b>Phone<span style="color: red">*</span></b>
<input type="text" name="phone" id="phone" size="15"><br>

<b>Email<span style="color: red">*</span></b>
<input type="text" name="email" id="email" size="30"><br>

<b>Session <span style="color: red">*</span></b>
<select name="Session" class="select">
<option value="1" selected>Select a Session</option>
<option value="Half Yearly"> Half Yearly</option>
<option value="Yearly"> Yearly</option>
</select><br>

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
	<option value="Drop application"> Drop application</option>
	<option value="offered course">offered course</option>
	</select><br>

	<b>Grade Report <span style="color: red">*</span></b>
	<select name="GradeReport" class="select">
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
   	$StudentName=$_POST['StudentName'];
	$StudentID=$_POST['StudentID'];
	$FatherName=$_POST['FatherName'];
	$MothersName=$_POST['MothersName'];
	$Address=$_POST['Address'];
	$Section=$_POST['Section'];
	$country=$_POST['Class'];
    $Roll=$_POST['Roll'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$Session=$_POST['Session'];
	$Gender=$_POST['Gender'];
	$Academics=$_POST['Academics'];
	$GradeReport=$_POST['GradeReport'];
	



       $res = $crud->execute("insert into student(Student_Name,Student_ID,Father_Name,Mother_Name,Address,Section,Class,Roll,Phone,Email,Session,Gender,Academic,Grade_report) values('$StudentName','$StudentID','$FatherName', '$MothersName','$Address','$Section','$country','Roll','$phone','$email','$Session','$Gender','$Academics','$GradeReport')");

       if($res){
           echo("Successfully registrared");
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