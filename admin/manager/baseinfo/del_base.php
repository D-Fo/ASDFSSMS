<?php
include_once('../../../sys/lib.php');

$snum = sqlwaf($_GET['bdel']);

$conn = new mysqli("localhost", "root", "", "dbtask") or die("连接数据库出错！".mysql_error());
$sql = "delete from stu_base where snum='{$snum}'";
$conn->query("SET NAMES UTF8");
$result = $conn->query($sql);
if ($result === TRUE) {
    echo '1';
} else {
    echo '0';
}
$conn -> close();

?>