<style>
body{ 

	}
td { 
	text-align:center;
	}
table {
		width:750px;
		height:200px;
		border-right:white;
		border-left:white;
		}
#a{
	background-color:#ccff66;
	}
a:link {font-size:9pt;color:gray;
			text-decoration:none;}
	a:visited {font-size:9pt;
				color:gray;
				text-decoration:none;}
	a:hover{ font-size:9pt;
				color:red;
				text-decoration:underline;}
	a:active{ font-size:9pt;
				color:red;
				text-decoration:underline;}

</style>
<center>
<h2><font color="#ff0000">♥</font>회 원 정 보<font color="#ff0000">♥</font></h2>
<table border cellpadding=3 cellspacing=0><tr><td id="a">번호</td><td id="a">아이디</td><td id="a" >이름</td><td id="a">성별</td><td id="a">취미</td><td id="a">직업</td>
<td id="a">핸드폰</td><td id="a">이메일</td><td id="a">기타</td></tr>
<?php
$conn=mysql_connect('localhost','test','test_pass');
mysql_select_db('test_db',$conn);
mysql_set_charset("utf8",$conn);

$query="select id,user_id,user_name,gender,hobby,job,hp,email from join_mem order by id desc";
$result=mysql_query($query,$conn);
$num=mysql_num_rows($result);
for($i=0;$i<$num;$i++){
$re=mysql_fetch_row($result);
?>
<tr>
<td><?php echo $re[0]?></td>
<td><?php echo $re[1]?></td>
<td><?php echo $re[2]?></td>
<td><?php echo $re[3]?></td>
<td><?php echo $re[4]?></td>
<td><?php echo $re[5]?></td>
<td><?php echo $re[6]?></td>
<td><?php echo $re[7]?></td>
<td><a href='update_form.php?a=<?php echo $re[0]?>'>수정</a>&nbsp;&nbsp;&nbsp<a href='delete_form.php?a=<?php echo $re[0]?>'>삭제</a></td>
</tr>

<?php
}
?>
</table>
</center>
<?php
mysql_close(); 
?>