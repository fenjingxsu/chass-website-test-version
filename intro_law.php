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
			&nbsp相關法規
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
			<div class="outer_frame" style="height: 22.5rem">
				<div class="content_title">中心法規</div>
				<div class="inner_frame" style="height: 14rem">
					<a href="doc/成大人社中心設置辦法1060329.pdf">中心設置辦法</a>
					<br>
					<a href="doc/審議委員會設置要點990408.doc">審議委員會設置要點</a>
					<br>
					<a href="doc/計畫審查要點.doc">計畫審查要點</a>
					<br>
					<a href="doc/研究計畫審查申覆作業要點991103.doc">研究計畫審查申覆作業要點</a>
					<br>
					<a href="doc/申覆申請書.doc">申覆申請書</a>
					<br>
					<a href="doc/688人社中心諮議委員設置要點990428.doc">人社中心諮議委員設置要點</a>
					<br>
					<a href="doc/人社中心教評會設置辦法1021225_定.pdf">國立成功大學人文社會科學中心教師及研究人員評審委員會設置辦法</a>
					<br>
					<a href="doc/中心博士後研究人員考核要點草案1010112.doc">中心博士後研究人員考核要點草案</a>
					<br>
					<a href="doc/中心研究人員考核要點1021018.pdf">人社中心研究人員考核要點</a>
					<br>
					<a href="doc/1060522專題中心設立及考核要點(確定版).pdf">專題中心設立及考核要點</a>
				</div>
			</div>
			<hr style="display: block;float: right; width: 35rem; margin-right: 2rem;margin-top: 1rem">
			<div class="outer_frame" style="height: 18.5rem">
				<div class="content_title">人類研究倫理治理架構法規</div>
				<div class="inner_frame" style="height: 10rem">
					<a href="doc/國立成功大學人類研究倫理治理架構暫行辦法-1030924行政會議通過.pdf">國立成功大學人類研究倫理治理架構暫行辦法</a>
					<br>
					<a href="doc/人類研究倫理諮議委員會設置要點-1010509行政會議通過.doc">人類研究倫理諮議委員會設置要點</a>
					<br>
					<a href="doc/國立成功大學人類研究倫理監督委員會設置要點.pdf">國立成功大學人類研究倫理監督委員會設置要點</a>
					<br>
					<a href="doc/國立成功大學人類研究倫理審查委員會設置與審議要點-1041118行政會議通過.pdf">國立成功大學人類研究倫理審查委員會設置與審議要點</a>
					<br>
					<a href="doc/成功大學人文社會科學中心人類研究倫理治理架構執行小組作業要點1021121.pdf">成功大學人文社會科學中心人類研究倫理治理架構執行小組作業要點</a>
					<br>
					<a href="doc/國立成功大學人類研究倫理審查辦法.pdf">國立成功大學人類研究倫理審查辦法</a>
					<br>
					<a href="doc/1050318人類研究倫理治理架構行政辦公室設備管理要點.pdf">人類研究倫理治理架構行政辦公室設備管理要點</a>
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
		document.getElementById("main_content").style.height = document.getElementById("main_content").offsetHeight*2.5;
	</script>
	<script type="text/javascript" src="chass.js"></script>

</body>
</html>