<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>sql盲注</title>
</head>
<body>
<h2 align=center>用户 ID:</h2>
	<form align=center action="#" method="GET">
		<input type="text" name="id">
		<input type="submit" name="Submit" value="提交">
	</form>
<center><img src=sql_blind.png></center>
<form align=center action="#" method="POST">
            flag:<input type="text" name="flag">
            <input type="submit" name="Submit2" value="提交">
</form>
<?php     

if (isset($_GET['Submit'])) 
{ 
    $id = $_GET['id'];   
    $db_connect=mysql_connect("localhost:3306","root","root") or die("Unable to connect to the MySQL!");
    mysql_select_db("qwe",$db_connect);
    $getid = "SELECT name,age,year FROM user WHERE Id = '$id'"; 
    $result = mysql_query($getid); 
    $num = @mysql_numrows($result); 
    $i=0; 
    while ($i < $num) 
    { 
        $name = mysql_result($result,$i,"name"); 
        $age = mysql_result($result,$i,"age");  
        $year = mysql_result($result,$i,"year");         
        echo '<pre>'; 
        echo "<h2 align=center>ID:$id<br>name:$name<br>age:$age<br>year:$year</h2>"; 
        echo '</pre>'; 
        $i++; 
    }  
    mysql_close($db_connect);
} 
if (isset($_POST['Submit2'])) 
{
    $flag=$_POST['flag'];
    if ($flag == "flag{123456}") 
    {
        echo "<script>alert('完成的不错,进入xss第一关.');location.href='xss1.php?name=admin';</script>";
        
    }
}

?>
<br/>
<br/>
<br/>
</body>
</html>




