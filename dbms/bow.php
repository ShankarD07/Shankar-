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
<td colspan="5" align="center"bgcolor="red">ENTER BOWLER(enter the tid id given in the form above)</td>
</tr>
<tr>
<td align="right">PID:</td><td><input type="text" name="pid"></td>
</tr>
<tr>
<td align="right">TID:</td><td><input type="text" name="tid"></td>
</tr>
<tr>
<td align="right">BOWINN:</td><td><input type="text" name="bowinn"></td>
</tr>
<tr>
<td align="right">WICKETS:</td><td><input type="text" name="wickets"></td>
</tr>
<tr>
<td align="right">BEST:</td><td><input type="text" name="best"></td>
</tr>
<tr>
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
  $pid=$_POST['pid'];
$tid=$_POST['tid'];
$bowinn=$_POST['bowinn'];
$wickets=$_POST['wickets'];
$best=$_POST['best'];

  

$query="insert into bowler(pid,tid,bowinn,wickets,best)values('$pid','$tid','$bowinn','$wickets','$best');";
if(mysqli_query($con,$query))
{
  
echo'<font color="white"><h3><font color="white">player data is inserted successfully</font></h3>';
}

}
if(isset($_POST['delete'])){
  $pid=$_POST['pid'];
 
$sql = "select * from bowler where pid='$pid';";
$result = mysqli_query($con,$sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0)
{


$query2="delete from bowler where pid='$pid'";
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

$sql="SELECT * FROM bowler;";
$result=mysqli_query($con,$sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0) {
   echo "<table id = 'customers'>
   <tr>
   <th>pid</th>
   <th>tid</th>
   <th>bowinn</th>
   <th>wickets</th>
   <th>best</th>
   </tr>";
while ($row = mysqli_fetch_assoc($result)){
echo "<tr><td>".$row['pid'] ."</td><td>".$row['tid'] ."</td><td>".$row['bowinn'] ."</td><td>".$row['wickets'] ."</td><td>".$row['best'] ."</td><td>";
}
echo "</table>";
}else{
   "table 0";
}
?>

<a href="front.php">Go to Main Page</a>

</body>
</html>
