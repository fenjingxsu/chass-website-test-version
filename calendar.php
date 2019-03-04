<html>
<head>
</head>
<body onload="generate_table()">
	<div id="cal_table_container">
		<div id="month_container">
			<span id="pre_month_arrow" onclick="pre_month()"><</span>
			<span id="month_text"></span>
			<span id="next_month_arrow" onclick="next_month()">></span>
		</div>
		<table id="cal_table" border = "1">
			<tr><td>SUN</td><td>MON</td><td>TUE</td><td>WED</td><td>THU</td><td>FRI</td><td>SAT</td></tr>
			<?
				echo "<tr>";
				for($i = 0; $i < 42; $i++)
				{
					echo "<td id='cal_".$i."'></td>";
					if($i % 7 == 6) echo "</tr><tr>";
				}
				echo "<tr>";
			?>
		</table>
	</div>

	<script>
		var month_head;
		var month_tmp; //js month是0-11所以帶入要-1
		var year_tmp;
		function new_cal()
		{
			var date_MAX;
			if(month_tmp == 1 || month_tmp == 3 || month_tmp == 5 || month_tmp == 7 || month_tmp == 8 ||  month_tmp == 10 ||  month_tmp == 12)
				date_MAX = 31;
			else if(month_tmp == 4 ||  month_tmp == 6 || month_tmp == 9 ||  month_tmp == 11)
				date_MAX = 30;
			else if(month_tmp == 2)
			{
				if(year_tmp % 4 == 0)
					date_MAX = 29;
				else
					date_MAX = 28;
			}
			var date_tmp = 0;
			for(i = 0; i < 42; i++)
			{
				document.getElementById("cal_"+i).innerHTML = ""; //清空所有格子
				if(i  >= month_head && date_tmp < date_MAX)
				{
					document.getElementById("cal_"+(month_head+date_tmp)).innerHTML = date_tmp+1;
					date_tmp++;
				}
			}

			//檢查一整行空著 清出空間
			var check_empty_top = 0;
			var check_empty_btm = 0;
			for(i = 0; i < 7; i++)
			{
				if(document.getElementById("cal_"+i).innerHTML != "")
					check_empty_top = 1;
				var p = i+35;
				if(document.getElementById("cal_"+p).innerHTML != "")
					check_empty_btm = 1;
			}
			if(check_empty_top == 0)
			{
				for(i = 0; i < 7; i++)
				{
					document.getElementById("cal_"+i).style.height = 0;
					document.getElementById("cal_"+i).style.padding = 0;
				}
			}
			if(check_empty_btm == 0)
			{
				for(i = 35; i < 42	; i++)
				{
					document.getElementById("cal_"+i).style.height = 0;
					document.getElementById("cal_"+i).style.padding = 0;
				}
			}

		}
		function generate_table()
		{
			var i;
			var d = new Date();
			d.setDate(1);
			month_head = d.getDay();
			month_tmp = d.getMonth()+1;
			document.getElementById("month_text").innerHTML = month_tmp;
			year_tmp = d.getFullYear();

			new_cal();
		}
		function pre_month()
		{
			var i;
			var d = new Date();
			d.setDate(1);
			
			if(month_tmp == 1)
			{
				year_tmp--;
				d.setFullYear(year_tmp);
				month_tmp = 12;
			}
			else
				month_tmp--;
			document.getElementById("month_text").innerHTML = month_tmp;
			d.setMonth(month_tmp-1);
			month_head = d.getDay();

			new_cal();
		}
		function next_month()
		{
			var i;
			var d = new Date();
			d.setDate(1);
			
			if(month_tmp == 12)
			{
				year_tmp++;
				d.setFullYear(year_tmp);
				month_tmp = 1;
			}
			else
				month_tmp++;
			document.getElementById("month_text").innerHTML = month_tmp;
			d.setMonth(month_tmp-1);
			month_head = d.getDay();

			new_cal();
		}
	</script>

</body>
</html>