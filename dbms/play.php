<!DOCTYPE>
<html>
<head><title>ASIA CUP-2018</title>
<link rel="stylesheet" href="style.css">
</head>
<body background="cricket.jpg">
<form action="<?php echo $_SERVER['PHP_SELF'];?>"method="post">
<marquee><h2><font color="orange" size="20px">ASIA CUP-2018</font></h2></marquee>
<center>

<table border="1" width="400" height="300"bgcolor="orange">
<tr>
<td colspan="5" align="center"bgcolor="red">ENTER PLAYER(enter the tid id given in the form above)</td>
</tr>
<tr>
<td align="right">PNAME:</td><td><input type="text" name="pname"></td>
</tr>
<tr>
<td align="right">AGE:</td><td><input type="text" name="age"></td>
</tr>
<tr>
<td align="right">DOB:</td><td><input type="text" name="dob"></td>
</tr>
<tr>
<td align="right">BIRTHPLACE:</td><td><input type="text" name="birthplace"></td>
</tr>
<tr>
<td align="right">PID:</td><td><input type="text" name="pid"></td>
</tr>
<tr>
<td align="right">TID:</td><td><input type="text" name="tid"></td>
</tr>
<tr>
<td colspan="5" align="center"><input type="submit" name="submit" value="insert"></td>
</tr>
<tr>
<td colspan="5" align="center"><input type="submit" name="delete" value="delete"></td>
</tr>
<tr>
<td colspan="5" align="center"><input type="submit" name="update" value="update"></td>
</tr>
</table></center>
</form>
</body>
</html>





<?php
$ser="localhost";
$user="root";
$pass="";
$db="asiacup";

$con=mysqli_connect($ser, $user ,$pass, $db);
if(!$con)
{
	echo 'not connected to server';
}
if(!mysqli_select_db($con,'asiacup'))
{
	echo 'database not selected';
}



if(isset($_POST['submit'])){
  $pname=$_POST['pname'];
$age=$_POST['age'];
$dob=$_POST['dob'];
$birthplace=$_POST['birthplace'];
$pid=$_POST['pid'];
$tid=$_POST['tid'];

  

$query="insert into player(pname,age,dob,birthplace,pid,tid)values('$pname','$age','$dob','$birthplace','$pid','$tid');";
if(mysqli_query($con,$query))
{
  
echo'<font color="white"><h3><font color="white">player data is inserted successfully</font></h3>';
}

}
if(isset($_POST['delete'])){
  $pid=$_POST['pid'];
 
$sql = "select * from player where pid='$pid';";
$result = mysqli_query($con,$sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0)
{


$query2="delete from player where pid='$pid'";
mysqli_query($con,$query2);

echo'<h3><font color="white">teams data is deleted successfully</font></h3>';


}
else
{
	echo "<h3>player id doesn't exist<h3>";
}
}
	

?>








<html>
   <head>
<title>players information</title>
<link rel="stylesheet" href="style.css">
</head>
<body style="backgroundcolor:black">

<h1>This is players information</h1>


<?php
$ser="localhost";
$user="root";
$pass="";
$db="asiacup";

$con=mysqli_connect($ser, $user ,$pass, $db) or die("connection failed");

$sql="SELECT * FROM player;";
$result=mysqli_query($con,$sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0) {
   echo "<table id = 'customers'>
   <tr>
   <th>pname</th>
   <th>age</th>
   <th>dob</th>
   <th>birthplace</th>
   <th>pid</th>
   <th>tid</th>
   </tr>";
while ($row = mysqli_fetch_assoc($result)){
echo "<tr><td>".$row['pname'] ."</td><td>".$row['age'] ."</td><td>".$row['dob'] ."</td><td>".$row['birthplace'] ."</td><td>".$row['pid'] ."</td><td>".$row['tid'] ."</td></tr>";
}
echo "</table>";
}else{
   "table 0";
}
?>

<a href="front.php">Go to Main Page</a>

</body>
</html>
