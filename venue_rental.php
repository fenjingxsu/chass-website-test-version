<html>
<head>
	<style type="text/css">
	@import url(https://fonts.googleapis.com/earlyaccess/cwtexfangsong.css);
	body{
		background-image: url(img/backgroundlong.png);
		background-repeat: repeat-x;
		margin: 0;
		font-family: 'cwTeXFangSong', serif;
	}
	#main_content{
		width: 44%;
		background-color: white;
		position: absolute;
		left: 28%;
	}
	#top_bar{
		text-align: right;
		//box-shadow: 0px 1px 1px black;
	}
	#top_bar a{
		text-decoration: none;
	}
	#title{
		background-image: url(img/title.png);
		background-repeat: no-repeat;
		background-position: center;
		background-size: 100%;
		height: 10rem;
	}
	#btn_bar{
		height: 3rem;
		background-image: linear-gradient(#e2e2e2, white, #e2e2e2); 
		text-align: center;
	}
	#btn_bar a{
		font-family: 'cwTeXFangSong', serif;
		height: 3rem;
		line-height: 3rem;
		font-size: 1.2rem;
		font-weight: 600;
		padding-right: 1rem;
		color: black;
		text-decoration: none;
	}
	#btn_bar a:hover{
		filter: drop-shadow(0px 5px 5px #a59166)
	}
	#pic_bar{
		height: 15rem;
		background-repeat: no-repeat;
		background-position: center;
	}
	#small_title{
		height: 5rem;
		font-size: 2rem;
		font-weight: 600;
		line-height: 5rem;
	}
	</style>
</head>
<body onload="load_pic_bar()">
	<div id='main_content'>
		<div id="top_bar">
			<a href="https://web.ncku.edu.tw/index.php">成大首頁</a>
			︱
			<a>English</a>&nbsp
		</div>
		<div id="title">
		</div>
		<div id="btn_bar">
			<a href="index.php">最新消息</a>
			<a>中心簡介</a>
			<a>學術活動</a>
			<a>研究計畫</a>
			<a>執行成果</a>
			<a>相關連結</a>
			<a>網站地圖</a>
		</div>
		<div id="pic_bar">
		</div>
		<div id="small_title">
			&nbsp場地借用
		</div>
		<div id="content">
			<? include("calendar.php"); ?>
		</div>
		<div id="bottom_bar">
		</div>
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