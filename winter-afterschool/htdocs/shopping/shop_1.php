 <style>
  div{
	text-align:right;
	}
  body{
	background-color:#ababab;
	}


  		a:link {font-size:11pt;color:white;
				text-decoration:none;}
	a:visited {font-size:11pt;
				color:white;
				text-decoration:none;}
	a:hover{ font-size:11pt;
				color:red;
				text-decoration:underline;}
	a:active{ font-size:11pt;
				color:red;
				text-decoration:underline;}
	fieldset{
		width:1000px;
		background-color:white;
		}
	input[type=submit]{
		width:5em;
		height:4em;
		background-color:black;
		color:white;

		}


  </style>
<?php
	include '../dbconn.php';
	$query="select id from album";

	$result=mysql_query($query,$conn);
	
	$num=mysql_num_rows($result);


?>

 <center>
 <body>
 <fieldset>
   <table>

  <tr>
  <?php for($i=1;$i<=1;$i++){
  $re=mysql_fetch_row($result);?>
	<td><?php echo $re[0]?></td>
<?php } ?>
	<td><input type="image" src="image/gallant.jpg"></td>
	<label for="gallant"><td>[음반][수입]Gallant-Ology<br>
	갈란트(Gallant) | 워너뮤직(WEA) | 2016년 8월<br>
	18,800원<br><br>
	갓란트라 불리는 요즘 대세! 데뷔앨범 발표 전부터 이미 스타가 된 신예 R&B 싱어송라이터 !<br>
	표면을 뒤흔드는 올해 최고의 데뷔값을 매길 수 없는 목소리 gallant (갈란트)<br>
	평단이 입을 모아 찬사를 보낸 신예 US 아이튠즈 R&B/Soul 차트 1위를 차지한 데뷔 앨범<br>
	"갈란트는 우리가 지난20년 동안 찾아 헤매던 견고하면서도 빛나는 R&B의 명맥을 다시 찾아왔다"<br>
	</td></label>
	<td>
	<a href='buy.php?a=<?php echo $re[0]?>'><input type="submit" value="바로구매"></input></a>
  </tr>
  <tr>
   <?php for($i=2;$i<=2;$i++){
  $re=mysql_fetch_row($result);?>
	<td><?php echo $re[0]?></td>
<?php } ?>
	<td><input type="image" src="image/lalaland.jpg"></td>
	<label for="lalaland"><td>[음반] 라라랜드 O.S.T<br>

	라이언 고슬링,존 레전드(John Legend),엠마 스톤,저스틴 허위츠(Justin<br>
	Hurwitz) | 유니버설(Universal) | 2016년 12월<br>
	17,600원<br><br>
	Justin Hurwitz 작곡, 주연 배우 엠마 스톤과 라이언 고슬링이 직접 부른<br>
	더욱 빛나게 만드는 오리지널 사운드트랙! <br>
	영화 곳곳 흐르는 메인 멜로디를 중심으로 라이언 고슬링과 엠마 스톤의<br> 
	하모니가 어우러지는 'City of Stars'<br>
	

	</td></label>
	<td>
	<a href='buy.php?a=<?php echo $re[0]?>'><input type="submit" value="바로구매"></input></a>
	</td>
</tr>
<tr>
	 <?php for($i=3;$i<=3;$i++){
  $re=mysql_fetch_row($result);?>
	<td><?php echo $re[0]?></td>
<?php } ?>
	<td><input type="image" src="image/drake.jpg"></td>
	<label for="drake"><td>[음반]Drake - If You're Reading This It's Too Late<br>
	드레이크(Drake) | 유니버설 (Universal) | 2015년 5월
	17,600원<br><br>
	디지털 발매와 동시에 무려<br>
	14곡 빌보드 100 진입!!<br>
	빌보드 앨범 차트 1위, UK R&B 앨범차트 1위,<br>
	명실상부 최고의 히트 메이커 드레이크!<br>
	실험적이고 공격적인 사운드! <br>
	</td></label>
	<td>
	<a href='buy.php?a=<?php echo $re[0]?>'><input type="submit" value="바로구매"></input></a>
	</td>
</tr>
<tr name="midnight">
	 <?php for($i=4;$i<=4;$i++){
  $re=mysql_fetch_row($result);?>
	<td><?php echo $re[0]?></td>
<?php } ?>
	<td><input type="image" src="image/midnight.jpg"></td>
	<td>[음반]미드나잇 인 파리 O.S.T<br>
	시드니 베쳇(Sidney Bechet) | 2012년 11월
	16,000원<br><br>
	영화를 좋아했다면 이 뛰어난 사운드트랙을 사랑하게 될 것이다.<br>
	완벽한 음악적 조합<br>
	이 영화를 처음 봤을 때 음악에 사로 잡혔고, 이내 음반을 구매했다<br>
	미드 나잇 인 파리<br>
	</td>
	<td>
	<a href='buy.php?a=<?php echo $re[0]?>'><input type="submit" value="바로구매"></input></a>
	</td>
</tr>
</table>
</fieldset>
 </body>
 </center>

