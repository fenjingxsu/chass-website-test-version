<html>
<head>
	<title>成功大學人文社會科學中心</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<style type="text/css">
		@import url("chass.css");
		#outer_frame{
			//background-color: #b5b5b5;
			//background: linear-gradient(160deg, #c1a86c 30%, rgba(0,0,0,0) 30%), linear-gradient(155deg, #876b29 35%, rgba(0,0,0,0) 35%), linear-gradient(150deg, #634c15 40%, rgba(0,0,0,0) 40%), linear-gradient(15deg, #7092b5 20%, rgba(0,0,0,0) 20%), linear-gradient(19deg, #4b6887 25%, rgba(0,0,0,0) 25%), linear-gradient(23deg, #304963 30%, rgba(0,0,0,0) 30%), linear-gradient(-80deg, #c4906a 20%, rgba(0,0,0,0) 20%), linear-gradient(-96deg, #7d3a11 25%, rgba(0,0,0,0) 25%);
			background: linear-gradient(100deg, #7092b5 70%, #4b6887 70%);
			width: 35rem;
			height: 70rem;
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
			height: 59rem;
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
			line-height: 2.5rem;
			color: black;
			font-weight: bold;
			border-left: 1rem solid #a88718;
			margin: 1rem;
			padding-left: 1rem;
			padding-right: 0.5rem;
			background: linear-gradient(100deg, #ededed 80%, #c4c4c4 80%);
		}
		.sidebar:hover{
			background: linear-gradient(100deg, #c4c4c4 80%, #c4c4c4 80%);
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
				<div id="content_title">中心簡介</div>
				<div id="white_frame">
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp如上所述，本中心的研究主軸最初兩年為「台灣海洋文化研究」和「當代公民社會之環境健康治理」，後來調整為<span style="color:#d95a00">「跨國跨領域的文史研究」</span>和<span style="color:#d95a00">「高齡社會健康治理」</span>。本中心通盤的發展策略是：<span style="color:#b38c00">致力於協助校內表現傑出、具領導整合能力的同仁組成團隊，向本中心申請整合型計畫，而且這些計畫必須能在上述兩個主軸下善用本校研究資源，並扣緊具南台灣特色，又有國際合作空間的重要議題。本中心的短期發展目標就在於落實這個策略，讓本校跨領域的研究能量更為活絡，也藉此讓本中心獲得校內外學者普遍的認同與支持</span>。
					<br><br>
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp以現階段為例，在上述兩個主軸下，本中心所推動的整合型計畫已經從初期的2個增加到6個，其中3個隸屬於「跨國跨領域的文史研究」，3個隸屬於「高齡社會健康治理」。此外，本中心又於102〜106年6月起開始執行三個由中心負責規劃申請、並獲得<span style="color:#d95a00">校外單位補助的研究計畫</span>，包括蔣經國國際學術交流基金會補助並與大陸、加拿大、越南、新加坡學者合作執行的「東南亞閩南廟宇及貿易網絡：越南與馬六甲海峽閩南族群之比較研究」，科技部於102年補助並由本校跨五個學院（文學院、社科院、管理學院、規劃與設計學院、醫學院）之研究團隊負責執行的計畫「人文創新與社會實踐：現已執行第2期第2年」。尤有甚者，本校為了配合「行政院國家科學委員會推動專題研究計畫研究倫理審查試辦方案」，特別責成本中心執行「人類研究倫理治理架構」的建置計畫，成立研究倫理治理架構之分會，並委由本中心成立「南區研究倫理聯盟」以服務加盟學校（目前共計52所）。該治理架構所設立的「人類研究倫理審查委員會」，亦於102年8月獲得&nbsp&nbsp鈞部查核通過。
					<br><br>
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp以上所描述的現階段進展，顯示本中心目前已經開始朝向以下中長期發展目標邁進：一旦落實了前述通盤策略，並藉此充分累積了跨領域整合的經驗，本中心接著就會致力於和國外學者共築國際學術網絡以進行具體的跨國合作，同時開始鼓勵本中心所支持的研究團隊以<span style="color:#d95a00">「向校外爭取研究計畫補助經費」的方式長期經營</span>。
					<br><br>
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp此外，本中心也同時配合甚至參與研擬校方在人社領域方面的重大研發目標計畫，進而發揮本中心的整合能力，不斷組成更多的研究團隊，以推動校內跨院、跨領域的研究，並提升本校研究成果可產生的社會影響。若能朝著這些目標穩定成長，本中心可望在「跨國跨領域的文史研究」和「高齡社會健康治理」兩大主軸所持續深耕的特定課題上，成為國內外相關領域學者所肯定的研究重鎮。
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