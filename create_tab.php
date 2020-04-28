<?php
include_once('conn.php');
$sql = "CREATE TABLE course (Course_id int(10) NOT NULL auto_increment
		,Course_name varchar(20)NOT NULL
		,Course_price varchar(10)NOT NULL
		,CONSTRAINT pk_course PRIMARY KEY(Course_id));";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>alert('Create tab ok');
			</script>";
}else{
	echo "<script>alert('Can\'t create');
			</script>";
}
mysqli_close($conn);
?>