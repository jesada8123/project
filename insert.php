<?php
include_once('conn.php');
$year_number = $_POST['year_number'];
$term= $_POST['term'];
if($year_number=="" || empty($year_number)|| $term=="" || empty($term))
{
	echo "กรุณากรอก พ.ศ.";
	echo "<script language='Javascript'>
			alert('กรุณากรอก พ.ศ.')
			window.location='insert_form.php';
			</script>";
}else{
$sql = "insert into year(year_number,term)
values('$year_number','$term')";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>
			alert('เพิ่มข้อมูลในตารางเรียบร้อยแล้ว')
			window.location='select.php';
			</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
			alert('ไม่สามารถเพิ่มข้อมูลได้')
			</script>";
}
}
mysqli_close($conn);
?>