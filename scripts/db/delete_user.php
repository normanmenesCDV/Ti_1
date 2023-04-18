<?php
	//print_r($_GET);
	require_once "./connect.php";
//	$sql = "DELETE FROM users WHERE `users`.`id` = 2";
//	$sql = "DELETE FROM users WHERE `users`.`firstName` = 'Janusz'";
	$sql = "DELETE FROM users WHERE `users`.`id` = '$_GET[userDeleteId]'";
	$conn->query($sql);
	//echo $conn->affected_rows;
if ($conn->affected_rows == 0) {
	//echo "error";
	//header("location: ../../7_db_table_delete.php?userIdDelete=0");
	//header("location: ../../8_db_table_delete_add.php?userIdDelete=0");
	header("location: ../../9_db_table_delete_add_update.php?userIdDelete=0");
} else {
	//echo "ok";
	//header("location: ../../7_db_table_delete.php?userIdDelete=$_GET[userDeleteId]");
	//header("location: ../../8_db_table_delete_add.php?userIdDelete=$_GET[userDeleteId]");
	header("location: ../../9_db_table_delete_add_update.php?userIdDelete=$_GET[userDeleteId]");
}