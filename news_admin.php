<html>
<head>
	<style>
		.hide{
			width: 0;
			height: 0;
			border: 0px solid black;
		}
		.float_window_hidden{
			z-index: -999;
			visibility: hidden;
		}
		.float_window_show{
			z-index: 999;
			visibility: visible;
		}
		.window_bg_hidden{
			z-index: -998;
			visibility: hidden;
		}
		.window_bg_show{
			z-index: 998;
			visibility: visible;
		}
		#edit_window_container{
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<button onclick="show_add()">新增公告</button>
	<table id="news_col" border="1">
		<tr><td>標題</td><td>日期</td><td colspan="2">操作</td></tr>
		<?
		$dbname="new_chass";
		$link=mysqli_connect("localhost","root","nckuchass123", $dbname) or die("無法開啟資料庫連結");
		mysqli_query($link, "SET NAMES 'utf8'");

		$sql = "SELECT * FROM news ORDER BY id DESC";
		if($result = mysqli_query($link, $sql))
		{
			while($result2 = mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<td><a href='".$result2["link"]."'>";
				echo $result2["title"];
				echo "</a></td>";
				echo "<td>";
				echo $result2["time"];
				echo "</td><td><button id='edit_btn_".$result2["id"]."' onclick='show_edit(this.id)'>編輯</button></td><td><button id='del_btn_".$result2["id"]."' onclick='del_news(this.id)'>刪除</button></td>";
				echo "</tr>";
			}
		}
		?>
	</table>

	<div id="add_window_container" class="float_window_hidden">
		<? include("add_news_window.php"); ?>
	</div>

	<form id="add_form" name="add_form" method="POST" action="add_news.php" target="hide_iframe" class="hide"></form>

	<div id="edit_window_container" class="float_window_hidden">
		<? include("edit_news_window.php"); ?>
	</div>

	<form id="edit_form" name="edit_form" method="POST" action="edit_news.php" target="hide_iframe" class="hide">
		<input id="edit_id_id" name="edit_id_name"  class="hide"/>
	</form>

	<form id="del_form" name="del_form" method="POST" action="del_news.php" target="hide_iframe" class="hide">
		<input id="del_id_id" name="del_id_name"  class="hide"/>
	</form>

	<iframe name="hide_iframe" class="hide"></iframe>

	<script type="text/javascript">

		function refresh()
		{
			setTimeout(function(){window.location.reload()}, 100);
		}

		function show_edit(id)
		{
			var idtmp = id.substring(9);
			console.log(idtmp);
			document.getElementById("edit_id_id").value = idtmp;
			document.getElementById("edit_window_container").classList.remove("float_window_hidden");
			document.getElementById("edit_window_container").classList.add("float_window_show");
		}
		function close_edit() {
			document.getElementById("edit_window_container").classList.add("float_window_hidden");
			document.getElementById("edit_window_container").classList.remove("float_window_show");
		}
		function show_add()
		{
			document.getElementById("add_window_container").classList.remove("float_window_hidden");
			document.getElementById("add_window_container").classList.add("float_window_show");
		}
		function close_add() {
			document.getElementById("add_window_container").classList.add("float_window_hidden");
			document.getElementById("add_window_container").classList.remove("float_window_show");
		}

		function del_news(id)
		{
			var idtmp = id.substring(8);
			console.log(idtmp);
			document.getElementById("del_id_id").value = idtmp;
			document.del_form.submit();
			refresh();
		}
	</script>

</body>
</html>