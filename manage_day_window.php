<html>
<body>


<?
	if(isset($_GET["choosed_date_name"]))
	{
		echo "<table>";
		echo "<tr><td>時間</td><td>姓名</td><td>連絡電話</td><td>活動名稱</td><td>用途</td><td></td></tr>";
		echo "<tr>
				<td>8:00~9:00</td>
				<td id='name_1'><input type='text' name='name_name' id='name_id_1'/></td>
				<td id='phone_1'><input name='phone_name' id='phone_id_1'/></td>
				<td id='purpose_1'><input name='purpose_name' id='purpose_id_1'/></td>
				<td id='usefor_1'><select name='usefor_name' id='usefor_id_1'><option value='教學'>教學</option><option value='其他'>其他</option></select></td>
				<td id='btn_1'><button id='btn_1_id' onclick='rent_submit(this.id)'>申請</button></td>
			</tr>";
		echo "<tr>
				<td>9:00~10:00</td>
				<td id='name_2'><input name='name_name' id='name_id_2'/></td>
				<td id='phone_2'><input name='phone_name' id='phone_id_2'/></td>
				<td id='purpose_2'><input name='purpose_name' id='purpose_id_2'/></td>
				<td id='usefor_2'><select name='usefor_name' id='usefor_id_2'><option value='教學'>教學</option><option value='其他'>其他</option></select></td>
				<td id='btn_2'><button id='btn_2_id' onclick='rent_submit(this.id)'>申請</button></td>
			</tr>";
		echo "<tr>
				<td>10:00~11:00</td>
				<td id='name_3'><input name='name_name' id='name_id_3'></td>
				<td id='phone_3'><input name='phone_name' id='phone_id_3'></td>
				<td id='purpose_3'><input name='purpose_name' id='purpose_id_3'></td>
				<td id='usefor_3'><select name='usefor_name' id='usefor_id_3'><option value='教學'>教學</option><option value='其他'>其他</option></select></td>
				<td id='btn_3'><button id='btn_3_id' onclick='rent_submit(this.id)'>申請</button></td>
			</tr>";
		echo "<tr>
				<td>11:00~12:00</td>
				<td id='name_4'><input name='name_name' id='name_id_4'></td>
				<td id='phone_4'><input name='phone_name' id='phone_id_4'></td>
				<td id='purpose_4'><input name='purpose_name' id='purpose_id_4'></td>
				<td id='usefor_4'><select name='usefor_name' id='usefor_id_4'><option value='教學'>教學</option><option value='其他'>其他</option></select></td>
				<td id='btn_4'><button id='btn_4_id' onclick='rent_submit(this.id)'>申請</button></td>
			</tr>";
		echo "<tr>
				<td>12:00~13:00</td>
				<td id='name_5'><input name='name_name' id='name_id_5'></td>
				<td id='phone_5'><input name='phone_name' id='phone_id_5'></td>
				<td id='purpose_5'><input name='purpose_name' id='purpose_id_5'></td>
				<td id='usefor_5'><select name='usefor_name' id='usefor_id_5'><option value='教學'>教學</option><option value='其他'>其他</option></select></td>
				<td id='btn_5'><button id='btn_5_id' onclick='rent_submit(this.id)'>申請</button></td>
			</tr>";
		echo "<tr>
				<td>13:00~14:00</td>
				<td id='name_6'><input name='name_name' id='name_id_6'></td>
				<td id='phone_6'><input name='phone_name' id='phone_id_6'></td>
				<td id='purpose_6'><input name='purpose_name' id='purpose_id_6'></td>
				<td id='usefor_6'><select name='usefor_name' id='usefor_id_6'><option value='教學'>教學</option><option value='其他'>其他</option></select></td>
				<td id='btn_6'><button id='btn_6_id' onclick='rent_submit(this.id)'>申請</button></td>
			</tr>";
		echo "<tr>
				<td>14:00~15:00</td>
				<td id='name_7'><input name='name_name' id='name_id_7'></td>
				<td id='phone_7'><input name='phone_name' id='phone_id_7'></td>
				<td id='purpose_7'><input name='purpose_name' id='purpose_id_7'></td>
				<td id='usefor_7'><select name='usefor_name' id='usefor_id_7'><option value='教學'>教學</option><option value='其他'>其他</option></select></td>
				<td id='btn_7'><button id='btn_7_id' onclick='rent_submit(this.id)'>申請</button></td>
			</tr>";
		echo "<tr>
				<td>15:00~16:00</td>
				<td id='name_8'><input name='name_name' id='name_id_8'></td>
				<td id='phone_8'><input name='phone_name' id='phone_id_8'></td>
				<td id='purpose_8'><input name='purpose_name' id='purpose_id_8'></td>
				<td id='usefor_8'><select name='usefor_name' id='usefor_id_8'><option value='教學'>教學</option><option value='其他'>其他</option></select></td>
				<td id='btn_8'><button id='btn_8_id' onclick='rent_submit(this.id)'>申請</button></td>
			</tr>";

		echo "</table>";

		$dbname="venue";
		$link=mysqli_connect("localhost","root","nckuchass123", $dbname) or die("無法開啟資料庫連結");
		mysqli_query($link, "SET NAMES 'utf8'");

		$sql1 = "SELECT * FROM rent WHERE date = '".$_GET["choosed_date_name"]."' AND orders = 1";
		if($result = mysqli_query($link, $sql1))
		{
			while($result2 = mysqli_fetch_assoc($result))
			{
				if($result2["time"] == "8:00~9:00")
				{
					echo "<script>
							document.getElementById('name_1').innerHTML = '".$result2["name"]."';
							document.getElementById('phone_1').innerHTML = '".$result2["phone"]."';
							document.getElementById('purpose_1').innerHTML = '".$result2["purpose"]."';
							document.getElementById('usefor_1').innerHTML = '".$result2["usefor"]."';
							document.getElementById('btn_1').innerHTML = '<button id=\'btn_1_id\' onclick=\'neg(1)\'>申請</button>';
						</script>";
				}
				else if($result2["time"] == "9:00~10:00")
				{
					echo "<script>
							document.getElementById('name_2').innerHTML = '".$result2["name"]."';
							document.getElementById('phone_2').innerHTML = '".$result2["phone"]."';
							document.getElementById('purpose_2').innerHTML = '".$result2["purpose"]."';
							document.getElementById('usefor_2').innerHTML = '".$result2["usefor"]."';
							document.getElementById('btn_2').innerHTML = '<button id=\'btn_2_id\' onclick=\'neg(2)\'>申請</button>';
						</script>";
				}
				else if($result2["time"] == "10:00~11:00")
				{
					echo "<script>
							document.getElementById('name_3').innerHTML = '".$result2["name"]."';
							document.getElementById('phone_3').innerHTML = '".$result2["phone"]."';
							document.getElementById('purpose_3').innerHTML = '".$result2["purpose"]."';
							document.getElementById('usefor_3').innerHTML = '".$result2["usefor"]."';
							document.getElementById('btn_3').innerHTML = '<button id=\'btn_3_id\' onclick=\'neg(3)\'>申請</button>';
						</script>";
				}
				else if($result2["time"] == "11:00~12:00")
				{
					echo "<script>
							document.getElementById('name_4').innerHTML = '".$result2["name"]."';
							document.getElementById('phone_4').innerHTML = '".$result2["phone"]."';
							document.getElementById('purpose_4').innerHTML = '".$result2["purpose"]."';
							document.getElementById('usefor_4').innerHTML = '".$result2["usefor"]."';
							document.getElementById('btn_4').innerHTML = '<button id=\'btn_4_id\' onclick=\'neg(4)\'>申請</button>';
						</script>";
				}
				else if($result2["time"] == "12:00~13:00")
				{
					echo "<script>
							document.getElementById('name_5').innerHTML = '".$result2["name"]."';
							document.getElementById('phone_5').innerHTML = '".$result2["phone"]."';
							document.getElementById('purpose_5').innerHTML = '".$result2["purpose"]."';
							document.getElementById('usefor_5').innerHTML = '".$result2["usefor"]."';
							document.getElementById('btn_5').innerHTML = '<button id=\'btn_5_id\' onclick=\'neg(5)\'>申請</button>';
						</script>";
				}
				else if($result2["time"] == "13:00~14:00")
				{
					echo "<script>
							document.getElementById('name_6').innerHTML = '".$result2["name"]."';
							document.getElementById('phone_6').innerHTML = '".$result2["phone"]."';
							document.getElementById('purpose_6').innerHTML = '".$result2["purpose"]."';
							document.getElementById('usefor_6').innerHTML = '".$result2["usefor"]."';
							document.getElementById('btn_6').innerHTML = '<button id=\'btn_6_id\' onclick=\'neg(6)'>申請</button>';
						</script>";
				}
				else if($result2["time"] == "14:00~15:00")
				{
					echo "<script>
							document.getElementById('name_7').innerHTML = '".$result2["name"]."';
							document.getElementById('phone_7').innerHTML = '".$result2["phone"]."';
							document.getElementById('purpose_7').innerHTML = '".$result2["purpose"]."';
							document.getElementById('usefor_7').innerHTML = '".$result2["usefor"]."';
							document.getElementById('btn_7').innerHTML = '<button id=\'btn_7_id\' onclick=\'neg(7)\'>申請</button>';
						</script>";
				}
				else if($result2["time"] == "15:00~16:00")
				{
					echo "<script>
							document.getElementById('name_8').innerHTML = '".$result2["name"]."';
							document.getElementById('phone_8').innerHTML = '".$result2["phone"]."';
							document.getElementById('purpose_8').innerHTML = '".$result2["purpose"]."';
							document.getElementById('usefor_8').innerHTML = '".$result2["usefor"]."';
							document.getElementById('btn_8').innerHTML = '<button id=\'btn_8_id\' onclick=\'neg(8)\'>申請</button>';
						</script>";
				}
			}
		}

	}
