<?php
	session_start();
	date_default_timezone_set("Asia/Jakarta");

	if($_POST["keyword"]) {

		$keyword = $_POST["keyword"];

			$conn2 = mysqli_connect('localhost','root','','poltek');
			$result = mysqli_query($conn2,"SELECT * FROM customers WHERE cust_name LIKE '%".$keyword."%'");

			if(!$result){
				die();
				echo 'noresult';
			}else{
				$jumrec=mysqli_num_rows($result);
			}
			$table='<table class="table table-striped table-hover">';
            $table.='<thead>
                        <tr>
                            <th class="text-center" style="width:5%;">ID</th>
                            <th class="text-center" style="width:30%;">CUSTOMER NAME</th>
                            <th class="text-center" style="width:30%;">ADDRESS</th>
                            <th class="text-center" style="width:10%;">PHONE</th>
                            <th class="text-center" style="width:20%;">CITY</th>
                        </tr>
                    </thead>
                    <tbody>';

			if($jumrec>0){
                while($record = mysqli_fetch_array($result)){
                    $table.='
                                <tr id="'.$record["cust_id"].'">
                                    <td class="id_txt" align="center"><a href="'.$record["cust_id"].'" class="linkk">'.$record["cust_id"].'</a>
                                    <td class="name_txt">'.$record['cust_name'].'</td>
                                    <td class="addr_txt">'.$record['cust_addr'].'</td>
                                    <td class="phone_txt" align="center">'.$record['cust_phone'].'</td>
                                    <td class="city_txt" align="center">'.$record['cust_city'].'</td>
                                </tr>';
                    $jumrec -= 1;
                    
                }
			}
			else{
				$arr = array('id' => '0',
							 'nm' => '',
							 'addr' => '',
							 'phone' => '',
							 'city' => ''
							 );
			}
            

            $table.='</tbody>
                    </table>';

           

            echo $table;
            exit;
	}
?>