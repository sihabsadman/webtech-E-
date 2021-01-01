<?php
   //include_once("student.html");
  include_once("navigation.php");
  echo "";
?><html>
<head>
<br>
</head>
<body>
  <br>
<div align="center">
			<fieldset>
            <legend>Results</legend>
<body>
    <?php
     include_once 'Crud.php';

    $crud = new Crud();
    $query = ("SELECT * FROM information where id='32444'");
    $result = $crud->getData($query);
?>
<?php
echo "<div class='container'><table width='' class='table table-bordered' border='1' >
                                </tr>";
   foreach($result as $key=>$res){
                        echo "<tr>";
                        echo "<td>" . " Name :       ".$res['Name'] . "</td>";

                        echo "<tr>";
                        echo  "<td>" . "Id   :       ".$res['Id'] . "</td>";

                        echo "<tr>";
                        echo "<td>" . "GPA   :       ".$res['CGPA'] . "</td>";

                        echo "<tr>";
                        echo "<td>" . "Credit Completed   :       " .$res['Credit'] . "</td>";

                        echo "<tr>";
                        echo "<td>" . "Program   :       ".$res['Program'] . "</td>";

                        echo "<tr>";
                        echo "<td>" . "Department   :       ".$res['Department'] . "</td>";

                        echo "<tr>";
                        echo "<td>" . " Core   :   " .$res['Core'] . "</td>";

                        echo "<tr>";
                        echo "<td>" . "Major  :       " .$res['Major'] . "</td>";

                        echo "<tr>";
                        echo "<td>" . "SecondMajor  :    " .$res['SecondMajor'] . "</td>";

                        echo "<tr>";
                        echo "<td>" . "Minor   :       " .$res['Minor'] . "</td>";

                        echo "<tr>";
                        echo "<td>" . "Elective   :       " .$res['Elective'] . "</td>";

                        echo "<tr>";
                        echo "<td>" . "Father Name   :       ".$res['FatherName'] . "</td>";

                        echo "<tr>";
                        echo "<td>" . "Mother Name   :       ".$res['MotherName'] . "</td>";

                        echo "<tr>";
                        echo "<td>" . "Present Address   :       ".$res['PresentAddress'] . "</td>";

                        echo "<tr>";
                        echo "<td>" . "Permanent Address   :       " .$res['PermanentAddress'] . "</td>";

                        echo "<tr>";
                        echo "<td>" ."Contact   :       " .$res['Contact'] . "</td>";

                        echo "<tr>";
                        echo "<td>" ."Email   :       " .$res['Email'] . "</td>";

                        echo "<tr>";
                        echo "<td>" ."DOB   :       " .$res['DOB'] . "</td>";

                        echo "<tr>";
                        echo "<td>" ."Sex   :       " .$res['Sex'] . "</td>";

                        echo "<tr>";
                        echo "<td>" ."Nationality   :       " .$res['Nationality'] . "</td>";

                        echo "<tr>";
                        echo "<td>" ."Religion   :       " .$res['Religion'] . "</td>";

                        echo "<tr>";
                        echo "<td>" ."Marital Status   :       " .$res['MaritalStatus'] . "</td>";

                        echo "<tr>";
                        echo "<td>" ."Blood Group  :       " .$res['BloodGroup'] . "</td>";

                        echo "<tr>";
                        echo "<td>" ."Admission Date   :       " .$res['AdmissionDate'] . "</td>";

                        echo "<tr>";
                        echo "<td>" ."Graduation Date  :       " .$res['GraduationDate'] . "</td>";
                    
   }
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

