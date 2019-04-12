<html>
   <head>
<title>players information</title>
<link rel="stylesheet" href="style.css">
</head>
<body style="backgroundcolor:black">

<h1>This is Stadium information</h1>


<?php
$ser="localhost";
$user="root";
$pass="";
$db="asiacup";

$con=mysqli_connect($ser, $user ,$pass, $db) or die("connection failed");

$sql="SELECT * FROM stadium;";
$result=mysqli_query($con,$sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0) {
   echo "<table id = 'customers'>
   <tr>
   <th>sname</th>
   <th>city</th>
   <th>sid</th>
   </tr>";
while ($row = mysqli_fetch_assoc($result)){
echo "<tr>";
  echo "<td>" . $row["sname"] ."</td>";
  echo "<td>" . $row["city"] ."</td>";
  echo "<td>" . $row["sid"] ."</td>";
}
echo "</table>";
}else{
   "table 0";
}
?>

<a href="index.html">Go to Main Page</a>

</body>
</html>
