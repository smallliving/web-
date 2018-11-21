<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>欢迎来到文件上传4</title>
</head>
<body>
<h1 align=center>inclusion.php，flag在一个txt文件里面</h1>
		<form align=center enctype="multipart/form-data" action="#" method="POST" />
			<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
			<br />
            请选择一张图片上传(只支持png)：
            <br />
			<input name="uploaded" type="file" accept="image/*"/><br />
			<br />
			<input type="submit" name="Upload" value="上传" />
		</form>
<?php 
ini_set("display_errors", 0);
//$str = $_GET["id"];
//echo "<h2 align=center>欢迎用户".$str."</h2>";
?>
<center><img src=upload1.png></center>
<form align=center action="#" method="POST">
			flag:<input type="text" name="flag">
			<input type="submit" name="Submit2" value="提交">
</form>
<?php 
    if (isset($_POST['Upload'])) 
    { 
            $fileinfo = $_FILES[uploaded];
            $filename = $_FILES['uploaded']['name'];
            $tmp_name = $_FILES['uploaded']['tmp_name'];
            $typename = $_FILES['uploaded']['type'];
            $path = "./Upload4/".$filename;
            $type = substr($filename, strrpos($filename, '.') + 1);
            echo "<h2 align='center'>上传的文件类型是：$type</h2>";
            if ($typename == "image/png" && $type == "png")
            {
                if(move_uploaded_file($tmp_name, $path)) 
                { 
                 
                echo '<pre>'; 
                echo "<h2 align='center'>上传成功，文件保存在： $path</h2>"; 
                echo '</pre>';  
                 
                } 
                else 
                { 
                echo '<pre>'; 
                echo "<h2 align='center'>上传图片失败</h2>"; 
                echo '</pre>';  
                }
            } 
            else
            {
                echo "<h3 align='center'>上传失败,只能上传png图片啦</h3>";
            }

    } 
    if (isset($_POST['Submit2'])) 
    {
    $flag=$_POST['flag'];
    if ($flag == "flag{zhe_IS_fla9_fight1ng}") 
    {
        echo "<script>alert('完成的不错,进入下一关.');location.href='./login/login1.html';</script>";
        
    }
    }
?>
<br/>
<br/>
<br/>
</body>
</html>




