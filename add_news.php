<?
		$dbname="new_chass";
		$link=mysqli_connect("localhost","root","nckuchass123", $dbname) or die("無法開啟資料庫連結");
		mysqli_query($link, "SET NAMES 'utf8'");

		$sql = "INSERT INTO news(title,time,link) VALUES ('".$_POST["input_add_title"]."','".$_POST["input_add_time"]."','".$_POST["input_add_link"]."')";
		mysqli_query($link, $sql);
?>