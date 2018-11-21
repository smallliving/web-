<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>本地文件包含</title>
</head>
<body>
<form align=center action="#" method="POST">
            flag:<input type="text" name="flag">
            <input type="submit" name="Submit2" value="提交">
</form>
<a href="./include2.php?hello=1">点击此处开始答题</a>
<?php     
if (isset($_POST['Submit2'])) 
{
    $flag=$_POST['flag'];
    if ($flag == "flag{you are 666}") 
    {
        echo "<script>alert('完成的不错,进入xss第四关.');location.href='xss4.php?keyword=admin';</script>";
        
    }
}
?>
<br/>
<br/>
<br/>
</body>
</html>




