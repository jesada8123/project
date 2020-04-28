<?php  //update_form.php
include_once('conn.php');
$year_ID = $_GET["year_ID"];
$sql = ("SELECT
			year_number
		,	term
		FROM year 
		WHERE year_ID = $year_ID");
$res = mysqli_query($conn,$sql)
	or die ("Error cannot select data".
	mysqli_error($conn)); 
while($row = mysqli_fetch_array($res))
{
	$year_number = $row["year_number"];
	$term = $row["term"];
}
mysqli_free_result($res);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<body>
<form action="update.php" method="post">
<input type="hidden" name="year_ID" value=<?php echo $year_ID;?>>
<table align = center width = "20%" border = "0">
	<tr align = center><td><p style="font-size:19px"><b>ข้อมูลปีการศึกษา</td></tr></table>
	<table align = center width = "25%" border = "0">
		<tr><td><b> พ.ศ. : </td><td> <input type="text" name = "year_number" value=<?php echo $year_number; ?>><br> </td></tr>
		<tr><td><b> เทอม : </td><td> <input type="text" name = "term" value=<?php echo $term; ?>><br> </td></tr>
		</select><br> </td></tr>
		<tr><td><b> </td><td> </td></tr>
		<tr><td><b></td>
		<td> <input type="submit" value="แก้ไขข้อมูล">
			 <input type="reset" value="ยกเลิก"><br> </td></tr>
</form></body>
