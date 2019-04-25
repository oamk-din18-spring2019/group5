<!doctype html>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="websitequiz";
$x="correct";
$y="incorrect";
 
try{
$conn = mysqli_connect($servername,$username, $password, $dbname);
//echo("successfully");
}
catch(MySQLi_Sql_Exception $ex)
{
echo("error");
}
if(isset($_POST['submit'])){
$mteverest=$_POST['mteverest'];
$query=mysqli_prepare($conn, "INSERT INTO `qsn`(`qsn`) VALUES (?)");
mysqli_stmt_bind_param($query,'s',$mteverest);
$result=mysqli_stmt_execute($query);
 
try{
//$result = mysqli_stmt_execute($query);
 
if($result){
if(mysqli_affected_rows($conn)>0){
echo "submitted successfully";
}
else{
echo "error in submission";
}
}
}catch(Exception $ex){
echo ("error in connection");
}
$querytwo = "select qsn.qsn, answer.ans from answer inner join (select qsn from qsn order by id desc limit 1) as qsn on qsn.qsn = answer.ans";
$resulttwo = mysqli_query($conn, $querytwo);
if($resulttwo){
if(mysqli_affected_rows($conn)>0){
$querythree= mysqli_prepare($conn, "INSERT INTO `compare`(`value`) VALUES (?)");
mysqli_stmt_bind_param($querythree, 's', $x);
$resultthree=mysqli_stmt_execute($querythree);
}else{
$querythree= mysqli_prepare($conn, "INSERT INTO `compare`(`value`) VALUES (?)");
mysqli_stmt_bind_param($querythree, 's', $y);
$resultthree=mysqli_stmt_execute($querythree);
}
 
}
}
if(isset($_POST['check'])){
$queryfour = "select value from compare order by id desc limit 1";
$resultfour = mysqli_query($conn, $queryfour);
if($resultfour){
if(mysqli_num_rows($resultfour)){
while($rows = mysqli_fetch_array($resultfour, MYSQL_BOTH)){
echo($rows['value']."<br>");
 
}
 
}
}else{
echo "eroor in result";
}
}
 
 
 
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
 
<body>
<form action="" method="post">
<table align="center">
<tr>
<td>What is the height of mt everest?</td>
 
</tr>
<tr>
<td></td>
<td><input type="radio" name="mteverest" value="8848">8848</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="mteverest" value="9848">9848</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="mteverest" value="1048">10848</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="mteverest" value="11848">11848</td>
</tr>
<tr>
<td><input type="submit" name="submit" value="submit"></td>
<td><input type="submit" name="check" value="check result"></td>
</tr>
 
</table>
</form>
</body>
</html>