?>

	<form name = "rent_form" id="rent_form_id" method="POST" action="rent_add.php" class="hide">
		<input name="name_name" id="name_id" class="hide"/>
		<input name="phone_name" id="phone_id" class="hide"/>
		<input name="purpose_name" id="purpose_id" class="hide"/>
		<input name="usefor_name" id="usefor_id" class="hide"/>
		<input name="date_name" id="date_id" class="hide"/>
		<input name="time_name" id="time_id" class="hide"/>
	</form>

<script>
	function neg(id)
	{
		document.getElementById("name_"+id).innerHTML = "<input name='name_name' id='name_id_"+id+"'/>";
		document.getElementById("phone_"+id).innerHTML = "<input name='phone_name' id='phone_id_"+id+"'/>";
		document.getElementById("purpose_"+id).innerHTML = "<input name='purpose_name' id='purpose_id_"+id+"'/>";
		document.getElementById("usefor_"+id).innerHTML = "<select name='usefor_name' id='usefor_id_"+id+"'><option value='教學'>教學</option><option value='其他'>其他</option></select></td>";
		document.getElementById("btn_"+id).innerHTML = "<button id='btn_"+id+"_id' onclick='rent_submit(this.id)'>申請</button>";
	}
	function rent_submit(id)
	{
		document.getElementById("date_id").value = '<? echo $_GET["choosed_date_name"]; ?>';
		id_tmp = id.substring(4, 5);
		if(id_tmp == 1)
			document.getElementById("time_id").value = "8:00~9:00";
		else if(id_tmp == 2)
			document.getElementById("time_id").value = "9:00~10:00";
		else if(id_tmp == 3)
			document.getElementById("time_id").value = "10:00~11:00";
		else if(id_tmp == 4)
			document.getElementById("time_id").value = "11:00~12:00";
		else if(id_tmp == 5)
			document.getElementById("time_id").value = "12:00~13:00";
		else if(id_tmp == 6)
			document.getElementById("time_id").value = "13:00~14:00";
		else if(id_tmp == 7)
			document.getElementById("time_id").value = "14:00~15:00";
		else if(id_tmp == 8)
			document.getElementById("time_id").value = "15:00~16:00";

		document.getElementById("name_id").value = document.getElementById("name_id_"+id_tmp).value;
		document.getElementById("phone_id").value = document.getElementById("phone_id_"+id_tmp).value;
		document.getElementById("purpose_id").value = document.getElementById("purpose_id_"+id_tmp).value;
		document.getElementById("usefor_id").value = document.getElementById("usefor_id_"+id_tmp).value;

		document.rent_form.submit();
	}
</script>

</body>


<?
	unset($_GET["choosed_date_name"]);
?>
</html>