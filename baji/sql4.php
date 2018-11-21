<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>欢迎来到sql4</title>
</head>
<body>
<h1 align=center>sql4没那么简单了!!!</h1>
<h2 align=center>用户 ID:</h2>
		<form align=center action="#" method="GET">
			<input type="text" name="id">
			<input type="submit" name="Submit" value="提交">
		</form>
<center><img src=sql1.png></center>
<form align=center action="#" method="POST">
            flag:<input type="text" name="flag">
            <input type="submit" name="Submit2" value="提交">
</form>
<?php     

if (isset($_GET['Submit'])) 
   { 

    // Retrieve data 

    $id = $_GET['id']; 
    $id = str_replace(" ","","$id");   //过滤空格
    $id = str_replace("select","","$id");   //过滤select
    $id = str_replace(",", "", "$id");      //过滤逗号
    $db_connect=mysql_connect("localhost:3306","root","root") or die("Unable to connect to the MySQL!");
    mysql_select_db("sql4",$db_connect);
    $getid = "SELECT name,age FROM user WHERE Id = '$id'"; 
    $result = mysql_query($getid) or die('<pre>' . mysql_error() . '</pre>' ); 
    $num = mysql_numrows($result); 
    $i=0; 
    while ($i < $num) 
    { 

        $name = mysql_result($result,$i,"name"); 
        $age = mysql_result($result,$i,"age");      
        echo '<pre>'; 
        echo "<h2 align=center>ID:$id<br>name:$name<br>age:$age</h2>";  
        echo '</pre>'; 
        $i++; 
    }  
} 
if (isset($_POST['Submit2'])) 
{
    $flag=$_POST['flag'];
    if ($flag == "flag{it is very hard}") 
    {
        echo "<script>alert('完成的不错,进入sql第五关.');location.href='sql_blind.php';</script>";
        
    }
}
?>
<br/>
<br/>
<br/>
</body>
</html>




