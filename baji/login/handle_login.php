<?php
header("content-type:text/html;charset=utf-8");
session_start();#接受提交过来的用户名及密码
$username = trim($_POST['username']);//用户名
$password = trim($_POST['password']);//密码
$imgcode = strtolower($_POST['imgcode']);//接受从登陆输入框提交过来的验证码并转化为小写；
$myimagecode  = strtolower($_SESSION['thisimagecode']) ;//从session中取得验证码并转化为小写；
if ($imgcode!=$myimagecode)
{     
	echo '请输入正确的验证码';exit;
}
if ($username==NULL)
{
	echo '用户名不能为空';exit;
}
if ($password==NULL)
{
	echo '密码不能为空';exit;
}
#拿着提交过来的用户名和密码去数据库查找，看是否存在此用户名以及其密码  
$link=mysql_connect('localhost','root','root');
mysql_query('set names utf8');
$re=mysql_select_db('user_list',$link);
$sql="select * from userid where username = '$username' and password='$password' ";
$rows=mysql_query($sql);
if(mysql_num_rows($rows) == 1)
{  
    $SESSION['is_login']=$rows['username'];  
    echo "<script>alert('登录成功.');</script>";
}
else
{  
    $is_login='';  
    echo "<script>alert('用户名或密码错误');location.href='login1.html';</script>";;
}
?>