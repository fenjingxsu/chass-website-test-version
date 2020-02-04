<html>
<head>
	<title>成功大學人文社會科學中心</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<style type="text/css">
		@import url("chass.css");
		.outer_frame{
			background-color: #c4c4c4;
			//background: linear-gradient(160deg, #c1a86c 30%, rgba(0,0,0,0) 30%), linear-gradient(155deg, #876b29 35%, rgba(0,0,0,0) 35%), linear-gradient(150deg, #634c15 40%, rgba(0,0,0,0) 40%), linear-gradient(15deg, #7092b5 20%, rgba(0,0,0,0) 20%), linear-gradient(19deg, #4b6887 25%, rgba(0,0,0,0) 25%), linear-gradient(23deg, #304963 30%, rgba(0,0,0,0) 30%), linear-gradient(-80deg, #c4906a 20%, rgba(0,0,0,0) 20%), linear-gradient(-96deg, #7d3a11 25%, rgba(0,0,0,0) 25%);
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
			&nbsp中心成員
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
			<div class="outer_frame">
				<div class="content_title">中心主任</div>
				<div class="inner_frame">
					<div style=" float: left; margin-right: 1rem;"><img src="img/member/01.jpg" style="width:4rem; height:6rem;"/><br></div>
					<div style="width: 80%;float: right;">
					<a href="http://lin.vp.ncku.edu.tw/bin/home.php">林從一</a>
					<br><br>
					美國愛荷華大學&nbsp哲學系&nbsp博士
					<br>
					知識論、語言哲學、心靈哲學、中國哲學史—先秦哲學、教育制度、形上學
					<br>
					<a href="mailto:em50075@email.ncku.edu.tw">em50075@email.ncku.edu.tw</a>
					</div>
				</div>
			</div>
			<hr style="display: block;float: right; width: 35rem; margin-right: 2rem;margin-top: 1rem">
			<div class="outer_frame" style="height: 19.5rem">
				<div class="content_title">副主任及行政企劃組組長</div>
				<div class="inner_frame" style="height: 11rem">
					<div style=" float: left; margin-right: 1rem;"><img src="https://researchoutput.ncku.edu.tw/files-asset/16415760/8902004.jpg" style="width:4rem; height:6rem;"/><br></div>
					<div style="width: 80%;float: right;">
					<a href="https://researchoutput.ncku.edu.tw/zh/persons/yuk-ying-tung">董旭英</a>
					<br><br>
					美國密西西比州立大學 社會學 博士
					<br>
					行為科學研究法/社會調查、犯罪學/偏差行為、青少年偏差行為、藥物濫用、教育社會學、家庭暴力、計量研究/行為統計、服務學習
					<br>
					<a href="mailto:yytung@mail.ncku.edu.tw">yytung@mail.ncku.edu.tw</a>
					</div>
				</div>
			</div>
			<hr style="display: block;float: right; width: 35rem; margin-right: 2rem;margin-top: 1rem">
			<div class="outer_frame" style="height: 14.5rem">
				<div class="content_title">研究教育組組長</div>
				<div class="inner_frame" style="height: 6rem">
					<div style=" float: left; margin-right: 1rem;"><img src="img/member/02.jpg" style="width:4rem; height:6rem;"/><br></div>
					<div style="width: 80%;float: right;">
					<a href="http://www.his.ncku.edu.tw/chinese/index.php?option=com_content&amp;view=article&amp;id=84&amp;Itemid=74">謝仕淵</a>
					<br><br>
					臺灣師範大學歷史研究所 博士
					<br>
					運動與全球化的歷史、臺灣物質文化史
					<br>
					<a href="mailto:10802008@gs.ncku.edu.tw">10802008@gs.ncku.edu.tw</a>
					</div>
				</div>
			</div>
			<div class="outer_frame" style="height: 15.5rem">
				<div class="content_title">社會實踐組組長</div>
				<div class="inner_frame" style="height: 7rem">
					<div style=" float: left; margin-right: 1rem;"><img src="img/member/03.jpg" style="width:4rem; height:6rem;"/><br></div>
					<div style="width: 80%;float: right;">
					<a href="http://www.arch.ncku.edu.tw/faculty/%E9%99%B3%E4%B8%96%E6%98%8E-%E5%89%AF%E6%95%99%E6%8E%88">陳世明</a>
					<br><br>
					日本京都大學工學 博士
					<br>
					生活環境計劃、歷史性環境經營、參與試規劃、社區營造
					<br>
					<a href="mailto:chensm@mail.ncku.edu.tw">chensm@mail.ncku.edu.tw&nbsp;&nbsp;</a>
					</div>
				</div>
			</div>
			<hr style="display: block;float: right; width: 35rem; margin-right: 2rem;margin-top: 1rem">
			<div class="outer_frame" style="height: 15.5rem">
				<div class="content_title">行政助理</div>
				<div class="inner_frame" style="height: 7rem">
					<div style=" float: left; margin-right: 1rem;width:4rem; height:6rem;"><br></div>
					<div style="width: 80%;float: right;">
					李旃滌
					<br><br>
					中心行政業務
					<br>
					(06)2757575#56055
					<br>
					<a href="mailto:z9711046@email.ncku.edu.tw">z9711046@email.ncku.edu.tw</a>
					</div>
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
		document.getElementById("main_content").style.height = document.getElementById("main_content").offsetHeight*4;
	</script>
	<script type="text/javascript" src="chass.js"></script>

</body>
</html>