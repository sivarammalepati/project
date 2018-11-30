<?php
session_start();
error_reporting(0);
include("config.php");
if(isset($_POST['login']))
{
    $email=$_POST['email'];
  $pwd=$_POST['pwd'];
  $loginresult="select * from login where email='$email' and pwd='$pwd'";
 $rdata=mysqli_query($conn,$loginresult);
if(mysqli_num_rows($rdata) > 0)
    {
       echo $_SESSION['email']=$email;
       echo $_SESSION['user_role']=$user_role;
	header("location:admin.php"); 
    }


else
{
header("location:login.php");
    
}
}

?>
<html >
 
<head>
 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 

 
</head>
 
<body>
    <h1 align="center">login page</h1>
 <form action="" method="post">
<table width="345"  align=center>
 
<tr>
 
<th height="34">email</th>
 
<td><input type="email" placeholder="enter your email"  name="email" required/></td>
 
</tr>
 
<tr>
 
<th height="33">passoword</th>
 
<td><input type="password"  placeholder="enter your password"  name="pwd" required/></td>
 
</tr>
 
<tr>
 
<th height="39" colspan="2"><input type="submit"  name="login" value="login"/>
 

 
</tr>
 
</table>
    </form>
</body>
 
</html>