<html>
   <head>
<title>players information</title>
<link rel="stylesheet" href="style.css">
</head>
<body style="backgroundcolor:black">

<h1>This is Batting information</h1>


<?php
$ser="localhost";
$user="root";
$pass="";
$db="asiacup";

$con=mysqli_connect($ser, $user ,$pass, $db) or die("connection failed");

$sql="select mid,t1,t2
from match1
where date between '15-SEP-2018' and '19-SEP-2018';;";
$result=mysqli_query($con,$sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0) {
   echo "<table id = 'customers'>
   <tr>
   <th>mid</th>
   <th>t1</th>
   <th>t2</th>
   
   </tr>";
while ($row = mysqli_fetch_assoc($result)){
echo "<tr>";
  echo "<td>" . $row["mid"] ."</td>";
  echo "<td>" . $row["t1"] ."</td>";
  echo "<td>" . $row["t2"] ."</td>";

}
echo "</table>";
}else{
   "table 0";
}
?>

<a href="index.html">Go to Main Page</a>

</body>
</html>
