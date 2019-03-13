<?
	$dbname="venue";
	$link=mysqli_connect("localhost","root","nckuchass123", $dbname) or die("無法開啟資料庫連結");
	mysqli_query($link, "SET NAMES 'utf8'");

	$max_orders_sql = "SELECT MAX(orders) FROM `rent` WHERE date='".$_POST["date_name"]."' and time='".$_POST["time_name"]."'";
	$tmp1 = mysqli_query($link, $max_orders_sql);
	$tmp2 = mysqli_fetch_assoc($tmp1);
	if($tmp2['MAX(orders)'] != 0)
		$max_orders = $tmp2['MAX(orders)']+1;
	else
		$max_orders = 2;


	$sql1 = "INSERT INTO rent(name, phone, purpose, usefor, date, time, orders) VALUES ('".$_POST["name_name"]."', '".$_POST["phone_name"]."', '".$_POST["purpose_name"]."', '".$_POST["usefor_name"]."', '".$_POST["date_name"]."', '".$_POST["time_name"]."', '".$max_orders."')";
	mysqli_query($link, $sql1);
?>