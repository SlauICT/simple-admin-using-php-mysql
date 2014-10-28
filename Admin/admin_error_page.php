<?php include_once('connect.php');?>
<?php
session_start();

if(isset($_POST['Submit'])){
$username=$_POST['username'];
$password=$_POST['password'];

$sql=mysql_query("select * from login where username = '$username' AND password = '$password'") or die(mysql_error());
if(mysql_num_rows($sql)== 0){
$report= header("location: admin_error_page.php");
}
else{
$row = mysql_fetch_array($sql);
$_SESSION['username'] == $row[username];
$_SESSION['password'] == $row[password];
$report = header("location: admin_user.php");
}}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Error Page</title>
</head>

<body>
<table width="691" height="53" border="0" align="center">
  <tr>
    <td width="78" height="47">&nbsp;</td>
    <td><h1>ST.LAWRENCE UNIVERSITY</h1></td>
    <td width="87">&nbsp;</td>
  </tr>
</table>
<table width="899" height="228" border="1">
  <tr>
    <td><p>&nbsp;</p>
      <form id="form1" name="form1" method="post" action="">
        <p align="center"><strong style="color:#F00;">Error !!!Try Again  </strong></p>
        <table width="35%" border="0" align="center">
          <tr>
            <td width="34%">USERNAME</td>
            <td width="66%"><label for="username3"></label>
              <input type="text" name="username" id="username3" /></td>
          </tr>
          <tr>
            <td>PASSWORD</td>
            <td><label for="password"></label>
              <input type="text" name="password" id="password" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="Submit" id="Submit" value="Login" />
            <input type="reset" name="Reset" id="Reset" value="Reset" /></td>
          </tr>
        </table>
        <?php include('footer.php');?>
       
      </form></td>
  </tr>
</table>
</body>
</html>