<html>
   <head>
<title>players information</title>
<link rel="stylesheet" href="style.css">
</head>
<body style="backgroundcolor:black">

<h1>This is Bowling information</h1>


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
echo "<tr>";
  echo "<td>" . $row["pid"] ."</td>";
  echo "<td>" . $row["tid"] ."</td>";
  echo "<td>" . $row["bowinn"] ."</td>";
  echo "<td>" . $row["wickets"] ."</td>";
  echo "<td>" . $row["best"] ."</td>";
}
echo "</table>";
}else{
   "table 0";
}
?>

<a href="index.html">Go to Main Page</a>

</body>
</html>
