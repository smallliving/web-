<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>函数缺陷</title>
</head>
<body>
<br/>
<form align=center action="#" method="GET">
            password:<input type="text" name="password">
            <input type="submit" name="Submit" value="提交">
</form>
<br/>
<br/>
<form align=center action="#" method="POST">
            flag:<input type="text" name="flag">
            <input type="submit" name="Submit2" value="提交">
</form>

<?php
if (isset($_GET['Submit'])) 
{
   $password=$_GET['password'];
   if(strcmp('21232f297a57a5a743894a0e4a801fc3',$password))
   {
      echo 'password is false ! ! ! ! !';
   }
   else
   {
      echo 'flag is here!!<br>';
      echo 'flag{n_Ic_e}';
   }
}
if (isset($_POST['Submit2'])) 
{
    $flag=$_POST['flag'];
    if ($flag == "flag{n_Ic_e}") 
    {
        echo "<script>alert('完成的不错,进入下一关.');location.href='../include/index.php';</script>";
        
    }
}
?>
<br/>
<br/>
<!--
$password=$_GET['password'];
   if(strcmp('一串md5数字',$password))
   {
      echo 'password is false ! ! ! ! !';
   }
   else
   {
      echo 'flag is here!!<br>';
      echo '***********';
   }
-->
</body>
</html>




