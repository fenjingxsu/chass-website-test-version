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
			&nbsp進駐學者
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
			<div class="outer_frame"  style="height: 17.5rem">
				<div class="content_title">專案研究員</div>
				<div class="inner_frame"  style="height: 9rem">
					<div style=" float: left; margin-right: 1rem;"><img src="img/visitors/chen.jpg" style="width:4rem; height:6rem;"/><br></div>
					<div style="width: 80%;float: right;">
					<a href="">陳信雄</a>
					<br><br>
					英國牛津大學考古 研究所
					<br>
					中國陶瓷史、臺灣陶瓷史、中國海外交通史、臺灣早期歷史
					<br><br>
					進駐時間：2009.10.20~2013.7.31
					</div>
				</div>
			</div>
			<hr style="display: block;float: right; width: 35rem; margin-right: 2rem;margin-top: 1rem">
			<div class="outer_frame"  style="height: 16.5rem">
				<div class="content_title">客座研究員</div>
				<div class="inner_frame"  style="height: 8rem">
					<div style=" float: left; margin-right: 1rem;"><img src="img/visitors/02.jpg" style="width:4rem; height:6rem;"/><br></div>
					<div style="width: 80%;float: right;">
					<a href="">鄭振滿</a>
					<br><br>
					廈門大學歷史系
					<br>
					<a href="mailto:zhengzhenman@gmail.com">zhengzhenman@gmail.com</a>
					<br><br>
					進駐時間：2010.8.1~2011.7.31
					</div>
				</div>
			</div>
			<hr style="display: block;float: right; width: 35rem; margin-right: 2rem;margin-top: 1rem">
			<div class="outer_frame"  style="height: 20.5rem">
				<div class="content_title">客座講座教授</div>
				<div class="inner_frame"  style="height: 12rem">
					<div style=" float: left; margin-right: 1rem;"><img src="img/visitors/Sinnott-Armstrong_Photo.jpg" style="width:4rem; height:6rem;"/><br></div>
					<div style="width: 80%;float: right;">
					<a href="">WALTER SINNOTT-ARMSTRONG</a>
					<br><br>
					Chauncey Stillman Professor of Ethics 
					<br>
					Department of Philosophy, Duke University 
					<br>
					<a href="mailto:ws66@duke.edu">ws66@duke.edu</a>
					<br>
					webpage:<a href="http://kenan.ethics.duke.edu/people/faculty/walter-sinnott-armstrong/" style="word-wrap: break-word;">http://kenan.ethics.duke.edu/people/faculty/walter-sinnott-armstrong/</a>
					<br><br>
					進駐時間：2010.11.12~2010.12.20
					</div>
				</div>
			</div>
			<hr style="display: block;float: right; width: 35rem; margin-right: 2rem;margin-top: 1rem">
			<div class="outer_frame"  style="height: 30.5rem">
				<div class="content_title">合聘教授</div>
				<div class="inner_frame"  style="height: 8rem">
					<div style=" float: left; margin-right: 1rem;"><img src="img/visitors/lcc.jpg" style="width:4rem; height:6rem;"/><br></div>
					<div style="width: 80%;float: right;">
					<a href="">林朝成</a>
					<br><br>
					台灣大學哲學系
					<br>
					<a href="mailto:chaochen@mail.ncku.edu.tw">chaochen@mail.ncku.edu.tw</a>
					<br><br>
					進駐時間：2010.8.1~2011.1.31
					</div>
				</div>
				<br><br>
				<div class="inner_frame"  style="height: 8rem">
					<div style=" float: left; margin-right: 1rem;"><img src="img/visitors/fan.jpg" style="width:4rem; height:6rem;"/><br></div>
					<div style="width: 80%;float: right;">
					<a href="">范毅軍</a>
					<br><br>
					史丹佛大學博士
					<br>
					明清社會經濟與政治
					<br><br>
					進駐時間：2009.8.1~2010.7.31
					</div>
				</div>
			</div>
			<hr style="display: block;float: right; width: 35rem; margin-right: 2rem;margin-top: 1rem">
			<div class="outer_frame" style="height: 14.5rem">
				<div class="content_title">客座教授</div>
				<div class="inner_frame" style="height: 6rem">
					<div style=" float: left; margin-right: 1rem;width:4rem; height:6rem;"><br></div>
					<div style="width: 80%;float: right;">
					段家誠
					<br><br>
					阪南大學企業情報科 教授
					<br><br>
					進駐時間：2010.8.1~2011.7.31
					</div>
				</div>
			</div>
			<hr style="display: block;float: right; width: 35rem; margin-right: 2rem;margin-top: 1rem">
			<div class="outer_frame"  style="height: 17.5rem">
				<div class="content_title">專案副研究員</div>
				<div class="inner_frame"  style="height: 9rem">
					<div style=" float: left; margin-right: 1rem;"><img src="img/visitors/03.jpg" style="width:4rem; height:6rem;"/><br></div>
					<div style="width: 80%;float: right;">
					<a href="">蕭元哲</a>
					<br><br>
					南加州大學(USC) 公共行政
					<br>
					<a href="mailto:ychsiao@isu.edu.tw">ychsiao@isu.edu.tw</a>
					<br>
					<a href="img/visitors/蕭元哲簡歷1.doc">C.V download</a>
					<br><br>
					進駐時間：2009.02.02~2010.01.31
					</div>
				</div>
			</div>
			<hr style="display: block;float: right; width: 35rem; margin-right: 2rem;margin-top: 1rem">
			<div class="outer_frame"  style="height: 15.5rem">
				<div class="content_title">專案助理研究員</div>
				<div class="inner_frame"  style="height: 7rem">
					<div style=" float: left; margin-right: 1rem;"><img src="img/visitors/wu.jpg" style="width:4rem; height:6rem;"/><br></div>
					<div style="width: 80%;float: right;">
					<a href="">吳挺鋒</a>
					<br><br>
					東海大學社會學研究所 
					<br>
					<a href="mailto:bonowu@gmail.com">bonowu@gmail.com</a>
					<br><br>
					進駐時間：2009.02.18~2010.04.30
					</div>
				</div>
			</div>
			<hr style="display: block;float: right; width: 35rem; margin-right: 2rem;margin-top: 1rem">
			<div class="outer_frame"  style="height: 50.5rem">
				<div class="content_title">專案助理研究員</div>
				<div class="inner_frame"  style="height: 9rem">
					<div style="width: 80%;float: right;">
					<a href="">岡本真希子</a>
					<br><br>
					早稻田大學
					<br>
					日本殖民地研究、日台關係史、韓國史
					<br><br>
					進駐時間：2009.5.13~2013.02
					</div>
				</div>
				<br><br>
				<div class="inner_frame"  style="height: 13rem">
					<div style="width: 80%;float: right;">
					<a href="">翁裕峰</a>
					<br><br>
					英國威爾斯卡爾地夫大學（Cardiff University, Wales）
					<br>
					職業安全衛生社會學、職業衛生政策、健康、科技與社會
					<br>
					<a href="mailto:wongyfuk@gmail.com">wongyfuk@gmail.com</a>
					<br>
					<a href="http://140.116.65.13/dsr/archivesview.php?atcId=19">Personal CV</a>
					<br><br>
					進駐時間：2010.8.1~2010.12.31
					</div>
				</div>
				<br><br>
				<div class="inner_frame"  style="height: 8rem">
					<div style="width: 80%;float: right;">
					<a href="">郭美芳</a>
					<br><br>
					台灣原住民傳統建築文化 
					<br>
					博物館建築與展示之規劃與設計 
					<br><br>
					進駐時間：2012.2.1~2012.12.31
					</div>
				</div>
			</div>
			<hr style="display: block;float: right; width: 35rem; margin-right: 2rem;margin-top: 1rem">
			<div class="outer_frame"  style="height: 15.5rem">
				<div class="content_title">客座副研究員</div>
				<div class="inner_frame"  style="height: 7rem">
					<div style=" float: left; margin-right: 1rem;"><img src="img/visitors/peter.jpg" style="width:4rem; height:6rem;"/><br></div>
					<div style="width: 80%;float: right;">
					<a href="">PETER J. ROBERTSON</a>
					<br><br>
					Stanford University, Doctor of Philosophy
					<br>
					<a href="mailto:robertso@rcf.usc.edu">robertso@rcf.usc.edu</a>
					<br><br>
					進駐時間：2011.1.15~2011.5.15
					</div>
				</div>
			</div>
			<hr style="display: block;float: right; width: 35rem; margin-right: 2rem;margin-top: 1rem">
			<div class="outer_frame"  style="height: 17.5rem">
				<div class="content_title">研究專家</div>
				<div class="inner_frame"  style="height: 9rem">
					<div style=" float: left; margin-right: 1rem;"><img src="img/visitors/04.jpg" style="width:4rem; height:6rem;"/><br></div>
					<div style="width: 80%;float: right;">
					<a href="">胡浩德</a>
					<br><br>
					Director, Taiwan Center for Dutch Heritage
					<br>
					<a href="mailto:z10002038@email.ncku.edu.tw">z10002038@email.ncku.edu.tw</a>
					<br><br>
					進駐時間：2011.1.1~2011.11
					</div>
				</div>
			</div>
			<hr style="display: block;float: right; width: 35rem; margin-right: 2rem;margin-top: 1rem">
			<div class="outer_frame"  style="height: 129.5rem">
				<div class="content_title">&nbsp</div>
				<div class="inner_frame"  style="height: 7rem">
					<div style=" float: left; margin-right: 1rem;"><img src="img/visitors/05.jpg" style="width:4rem; height:6rem;"/><br></div>
					<div style="width: 80%;float: right;">
					<a href="">陳春聲</a>
					<br><br>
					廣州中山大學 副校長 歷史系教授
					<br>
			  		<a href="mailto:hssccs@mail.sysu.edu.cn">hssccs@mail.sysu.edu.cn</a>
			  		<br><br>
					進駐時間：2011.8.1~2011.8.31
					</div>
				</div>
				<br><br>
				<div class="inner_frame"  style="height: 7rem">
					<div style="width: 80%;float: right;">
					<a href="">黃科安</a>
					<br><br>
					泉州師範學院 教務處處長 人文學院院長
					<br>
					<a href="mailto:hungkean-123@163.com">hungkean-123@163.com</a>
					<br><br>
					進駐時間：2011.8.1~2011.8.31
					</div>
				</div>
				<br><br>
				<div class="inner_frame"  style="height: 7rem">
					<div style="width: 80%;float: right;">
					<a href="">陳慶浩</a>
					<br><br>
					法國國家科學中心研究員
					<br>
					<a href="mailto:chanhingho@gmail.com">chanhingho@gmail.com</a>
					<br><br>
					進駐時間：2011.10.5~2011.12.5
					</div>
				</div>
				<br><br>
				<div class="inner_frame"  style="height: 7rem">
					<div style=" float: left; margin-right: 1rem;"><img src="img/visitors/clf.jpg" style="width:4rem; height:6rem;"/><br></div>
					<div style="width: 80%;float: right;">
					<a href="">成令方</a>
					<br><br>
					高雄醫學大學性別研究所副教授
					<br>
					<a href="mailto:lingfang@kmu.edu.tw">lingfang@kmu.edu.tw</a>
					<br><br>
					進駐時間：2011.08.01～2012.07.31
					</div>
				</div>
				<br><br>
				<div class="inner_frame"  style="height: 7rem">
					<div style="width: 80%;float: right;">
					<a href="">邱大昕 老師</a>
					<br><br>
					高雄醫學大學醫學社會學與社會工作學系 副教授
					<br><br>
					進駐時間：2012.8.1~2013.7.31
					</div>
				</div>
				<br><br>
				<div class="inner_frame"  style="height: 7rem">
					<div style="width: 80%;float: right;">
					<a href="">許文榮 老師</a>
					<br><br>
					馬來西亞拉曼大學
					<br><br>
					進駐時間：2013.01.01~102.05.31～2013.07.31
					</div>
				</div>
				<br><br>
				<div class="inner_frame"  style="height: 7rem">
					<div style="width: 80%;float: right;">
					<a href="">姜波 老師</a>
					<br><br>
					山東建築大學齊魯建築文化研究中心 副教授
					<br><br>
					進駐時間：2013.05.01~102.05.31～2013.11.30
					</div>
				</div>
				<br><br>
				<div class="inner_frame"  style="height: 6rem">
					<div style=" float: left; margin-right: 1rem;"><img src="img/visitors/wada.jpg" style="width:4rem; height:6rem;"/><br></div>
					<div style="width: 80%;float: right;">
					<a href="">和田清美 老師</a>
					<br><br>
					日本 首都大學東京 教授
					<br><br>
					進駐時間：2014.8.1~2015.7.31
					</div>
				</div>
				<br><br>
				<div class="inner_frame"  style="height: 6rem">
					<div style="width: 80%;float: right;">
					<a href="">林從一 老師</a>
					<br><br>
					政治大學哲學系 教授
					<br><br>
					進駐時間：2017.2.1~2017.7.31
					</div>
				</div>
				<br><br>
				<div class="inner_frame"  style="height: 6rem">
					<div style="width: 80%;float: right;">
					<a href="">謝若蘭 老師</a>
					<br><br>
					東華大學族群關係與文化學系 副教授
					<br><br>
					進駐時間：2017.8.1~2018.7.31
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
		document.getElementById("main_content").style.height = document.getElementById("main_content").offsetHeight*12.5;
	</script>
	<script type="text/javascript" src="chass.js"></script>

</body>
</html>