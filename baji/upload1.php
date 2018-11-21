<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<script>
window.alert = function()  
{     
confirm("完成的不错！");
 window.location.href="level2.php?keyword=test"; 
}
</script>
<title>欢迎来到文件上传1</title>
</head>
<body>
<h1 align=center>加油，flag在一个文件里面</h1>
		<form align=center enctype="multipart/form-data" action="#" method="POST" />
			<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
			<br />
			<input name="uploaded" type="file" /><br />
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
            $type = strstr($fileinfo['name'],".");
			echo "<h2 align='center'>上传的文件类型是：$type</h2>";
            $filename = $_FILES['uploaded']['name'];
            $tmp_name = $_FILES['uploaded']['tmp_name'];
            $path = "./Upload1/".$filename;
            if(move_uploaded_file($tmp_name, $path)) 
            { 
                 
                echo '<pre>'; 
                echo "<h2 align='center'>上传成功，文件保存在： $path</h2>"; 
                echo '</pre>';  
                 
              } else { 
             
                echo '<pre>'; 
                echo "<h2 align='center'>上传文件失败</h2>"; 
                echo '</pre>'; 
                 
            } 

    } 
    if (isset($_POST['Submit2'])) 
    {
    $flag=$_POST['flag'];
    if ($flag == "flag{This is a simple file upload vulnerability}") 
    {
        echo "<script>alert('完成的不错,进入upload第二关.');location.href='upload2.php';</script>";
        
    }
    }
?>
<br/>
<br/>
<br/>
</body>
</html>




