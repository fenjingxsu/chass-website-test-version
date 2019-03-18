<?
	$dbname="venue";
	$link=mysqli_connect("localhost","root","nckuchass123", $dbname) or die("無法開啟資料庫連結");
	mysqli_query($link, "SET NAMES 'utf8'");

	$get_ori_first_sql = "SELECT id FROM rent WHERE date = '".$_POST["move_date_name"]."' and orders = '1'";
	$tmp1 = mysqli_query($link, $get_ori_first_sql);
	$tmp2 = mysqli_fetch_assoc($tmp1);
	$ori_first = $tmp2["id"];

	$get_ori_orders_sql = "SELECT orders FROM rent WHERE id = '".$_POST["move_id_name"]."'";
	$tmp1 = mysqli_query($link, $get_ori_orders_sql);
	$tmp2 = mysqli_fetch_assoc($tmp1);
	$ori_orders = $tmp2["orders"];

	$update_to_first = "UPDATE rent SET orders = '1' WHERE id = '".$_POST["move_id_name"]."'";
	mysqli_query($link, $update_to_first);
	$update_from_first = "UPDATE rent SET orders = '".$ori_orders."' WHERE id ='".$ori_first."'";
	mysqli_query($link, $update_from_first);

	$_POST = array();
?>