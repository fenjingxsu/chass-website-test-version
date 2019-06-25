<html>
<head>
	<style type="text/css">
		#cal_table td{
			text-align: center;
			width: 14%;
			height: 14%;
			border: solid 0.5px #969696;
			font-size: 1rem;
		}
		.hide{
			width: 0;
			height: 0;
			border: 0px none black;
		}
		.change_month_arrow{
			cursor: pointer;
		}
		#day_window_iframe_id{
			width: 100%;
			height: 50%;
			border: 0px none black;
		}
		#cal_table_container{
			width: 80%;
			margin: 0 auto;
			height: 30rem;
		}
		#month_container{
			height: 10%;
		}
		#cal_table{
			width: 100%;
			height: 90%;
			//border-spacing: 0;
			border: none 0px black;
			border-collapse: collapse;
		}
		#cal_table tbody{
			border: none 0px black;	
		}
		.today{
			border-radius: 50%;
			background-color: #778eaa;
			padding: 0.5rem;
		}
		#day_window_bg{
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0, 0, 0, 0.5);
			visibility: hidden;
			z-index: -999;
		}
		#day_window_container{
			visibility: hidden;
			z-index: -998;
			background-color: white;
			width: 30rem;
			height: 50rem;
			position: fixed;
		}
	</style>
</head>
<body>
	<div id="cal_table_container">
		<div id="month_container">
			<span id="pre_month_arrow" onclick="pre_month()" class="change_month_arrow"><</span>
			<span id="month_text"></span>
			<span id="next_month_arrow" onclick="next_month()" class="change_month_arrow">></span>
		</div>
		<table id="cal_table" border = "1">
			<tr><td>SUN</td><td>MON</td><td>TUE</td><td>WED</td><td>THU</td><td>FRI</td><td>SAT</td></tr>
			<?
				echo "<tr>";
				for($i = 0; $i < 42; $i++)
				{
					echo "<td id='cal_".$i."' onclick='show_day_window(this.id)'></td>";
					if($i % 7 == 6) echo "</tr>";
				}
				//echo "<tr>";
			?>
		</table>
	</div>

	<div id="day_window_container" name="day_window_container_name">
		<iframe src="day_window.php" name="day_window_iframe" id="day_window_iframe_id"></iframe>
	</div>

	<div id="day_window_bg" onclick="hide_day_window()"></div>

	<form name="choosed_date_form" method="GET" class="hide" action="day_window.php" target="day_window_iframe">
		<input type="text" name="choosed_date_name" id="choosed_date_id" class="hide" />
	</form>

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
				document.getElementById('cal_'+i).style.pointerEvents = 'none';
				document.getElementById('cal_'+i).style.cursor = "default";
				if(i  >= month_head && date_tmp < date_MAX)
				{
					document.getElementById("cal_"+(month_head+date_tmp)).innerHTML = date_tmp+1;
					document.getElementById("cal_"+(month_head+date_tmp)).style.pointerEvents = 'auto';
					document.getElementById("cal_"+(month_head+date_tmp)).style.cursor = "pointer";
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
					document.getElementById("cal_"+i).style.border="none";
				}
			}
			else if(check_empty_btm == 0)
			{
				for(i = 35; i < 42	; i++)
				{
					document.getElementById("cal_"+i).style.border="none";
				}
			}
			else
			{
				for(i = 0; i < 42	; i++)
				{
					document.getElementById("cal_"+i).style.border="solid 0.5px #969696";
				}
			}

			//檢查有沒有包含今天
			var today = new Date();
			var today_month = today.getMonth()+1;
			var today_date = today.getDate();
			var today_year = today.getFullYear();
			for(i = 0; i < 42; i++)
			{
				if(document.getElementById("cal_"+i).innerHTML == today_date && month_tmp == today_month && today_year == year_tmp)
				{
					document.getElementById("cal_"+i).innerHTML = "<span class='today'>"+i+"</span>";
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
		
		generate_table();

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
		function show_day_window(id)
		{
			document.getElementById("day_window_container").style.visibility = "visible";
			document.getElementById("day_window_container").style.zIndex = "999";
			document.getElementById("day_window_bg").style.visibility = "visible";
			document.getElementById("day_window_bg").style.zIndex = "998";
			var pos_tmp = document.getElementById(id).getBoundingClientRect();
			document.getElementById("day_window_container").style.left = pos_tmp.right;
			document.getElementById("day_window_container").style.top = pos_tmp.top;
			var date_string = Number(id.substring(4))-month_head+1;
			document.getElementById("choosed_date_id").value = year_tmp+"."+month_tmp+"."+date_string;
			console.log(year_tmp+"."+month_tmp+"."+date_string);
			document.choosed_date_form.submit();
		}
		function hide_day_window()
		{
			document.getElementById("day_window_container").style.visibility = "hidden";
			document.getElementById("day_window_container").style.zIndex = "-999";
			document.getElementById("day_window_bg").style.visibility = "hidden";
			document.getElementById("day_window_bg").style.zIndex = "-998";
		}
	</script>

</body>
</html>