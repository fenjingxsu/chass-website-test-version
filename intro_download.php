<html>
<head>
	<title>成功大學人文社會科學中心</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<style type="text/css">
		@import url("chass.css");
		.outer_frame{
			background-color: #c4c4c4;
			//background: linear-gradient(100deg, #7092b5 70%, #4b6887 70%);
			width: 35rem;
			height: 16.5rem;
			float: right;
			margin-top: 1rem;
			margin-right: 2rem;
		}
		.content_title{
			font-size: 1.5rem;
			color: white;
			line-height: 3rem;
			font-weight: bold;
			text-align: left;
			width: 80%;
			margin: auto;
		}
		.inner_frame{
			background-color: rgba(255,255,255,0.7);
			width: 80%;
			height: 8rem;
			margin: auto;
			position: relative;
			top: 0rem;
			font-size: 1.2rem;
			padding: 2rem;
			text-align: left;
			color: black;
			font-weight: bold;
		}
		.inner_frame a{

		}
		#intro_sidebar{
			width: 20 %;
			float: left;
		}
	</style>
</head>
<body onload="load_pic_bar()">
	<div id='main_content'>
		<div id="top_bar">
			<a href="https://web.ncku.edu.tw/index.php">成大首頁</a>&nbsp
			<a>English</a>&nbsp
		</div>
		<div id="title">
		</div>
		<div id="btn_bar">
			<?
			$dbname="new_chass";
			$link=mysqli_connect("localhost","root","nckuchass123", $dbname) or die("無法開啟資料庫連結");
			mysqli_query($link, "SET NAMES 'utf8'");

			$sql = "SELECT name, link FROM buttons ORDER BY id";
			if($result = mysqli_query($link, $sql))
			{
				while($result2 = mysqli_fetch_assoc($result))
				{
					echo "<a href='".$result2["link"]."'>";
						echo $result2["name"];
					echo "</a>";
				}
			}
			?>
		</div>
		<div id="pic_bar">
		</div>
		<div id="small_title">
			&nbsp表格下載
		</div>
		<div id="small_title_underline"></div>
		<div id="content">
			<div id="intro_sidebar">
				<?
				$dbname="new_chass";
				$link=mysqli_connect("localhost","root","nckuchass123", $dbname) or die("無法開啟資料庫連結");
				mysqli_query($link, "SET NAMES 'utf8'");

				$sql = "SELECT name, link FROM intro_btns ORDER BY id";
				if($result = mysqli_query($link, $sql))
				{
					while($result2 = mysqli_fetch_assoc($result))
					{
						echo "<a class='sidebar' href='".$result2["link"]."'>";
							echo $result2["name"];
						echo "</a>";
					}
				}
				?>
			</div>
			<div class="outer_frame" style="height: 11.5rem">
				<div class="content_title">公開授權同意書</div>
				<div class="inner_frame" style="height: 3rem">
					<a href="doc/人社心中公開授權同意書-新.pdf">人社心中公開授權同意書-中文版</a>
					<br>
					<a href="doc/人社心中公開授權同意書-新-eng.pdf">人社心中公開授權同意書-英文版</a>
				</div>
			</div>
			<hr style="display: block;float: right; width: 35rem; margin-right: 2rem;margin-top: 1rem">
			<div class="outer_frame" style="height: 11.5rem">
				<div class="content_title">活動公告相關</div>
				<div class="inner_frame" style="height: 2rem">
					<a href="img/logo.png">人文社會科學中心LOGO</a>
				</div>
			</div>
			
		</div>
		
	</div>
	<div id="bottom_bar">
	</div>
	<script type="text/javascript">
		function load_pic_bar()
		{
			var pic_num = Math.floor((Math.random() * 10));
			document.getElementById("pic_bar").style.backgroundImage = "url('pic_bar/"+pic_num+".png')";
		}
		document.getElementById("main_content").style.height = document.getElementById("main_content").offsetHeight*2;
	</script>
	<script type="text/javascript" src="chass.js"></script>

</body>
</html>