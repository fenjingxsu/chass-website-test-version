<html>
<head>
	<style type="text/css">
		/*#man_date_table tbody{
			display: flex;
			flex-direction: column;
		}*/
	</style>
</head>
<body>


<?php
	$dbname="venue";
	$link=mysqli_connect("localhost","root","nckuchass123", $dbname) or die("無法開啟資料庫連結");
	mysqli_query($link, "SET NAMES 'utf8'");

	$sql1 = "SELECT * FROM rent WHERE date = '".$_GET["choosed_date_name"]."' ORDER BY time, orders";

	$max_orders_sql = "SELECT MAX(orders) FROM rent WHERE date = '".$_GET["choosed_date_name"]."'";
	$orders_tmp = mysqli_query($link, $max_orders_sql);
	$orders_tmp2 = mysqli_fetch_assoc($orders_tmp);
	$max_orders = $orders_tmp2['MAX(orders)'];

	echo "<table id='man_date_table'>";
	echo "<tr><td>時間</td>";
	for($i = 0; $i < $max_orders; $i++)
	{
		echo "<td>姓名</td><td>連絡電話</td><td>活動名稱</td><td>用途</td><td>操作</td>";
	}
	echo "</tr>";

	$data_array = array();
	if($result = mysqli_query($link, $sql1))
	{
		while($result2 = mysqli_fetch_assoc($result))
		{
			$data_array[] = array('id' => $result2["id"], 'time' => $result2["time"], 'name' => $result2["name"], 'phone' => $result2["phone"], 'purpose' => $result2["purpose"], 'usefor' => $result2["usefor"], 'orders' => $result2["orders"]);
		}
	}
	for($m = 0; $m < max(array(count($data_array))); $m++)
	{
		for($i = 0; $i < 8; $i++)
		{
			$time_start = $i + 8;
			$time_end = $i + 9;
			$time_string = strval($time_start).":00~".strval($time_end).":00";
			for($j = 1; $j <= $max_orders; $j++)
			{
				if($data_array[$m]["time"] == $time_string && $data_array[$m]["orders"] == $j)
				{
					$new_data[$i][$j] = $data_array[$m];
				}
			}
		}
	}

	for($i = 0; $i < 8; $i++)
	{
		$time_start = $i + 8;
		$time_end = $i + 9;
		$time_string = strval($time_start).":00~".strval($time_end).":00";
		echo "<tr><td>".$time_string."</td>";
		for($j = 1; $j <= $max_orders; $j++)
		{
			if($new_data[$i][$j])
			{
				echo "<td>".$new_data[$i][$j]["name"]."</td>";
				echo "<td>".$new_data[$i][$j]["phone"]."</td>";
				echo "<td>".$new_data[$i][$j]["purpose"]."</td>";
				echo "<td>".$new_data[$i][$j]["usefor"]."</td>";
				echo "<td><button id='move_btn_".$new_data[$i][$j]["id"]."' onclick = 'move(".$new_data[$i][$j]["id"].")'>移至最前</button></td>";
			}
			else
			{
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td></td>";
			}
		}
		echo "</td>";
	}
	echo "</table>";

?>

<form name = "move_form" id="move_form_id" method="POST" action="move_orders.php" class="hide">
	<input name="move_date_name" id="move_date_id" class="hide"/>
	<input name="move_id_name" id="move_id_id" class="hide"/>
</form>

<script type="text/javascript">
	function move(id)
	{
		document.getElementById("move_date_id").value = '<? echo $_GET["choosed_date_name"] ?>';
		document.getElementById("move_id_id").value = id;
		document.move_form.submit();
	}
</script>



</body>


<?
unset($_GET["choosed_date_name"]);
?>
</html>