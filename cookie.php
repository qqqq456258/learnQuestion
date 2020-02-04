<?php
	$datestr = date("Y-m-d 23:59:59");
	if(isset($_COOKIE["counter"])){
		$counter = $_COOKIE["counter"];
		$counter++;
		setcookie("counter",$counter,strtotime($datestr));
	}
	else{
		setcookie("counter","0",strtotime($datestr));
		header("Location:cookie_1.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cookie之今日瀏覽次數</title>
</head>
<body>
	<?php
		echo "您今日瀏覽本頁的次數為 ".$counter." 次";
	?>
</body>
</html>