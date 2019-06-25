<html>
<head>
	<style type="text/css">
		@import url("chass.css");
		#outer_frame{
			//background-color: #b5b5b5;
			//background: linear-gradient(160deg, #c1a86c 30%, rgba(0,0,0,0) 30%), linear-gradient(155deg, #876b29 35%, rgba(0,0,0,0) 35%), linear-gradient(150deg, #634c15 40%, rgba(0,0,0,0) 40%), linear-gradient(15deg, #7092b5 20%, rgba(0,0,0,0) 20%), linear-gradient(19deg, #4b6887 25%, rgba(0,0,0,0) 25%), linear-gradient(23deg, #304963 30%, rgba(0,0,0,0) 30%), linear-gradient(-80deg, #c4906a 20%, rgba(0,0,0,0) 20%), linear-gradient(-96deg, #7d3a11 25%, rgba(0,0,0,0) 25%);
			background: linear-gradient(100deg, #7092b5 70%, #4b6887 70%);
			width: 70%;
			height: 40rem;
			position: absolute;
			left: 25%;
			text-align: center;
			margin-top: 1rem;
		}
		#content_title{
			font-size: 2rem;
			color: white;
			position: relative;
			top:2rem;
			font-weight: bold;
			text-align: center;
		}
		#white_frame{
			background-color: rgba(255,255,255,0.7);
			width: 80%;
			height: 29rem;
			margin: auto;
			position: relative;
			top: 3rem;
			font-size: 1.2rem;
			padding: 2rem;
			text-align: left;
			color: black;
			font-weight: bold;
		}
		.sidebar{
			display: block;
			font-size: 1.2rem;
			text-decoration: none;
			line-height: 2rem;
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
			&nbsp中心簡介
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
			<div id="outer_frame">
				<div id="content_title">中心簡介</div>
				<div id="white_frame">
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp本校為提升人文社會科學領域之研究水準及學術能量，促進人文宇科技均衡發展，特依本校組織規程第八條，設置「人文社會科學中心」。
					<br><br>
					本中心使命如下:
					<br><br>
					<span style="font-weight: bold;color: #436884">1</span> 整合國內外及本校相關院所之研究資源與能量。<br>
					<span style="font-weight: bold;color: #938e54">2</span> 強化具有區域特性之研究主題，發展台灣主體性與全球化之學術研究。<br>
					<span style="font-weight: bold;color: #436884">3</span> 建立活躍的研究社群，培育人文社會青年學者。<br>
					<span style="font-weight: bold;color: #938e54">4</span> 其他與人文社會研究相關工作之推動。
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
	</script>

</body>
</html>