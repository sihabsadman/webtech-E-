<!DOCTYPE html>
<html>
<head>
  <title>LOGIN FORM</title>
</head>
<body>

  <body style="background-color:powderblue;"></body>
  <table border="1">
   <tr> 
      <center>
  <img src="login.png"alt="portal_logo_website_dark" width="200" height="S200" style=" : center;">
</center>
</tr>

<div class="navbar">
      <ul>
      <li><a href="home.php">HOME</a></li>


      </ul>
      <hl>
    </div>
</br>
<form method="post" action="login.php">
  <center>
   </table>
<body>
<center>
<h3>LOGIN</h3>

     <table border="1">
       <label for="uname"><b>Username</b></label>
       <input type="text" placeholder="Enter Username" name="uname" required>
  <br>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
     </br>
   </table>
  
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color: white">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <li><a href="reset.html">Forget PASSWORD</a></li></center>
    </div>
  </form>
</div>

<script>
var modal = document.getElementById('id01');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
