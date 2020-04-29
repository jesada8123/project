<body background="940.jpg">
             <tr></tr>	 
	      </table>
<?php ?>
<!DOCTYPE html>
<html>
<body>
<form action="insert.php" method="post">
	<table align = center width = "20%" border = "0">
	<tr align = center><td><p style="font-size:19px"><b>ข้อมูลปีการศึกษา</td></tr></table>
	<table align = center width = "25%" border = "0">
		<tr><td><b> พ.ศ. : </td><td> <input type="text" name = "year_number"> </td></tr>
		<tr><td><b> ฟหกหฟกฟหกหฟก : </td><td>
		<select name = "term"> 
			<option value = "กรุณาเลือกเทอม" selected>กรุณาเลือกเทอม</option>
			<option value = "1">1 </option>
			<option value = "2">2 </option>
			<option value = "3">3 </option>
		</select><br> </td></tr>
		<tr><td><b> </td><td> </td></tr>
		<tr><td><b></td>
		<td> <input type="submit" value="บันทึก">
			 <input type="reset" value="ยกเลิก"><br> </td></tr>
	</table> <br> <BR>
</form>
</body>
</html>

	
