<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=gbk">
<title>welcome to sql3</title>
</head>
<body>
<h1 align=center>welcome to sql3</h1>
<h2 align=center>user ID:</h2>
		<form align=center action="#" method="GET">
			<input type="text" name="id" maxlength="6">
			<input type="submit" name="Submit" value="submit">
		</form>
<center><img src=sql1.png></center>
<form align=center action="#" method="POST">
            flag:<input type="text" name="flag">
            <input type="submit" name="Submit2" value="submiit">
</form>
<?php     

if (isset($_GET['Submit'])) 
   { 
    $id = $_GET['id']; 
    $db_connect=mysql_connect("localhost:3306","root","root") or die("Unable to connect to the MySQL!");
    mysql_query("SET NAMES 'gbk'",$db_connect);
    mysql_select_db("sql3",$db_connect);
    $id=str_replace("'","\'","$id");   //转义单引号 
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
    if ($flag == "flag{This is a more difficult SQL injection vulnerability}") 
    {
        echo "<script>alert('nice,Enter SQL fourth pass.');location.href='sql4.php';</script>";
        
    }
}
?>
<br/>
<br/>
<br/>
</body>
</html>




