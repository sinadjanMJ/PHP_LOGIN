<?php

require_once "db_conn.php";

$uame = $_POST['txt'];
$ename = $_POST['emails'];
$pass = $_POST['pswd'];
$name = $_POST['name'];

$sql = "insert into user (username,email,password,fullname) values ('$uname', '$ename', '$pass', '$name')";
var_dump($res);
$res  = $conn->query($sql);

if($res)
    header('Location: sform.php?success=Successfully Added');
else    
    echo "error happened";
?>