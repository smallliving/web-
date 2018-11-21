<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>php弱类型</title>
</head>
<body>
<br/>
<form align=center action="#" method="GET">
            num:<input type="text" name="num">
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
   $num=$_GET['num'];
   if(!is_numeric($num))
   {
      echo "<h2 align=center>$num</h2>";
      if($num==1)
      echo "<h2 align=center>flag{suc_c_ess}</h2>";
   }
}
if (isset($_POST['Submit2'])) 
{
    $flag=$_POST['flag'];
    if ($flag == "flag{suc_c_ess}") 
    {
        echo "<script>alert('完成的不错,进入下一关.');location.href='strcmp.php';</script>";
        
    }
}
?>
<br/>
<br/>
<!--
$num=$_GET['num'];
if(!is_numeric($num))
{
echo $num;
if($num==1)
echo 'flag{**********}';
}
-->
</body>
</html>




