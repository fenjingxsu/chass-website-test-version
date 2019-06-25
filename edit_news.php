<?
		$dbname="new_chass";
		$link=mysqli_connect("localhost","root","nckuchass123", $dbname) or die("無法開啟資料庫連結");
		mysqli_query($link, "SET NAMES 'utf8'");

		$sql = "UPDATE news SET title = '".$_POST["input_edit_title"]."', link = '".$_POST["input_edit_link"]."', time = '".$_POST["input_edit_time"]."' WHERE id = '".$_POST["edit_id_name"]."'";
		mysqli_query($link, $sql);
?>