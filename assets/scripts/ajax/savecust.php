<?php
     error_reporting(E_ALL);
     ini_set("display_errors","On");
	session_start();
	date_default_timezone_set("Asia/Jakarta");

	/*require_once('../../requires/config.php');
	require_once('../../requires/fungsi.php');*/
   
    
	if($_POST) {
        $flag=($_POST["flag"]);
       
		$custid = htmlspecialchars($_POST["custid"]);
        $nama =htmlspecialchars($_POST["nm"]);
        $addr = htmlspecialchars($_POST["addr"]);
        $phone = htmlspecialchars($_POST["ph"]);
        $city = htmlspecialchars($_POST["city"]);

        
        /*echo $custid;
        echo $nama;
        echo $addr;
        echo $phone;
        echo $city;*/

       if ($flag=='new'){
			$conn2 = mysqli_connect('localhost','root','','poltek');
			$result = mysqli_query($conn2,"insert into customers (cust_id, cust_name, cust_addr, cust_phone, cust_city) values ('$custid', '$nama', '$addr','$phone', '$city');");
            
			if($result){
               
                echo 'OK';
            }
            else{
                echo 'ERROR';
            }
           
        }
    
        else{
            $conn2 = mysqli_connect('localhost','root','','poltek');
            $result=mysqli_query($conn2,"update customers set cust_id='$custid',cust_name='$nama', cust_addr='$addr', cust_phone='$phone', cust_city='$city' where cust_id='$custid';");
            
            if($result){
                echo 'OK';
            }
            else{
                echo 'ERROR';
            }
        
        }

	}
?>