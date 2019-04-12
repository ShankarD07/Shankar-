<html>
   <head>
<title>players information</title>
<link rel="stylesheet" href="style.css">
</head>
<body style="backgroundcolor:black">

<h1><marquee>Team information</marquee></h1>


<?php
$ser="localhost";
$user="root";
$pass="";
$db="asiacup";

$con=mysqli_connect($ser, $user ,$pass, $db) or die("connection failed");

$sql="SELECT * FROM team;";
$result=mysqli_query($con,$sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0) {
   echo "<table id = 'customers'>
   <tr>
   <th>tname</th>
   <th>ranking</th>
   <th>tid</th>
   </tr>";
while ($row = mysqli_fetch_assoc($result)){
echo "<tr>";
  echo "<td>" . $row["tname"] ."</td>";
  echo "<td>" . $row["ranking"] ."</td>";
  echo "<td>" . $row["tid"] ."</td>";
}
echo "</table>";
}else{
   "table 0";
}
?>

<a href="index.html">Go to Main Page</a>

</body>
</html>
