<?php
	session_start();
	date_default_timezone_set("Asia/Jakarta");

	/*require_once('../../requires/config.php');
	require_once('../../requires/fungsi.php');*/

	if($_POST["id"]) {

		$custid = $_POST["id"];

			$conn2 = mysqli_connect('localhost','root','','poltek');
			$result = mysqli_query($conn2,"delete from customers where cust_id = $custid;");
			if($result){
				
				echo 'OK';
			}
			
	}
?>