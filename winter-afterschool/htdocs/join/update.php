<?php
	$num=$_GET[aa];
	$u_passch=$_POST[passch];
	$u_pass =$_POST[pass];
	$u_id=$_POST[u_id];
	$u_hobby=$_POST[u_hobby];
	$u_job=$_POST[u_job];
	$u_hp=$_POST[u_hp];
	$u_email=$_POST[u_email];
	
	$conn=mysql_connect('localhost','test','test_pass');
	mysql_select_db('test_db',$conn);
	$query="select user_id,passwd,hobby,job,hp,email from join_mem where id=$num";
	$result=mysql_query($query,$conn);
	mysql_query("SET NAMES utf8",$conn);
	$re=mysql_fetch_row($result);
	


	if($u_pass==$re[1]){
		$query1="update join_mem set user_id='$u_id',passwd='$u_passch',hobby='$u_hobby',job='$u_job',hp='$u_hp',email='$u_email' where id=$num";
		$result1=mysql_query($query1,$conn);
			echo "<script>alert('수정되었습니다!');</script>";
	}
	else if($u_pass!=$re[1]){
		echo "<script>alert('비밀번호를 다시 확인해주세요') 
		history.go(-1);</script>";
	}
		





?>
<meta http-equiv='refresh' content='0;url=list.php'>;