<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Document</title>
	<link href="css/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		html,body {
			width: 100%;
			height: 100%;
			margin: 0;
			padding: 0;
		}

		#container {
			width: 100%;
			height: 100%;
			display: flex;
			align-items: center;
			justify-content: center;
		}
	</style>
</head>

<body>
	<?php
	$link = mysqli_connect("localhost", "root", "") or die("無法開啟MySQL資料庫連接!<br/>");
	mysqli_select_db($link, "網設專題");
	mysqli_query($link, 'SET NAMES utf8');
	$sql = "INSERT INTO account (`name`, `username`,`email`,`phone_number`,`address`)
    VALUES('$_POST[name]','$_POST[username]','$_POST[email]','$_POST[phone_number]','$_POST[address]')";
	if (!mysqli_query($link, $sql)) {
		die('Error: ' . mysqli_error($link));
	}	
	$sql = "DELETE FROM `cart_milkshop`";
	if (!mysqli_query($link, $sql)) {
		die('Error: ' . mysqli_error($link));
	}
	$sql = "DELETE FROM `cart_coco`";
	if (!mysqli_query($link, $sql)) {
		die('Error: ' . mysqli_error($link));
	}
	$sql = "DELETE FROM `cart_macu`";
	if (!mysqli_query($link, $sql)) {
		die('Error: ' . mysqli_error($link));
	}
	?>
	<div id="container">
		<div style="border-width: 3px; border-style: dashed; border-color: #FF0404; background-color: #FDFDFD; width: 450px; height: 150px; text-align: center; line-height: 75px;">
			<font size="5">
				訂單已送出!<br>3秒後為您導回主頁
			</font>
		</div>
	</div>
	<?php
	header("Refresh:3;url=first.html");
	?>
</body>

</html>