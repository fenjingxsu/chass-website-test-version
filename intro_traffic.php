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
			&nbsp交通資訊
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
			<div class="outer_frame" style="height: 15.5rem">
				<div class="content_title">自行開車—南下</div>
				<div class="inner_frame" style="height: 7rem">
					沿國道一號南下 → 下永康交流道右轉 → 沿中正北路、中正南路(南向)往臺南市區直行 → 中華路左轉 → 沿中華東路前進→ 光復校區→雲平大樓東棟北側五樓。 【自國道三號南下者，轉國道8號（西向），可接國道一號（南向）】
				</div>
			</div>
			<div class="outer_frame" style="height: 14.5rem">
				<div class="content_title">自行開車—北上</div>
				<div class="inner_frame" style="height: 6rem">
					沿國道一號北上 → 下仁德交流道左轉 → 沿東門路(西向)往臺南市區直走 → 遇林森路或長榮路右轉(北向)→ 光復校區→雲平大樓東棟北側五樓。 【自國道三號北上者，轉86號快速道路（西向），可接國道一號（北向）】
				</div>
			</div>
			<hr style="display: block;float: right; width: 35rem; margin-right: 2rem;margin-top: 1rem">
			<div class="outer_frame" style="height: 10.5rem">
				<div class="content_title">搭乘火車</div>
				<div class="inner_frame" style="height: 2rem">
					於臺南站下車後，自後站出口（大學路），大學路左側即為本校光復校區。
				</div>
			</div>
			<div class="outer_frame" style="height: 12.5rem">
				<div class="content_title">搭乘高鐵</div>
				<div class="inner_frame" style="height: 4rem">
					至臺南站，再搭乘接駁巴士(往臺南公園)，搭乘約 40 分鐘，於成大光復校區站(小東路)下車, 下車的地點即為光復校區
				</div>
			</div>
			<hr style="display: block;float: right; width: 35rem; margin-right: 2rem;margin-top: 1rem">
			<img src="img/intro/map01.png" style="float: right; width: 35rem; margin-top: 1rem; margin-right: 2rem;" />
			<hr style="display: block;float: right; width: 35rem; margin-right: 2rem;margin-top: 1rem">
			<img src="img/intro/map02.jpg" style="float: right; width: 35rem; margin-top: 1rem; margin-right: 2rem;" />
			
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
		document.getElementById("main_content").style.height = document.getElementById("main_content").offsetHeight*5.5;
	</script>
	<script type="text/javascript" src="chass.js"></script>

</body>
</html>