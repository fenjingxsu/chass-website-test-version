<html>
<head>
	<title>成功大學人文社會科學中心</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<style type="text/css">
		@import url("chass.css");
		#outer_frame{
			background-color: #c4c4c4;
			//background: linear-gradient(160deg, #c1a86c 30%, rgba(0,0,0,0) 30%), linear-gradient(155deg, #876b29 35%, rgba(0,0,0,0) 35%), linear-gradient(150deg, #634c15 40%, rgba(0,0,0,0) 40%), linear-gradient(15deg, #7092b5 20%, rgba(0,0,0,0) 20%), linear-gradient(19deg, #4b6887 25%, rgba(0,0,0,0) 25%), linear-gradient(23deg, #304963 30%, rgba(0,0,0,0) 30%), linear-gradient(-80deg, #c4906a 20%, rgba(0,0,0,0) 20%), linear-gradient(-96deg, #7d3a11 25%, rgba(0,0,0,0) 25%);
			//background: linear-gradient(100deg, #7092b5 70%, #4b6887 70%);
			width: 35rem;
			height: 50rem;
			float: right;
			margin-top: 1rem;
			margin-right: 2rem;
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
			height: 39rem;
			margin: auto;
			position: relative;
			top: 3rem;
			font-size: 1.2rem;
			padding: 2rem;
			text-align: left;
			color: black;
			font-weight: bold;
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
			&nbsp組織架構
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
				<div style="width: 2rem;height: 3.5rem;background-color: #fc2803;float: left;margin-right: 1rem"></div>
				<div style="width: 2rem;height: 3.5rem;background-color: #fc6b03;float: left;margin-right: 1rem"></div>
				<div style="width: 2rem;height: 3.5rem;background-color: #fc9803;float: left;margin-right: 1rem"></div>
				<div style="width: 2rem;height: 3.5rem;background-color: #fc2803;float: right;margin-left: 1rem"></div>
				<div style="width: 2rem;height: 3.5rem;background-color: #fc6b03;float: right;margin-left: 1rem"></div>
				<div style="width: 2rem;height: 3.5rem;background-color: #fc9803;float: right;margin-left: 1rem"></div>
				<div id="content_title">組織架構</div>
				<div id="white_frame">
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp關於本中心組織人力架構: 依本校「人文社會科學中心設置辦法」(附件一)置中心主任一人，綜理各項業務，由林從一教授擔任，另為有效執行及推動任務，下設行政企劃組，研究教育組和社會實踐組，各組置組長一人，以督導各項業務之執行，由中心主任聘請助理教授以上教學人員或同級之研究人員兼任之。<br/><br/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp目前教育所董旭英教授擔任行政企劃組組長，建築系陳世明副教授擔任社會實踐組組長，歷史系謝仕淵富教授擔任研究教育組組長。<br/><br/>
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp在行政人力方面，目前配置了1位碩士級專任助理，4位工讀生，以協助本中心行政業務。此外，本中心有1位助理研究員，也延攬了5位博士後研究員。<br><br>
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp以下為本中心組織架構圖:
					<br><br>
					<img style="width: 100%" src="img/intro/framework_graph.jpg" />
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
		document.getElementById("main_content").style.height = document.getElementById("main_content").offsetHeight+document.getElementById("outer_frame").offsetHeight;
	</script>
	<script type="text/javascript" src="chass.js"></script>

</body>
</html>