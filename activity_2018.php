<html>
<head>
	<title>成功大學人文社會科學中心</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<style type="text/css">
		@import url("chass.css");
		.outer_frame{
			//background-color: #b5b5b5;
			//background: linear-gradient(160deg, #c1a86c 30%, rgba(0,0,0,0) 30%), linear-gradient(155deg, #876b29 35%, rgba(0,0,0,0) 35%), linear-gradient(150deg, #634c15 40%, rgba(0,0,0,0) 40%), linear-gradient(15deg, #7092b5 20%, rgba(0,0,0,0) 20%), linear-gradient(19deg, #4b6887 25%, rgba(0,0,0,0) 25%), linear-gradient(23deg, #304963 30%, rgba(0,0,0,0) 30%), linear-gradient(-80deg, #c4906a 20%, rgba(0,0,0,0) 20%), linear-gradient(-96deg, #7d3a11 25%, rgba(0,0,0,0) 25%);
			background: linear-gradient(100deg, #c9c9c9 70%, #c9c9c9 70%);
			width: 35rem;
			height: 16.5rem;
			float: right;
			margin-top: 1rem;
			margin-right: 2rem;
			position: relative;
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
			width: 50%;
			height: 8rem;
			margin-right: 2rem;
			float: right;
			position: relative;
			top: 0rem;
			right: 0rem;
			font-size: 1.2rem;
			padding: 2rem;
			text-align: left;
			color: black;
			font-weight: bold;
			z-index: 1;
		}
		.inner_frame a{

		}

		#activity_sidebar{
			width: 20 %;
			float: left;
		}
		.poster_img{
			width: 8rem; 
			height: 12rem; 
			position: absolute;
			top: 4rem;
			left: 2rem;
			z-index: 999;
			float: left;
			transition: all 0.5s;
		}
		.poster_img:hover{
			width: 12rem;
			height: 18rem;
			transform: translate(-17%, -17%);
			cursor: pointer;
		}
		.poster_img_big{
			transition: width 0.5s, height 0.5s;
			opacity: 0;
			width: 0;
			transform: translate(-50%, -30%);
		}
		#poster_bg{
			width: 100%;
			height: 100%;
			display: none;
			z-index: 998;
			position: fixed;
			top: 0;
			left: 0;
		}
		/*#poster1:hover {
			width: 40rem;
			height: 60rem;
			position: relative;
			top: 0;
			left: 30rem;
		}*/
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
			&nbsp學術活動—2018
		</div>
		<div id="small_title_underline"></div>
		<div id="content">
			<div id="activity_sidebar">
				<?
				$dbname="new_chass";
				$link=mysqli_connect("localhost","root","nckuchass123", $dbname) or die("無法開啟資料庫連結");
				mysqli_query($link, "SET NAMES 'utf8'");

				$sql = "SELECT name, link FROM activity_years ORDER BY id DESC";
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
			<div class="outer_frame" style="height: 25.5rem">
				<div class="content_title">11月&nbsp「金門學」國際學術研討會</div>
				<img class="poster_img" id="poster1" src="img/activity/2018金門學海報版2-定稿（網站版）.jpg" onclick="show_poster(this.id)"></img>
				<div class="inner_frame" style="height: 17rem">
					主辦單位:&nbsp金門縣文化局<br><br>
					承辦單位:&nbsp國立金門大學人文社會學院<br><br>
					合辦單位:&nbsp國立成功大學中文系、福建師範大學文學院<br><br>
					協辦單位:&nbsp國立成功大學人文社會科學中心、國立金門大學通識教育中心、金門大學圖書館、萬卷樓圖書股份有限公司<br><br>
					日期:&nbsp2018.11.16、2018.11.17
				</div>
			</div>
			<img class="poster_img_big" id="poster1_big" src="img/activity/2018金門學海報版2-定稿（網站版）.jpg"></img>
			
 
			
		</div>
		
	</div>
	<div id="bottom_bar">
	</div>
	<div id="poster_bg" onclick="hide_poster()"></div>
	<script type="text/javascript">
		var poster_tmp;
		function load_pic_bar()
		{
			var pic_num = Math.floor((Math.random() * 10));
			document.getElementById("pic_bar").style.backgroundImage = "url('pic_bar/"+pic_num+".png')";
		}
		document.getElementById("main_content").style.height = document.getElementById("main_content").offsetHeight*2;

		function show_poster(id)
		{
			poster_tmp = id;
			document.getElementById(id/*+"_big"*/).style.width = "40rem";
			document.getElementById(id/*+"_big"*/).style.height = "60rem";
			document.getElementById(id/*+"_big*/).style.transform = "translate(-40%, -40%)";
			//document.getElementById(id+"_big").style.opacity = "100";
			document.getElementById("poster_bg").style.display = "block";
		}
		function hover_poster(id)
		{
			document.getElementById(id).style.width = "12rem";
			document.getElementById(id).style.height = "18rem";
			document.getElementById(id).style.transform = "";
		}
		function hide_poster()
		{
			document.getElementById(poster_tmp).style.width = "8rem";
			document.getElementById(poster_tmp).style.height = "12rem";
			document.getElementById(poster_tmp).style.transform = "translate(0, 0)";
			document.getElementById("poster_bg").style.display = "none";
			document.getElementById(poster_tmp).classList.remove("poster_img:hover");
			document.getElementById(poster_tmp).classList.add("poster_img:hover");
		}
	</script>
	<script type="text/javascript" src="chass.js"></script>

</body>
</html>