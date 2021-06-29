<?php
error_reporting(E_ALL);
ini_set("display_errors","On");
session_start();
date_default_timezone_set("Asia/Jakarta");
			
		try 
		{
			$pdo = new PDO('mysql:host=localhost;dbname=poltek', 'root', '');
		}
		catch (PDOException $e) 
		{
    		echo 'Error: ' . $e->getMessage();
    		exit();
		}
		
		try{
			$pdo->setAttribute(PDO::ATTR_ERRMODE,
			PDO::ERRMODE_EXCEPTION);
			$sql = "SELECT * FROM customers";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$total = $stmt->rowCount();
		}catch(PDOException $e){
			echo $e->getMessage();
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
				</thead>';

		while ($row3 = $stmt->fetch()){
			$newarray[] = $row3;
			$table.='<tbody>
						<tr id="'.$row3["cust_id"].'">
                    		<td class="id_txt" align="center"><a href="'.$row3["cust_id"].'" class="linkk">'.$row3["cust_id"].'</a>
							<td class="name_txt">'.$row3['cust_name'].'</td>
							<td class="addr_txt">'.$row3['cust_addr'].'</td>
							<td class="phone_txt" align="center">'.$row3['cust_phone'].'</td>
							<td class="city_txt" align="center">'.$row3['cust_city'].'</td>
						</tr>';
		}
		$table.='</tbody>
				</table>';

		echo $table;
	
			

?>
