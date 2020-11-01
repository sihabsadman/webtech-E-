<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php



if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
  $Degree = test_input($_POST["Degree"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2> Form Validation </h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
     <br><br>
   <input type="submit" name="submit" value="Submit"><br><br> 
  E-mail: <input type="text" name="email">
      <br><br>
   <input type="submit" name="submit" value="Submit"> <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br> <input type="submit" name="submit" value="Submit"> <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
  <br><br>
  Degree:
  <input type="radio" name="Degree" value="ssc">SSC
  <input type="radio" name="Degree" value="hsc">HSC
  <input type="radio" name="Degree" value="BSc">BSc
  <input type="radio" name="Degree" value="MSc">MSc

  <br><br>
  <input type="submit" name="submit" value="Submit"> 
</form>



</body>
</html>