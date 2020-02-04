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
			height: 40rem;
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
			&nbsp中心現況與特色
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
				<div id="content_title">中心現況與特色</div>
				<div id="white_frame">
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp本中心主要任務為：整合本校相關院系所及國內外之研究資源與能量；強化具有區域特性之研究主題，發展台灣主體性與全球化相關之議題；以及建立活躍的研究社群，並培育人文社會科學青年學者。這些任務旨在落實本中心於97年間向教育部提出補助申請書時所揭櫫的四大中心理念：(1)豐富本校人文社會科學跨國跨領域整合、並提升南台灣學術發展實力；(2)透過科際整合，開拓人文社會與科技之對話空間；(3)以時間為經、地方為緯，豐富人文與社會研究的內涵；(4)推動相輔相成之研究計畫，達成學術整合之綜效。
					<br><br>
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp本中心的發展策略是：致力於協助校內表現傑出、具領導整合能力的同仁組成團隊，向本中心申請整合型計畫，而且這些計畫必須能根據本中心的研究主軸，善用本校研究資源、扣緊具南台灣特色，而且又有國際合作的空間。本中心的發展目標就在於落實這個策略、讓本校跨領域的研究能量更為活絡，也藉此讓本中心獲得校內外學者普遍的認同與支持。在此一發展策略下，本中心致力於推動兩大研究主軸：(1)「跨國跨領域的文史研究」和(2)「高齡化社會健康治理」。以及本中心102至108負責執行科技部「人文創新與社會實踐」計畫，因此在以上兩大研究主軸之外，亦將社會實踐型的研究與教學之推動納入中心特色。
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