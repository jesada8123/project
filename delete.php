<?php
include_once('conn.php');
$year_ID = $_GET['year_ID'];
$sql = "delete from year
		where year_ID = '$year_ID'";
$result=mysqli_query($conn,$sql);
if ($result){
	echo "<script>
			alert('ลบข้อมูลเรียบร้อยแล้ว');
			window.location='select.php';
			</script>";
}else{
	echo mysqli_error ($conn);
	echo "<script>
			alert('ไม่สามารถลบข้อมูลได้');
			window.location='select.php';
			</script>";
}
mysqli_close($conn);
?>