<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
 echo "ชื่อ -สกุล:".$_POST['prefix'].$_POST['fullname']."<br>";
 echo "วันเดือนปีเกิด:".$_POST['birthday']."<br>";
 echo "ที่อยู่:".$_POST['address']."<br>";
 echo "อีเมลล์:".$_POST['email']."<br>";
 echo "ความสูง:".$_POST['a']."ซม.<br>";
 echo "สีที่ชอบ:".$_POST['b']."<br>";
 echo "สาขาวิชา:".$_POST['c']."<br>";
 
?>

</body>
</html>