 <style>
  body{
		background-color:#009999;

	}
  table{
  text-align:center;
	background-color:white;
	width:400px;
	height:400px;
	}
	fieldset{
	background-color:white;
		width:450px;
		height:450px;
		}
	legend{
		font-size:15pt;
		}
  </style>
<?php
	$num=$_GET[a];
	$conn=mysql_connect('localhost','test','test_pass');
	mysql_select_db('test_db',$conn);
	mysql_query("SET NAMES utf8",$conn);
	$query="select user_id,passwd,hobby,job,hp,email from join_mem where id=$num";
	$result=mysql_query($query,$conn);
	$re=mysql_fetch_row($result);

	
?>
<center>
<form method=post action='update.php?aa=<?php echo $num ?>'>
<fieldset>
<legend>회원정보수정</legend>
	<table border cellpadding=3 cellspacing=0>
		<tr>
			<td>아이디</td>
			<td><input type="text" value=<?= $re[0] ?> name="u_id"></input></td>
		</tr>
		<tr>
			<td>비밀번호</td>
			<td><input type="password" value=<?= $re[1] ?> name="passch"></input></td>
		</tr>
		<tr>
			<td>취미</td>
			<td><input type="text" value=<?= $re[2] ?> name="u_hobby"></input></td>
		</tr>
		<tr>
			<td>직업</td>
			<td><input type="text" value=<?= $re[3] ?> name="u_job"></input></td>
		</tr>
		<tr>
			<td>휴대폰</td>
			<td><input type="text" value=<?= $re[4] ?> name="u_hp"></input></td>
		</tr>
		<tr>
			<td>이메일</td>
			<td><input type="text" value=<?= $re[5] ?> name="u_email"></input></td>
		</tr>
		</table>
			</fieldset>
		<br><br>
		비밀번호<input type="password" name="pass"></input><br><br>
		<input type="submit" value="수정"></input>

	</center>

	
