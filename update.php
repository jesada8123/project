<?php
include_once('conn.php');
$year_ID = $_POST["year_ID"];
$year_number = $_POST["year_number"];
$term = $_POST["term"];
$sql = "update year set 
		year_number = '$year_number', term = '$term'
		WHERE year_ID = $year_ID; ";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>
			alert('แก้ไขข้อมูลในตารางเรียบร้อยแล้ว')
			window.location='select.php';
			</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
			alert('ไม่สามารถแก้ไขข้อมูลได้')
			window.location='select.php';
			</script>";
}
mysqli_close($conn);55555
?>
