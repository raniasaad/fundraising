
<?php
include("connection.php");
//mysqli_select_db("pledges",$con);

$db_select = mysqli_select_db($con,"pledges");
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}

$result=mysqli_query($con,"select SUM(one_time) from pledges");
$result2=mysqli_query($con,"select SUM(monthly * duration) from pledges");

/*echo "<table border='1' >
<tr>
<td align=center> <b> One time</b></td>
<td align=center><b>Monthly</b></td>";*/
if($result === false) {
    die("Database query failed");
} else {
  
while($data = mysqli_fetch_row($result))
{ 

  /* echo "<tr>";
    echo "<td id='td1' >".$data[0]."</td>";
    echo "<td id='td2' >".$data[1]."</td>";
    echo "</tr>";*/
	//echo json_encode($data[0]);
	echo ($data[0]);
}
}
echo('/');
if($result2 === false) {
    die("Database query failed");
} else {
  
while($data2 = mysqli_fetch_row($result2))
{ 

  /* echo "<tr>";
    echo "<td id='td1' >".$data[0]."</td>";
    echo "<td id='td2' >".$data[1]."</td>";
    echo "</tr>";*/
	//echo json_encode($data[0]);
	echo ($data2[0]);
}
}
//echo "</table>";
?>