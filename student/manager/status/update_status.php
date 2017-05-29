<?php
include_once('../../../sys/lib.php');

session_start();
$snum = sqlwaf($_POST['snum']);
$sdept = sqlwaf($_POST['sdept']);
$smajor = sqlwaf($_POST['smajor']);
$sclass = sqlwaf($_POST['sclass']);
$sgrade = sqlwaf($_POST['sgrade']);
$syear = sqlwaf($_POST['syear']);
$slevel = sqlwaf($_POST['slevel']);
$sentry = sqlwaf($_POST['sentry']);
$sgraduate = sqlwaf($_POST['sgraduate']);

$conn = new mysqli("localhost", "root", "", "dbtask") or die("连接数据库出错！".mysql_error());
$sql = "update stu_status set sdept='$sdept', smajor='$smajor', sclass='$sclass', sgrade='$sgrade', syear='$syear', slevel='$slevel', sentry=$sentry, sgraduate='$sgraduate' where snum='$snum' ";
$conn->query("SET NAMES UTF8");
$result = $conn->query($sql);
if ($result === TRUE) {
    echo '1';
} else {
    echo '0';
}
$conn -> close();

?>