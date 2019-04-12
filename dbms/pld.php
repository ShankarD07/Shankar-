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
<td colspan="5" align="center"bgcolor="red">ENTER PLAYED(enter the mid id given in the form above)</td>
</tr>
<tr>
<td align="right">SCORE:</td><td><input type="text" name="score"></td>
</tr>
<tr>
<td align="right">MID:</td><td><input type="text" name="mid"></td>
</tr>
<tr>
<td align="right">PID:</td><td><input type="text" name="pid"></td>
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
  $score=$_POST['score'];
$mid=$_POST['mid'];
$pid=$_POST['pid'];

  

$query="insert into played(score,mid,pid,)values('$score','$mid','$pid');";
if(mysqli_query($con,$query))
{
  
echo'<font color="white"><h3><font color="white">played data is inserted successfully</font></h3>';
}

}
if(isset($_POST['delete'])){
  $pid=$_POST['pid'];
 
$sql = "select * from played where pid='$pid';";
$result = mysqli_query($con,$sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0)
{


$query2="delete from played where pid='$pid'";
mysqli_query($con,$query2);

echo'<h3><font color="white">teams data is deleted successfully</font></h3>';


}
else
{
	echo "<h3>played id doesn't exist<h3>";
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

$sql="SELECT * FROM played;";
$result=mysqli_query($con,$sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0) {
   echo "<table id = 'customers'>
   <tr>
   <th>score</th>
   <th>mid</th>
   <th>pid</th>
   </tr>";
while ($row = mysqli_fetch_assoc($result)){
echo "<tr><td>".$row['score'] ."</td><td>".$row['mid'] ."</td><td>".$row['pid'] ."</td></tr>";
}
echo "</table>";
}else{
   "table 0";
}
?>

<a href="front.php">Go to Main Page</a>

</body>
</html>
