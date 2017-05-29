<?php
include_once('../../../sys/lib.php');

session_start();
$sname = sqlwaf($_POST['sname']);
$snum = sqlwaf($_POST['snum']);
$ssex = sqlwaf($_POST['ssex']);
$srace = sqlwaf($_POST['srace']);
$sid = sqlwaf($_POST['sid']);
$sbirth = sqlwaf($_POST['sbirth']);
$shome = sqlwaf($_POST['shome']);
$scon = sqlwaf($_POST['scon']);
$semail = sqlwaf($_POST['semail']);

$conn = new mysqli("localhost", "root", "", "dbtask") or die("连接数据库出错！".mysql_error());
$sql = "update stu_base set sname='$sname', ssex='$ssex', srace='$srace', sid='$sid', sbirth='$sbirth', shome='$shome', scon=$scon, semail='$semail' where snum='$snum' ";
$conn->query("SET NAMES UTF8");
$result = $conn->query($sql);
if ($result === TRUE) {
    echo '1';
} else {
    echo '0';
}
$conn -> close();

?>