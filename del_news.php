<?
		$dbname="new_chass";
		$link=mysqli_connect("localhost","root","nckuchass123", $dbname) or die("無法開啟資料庫連結");
		mysqli_query($link, "SET NAMES 'utf8'");

		$sql = "DELETE FROM news WHERE id = '".$_POST["del_id_name"]."'";
		mysqli_query($link, $sql);
?>