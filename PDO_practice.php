<?php 
	$orderer_name = 'Tom'; 
	header('Content-Type:text/html;Charset=utf8');
	$dsn = 'mysql:host=localhost;port=3306;dbname=shop';
	$pdo=new pdo($dsn, 'root','');
	$pdo->query("SET NAMES 'utf8'");
	$sql = "SELECT * FROM shop.product_order WHERE orderer_name = :orderer_name ORDER BY order_id ASC";

	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(':orderer_name',$orderer_name);
	$stmt->execute();
	$query = $stmt->fetchAll();
	foreach ($query as $value) {
		echo $value['order_id']."\t";
		echo $value['total_price']."\t";
		echo $value['create_time']."\t";
		echo $value['orderer_name']."\t";
		echo "-----------------------------<br>";
	}
 ?>