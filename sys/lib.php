<?php

function sqlwaf($data){
        //对特殊符号添加反斜杠
        $data = addslashes($data);
        //判断自动添加反斜杠是否开启
        if(get_magic_quotes_gpc()){
            //去除反斜杠
            $data = stripslashes($data);
        }
        $data = str_ireplace( "and", "sqlwaf", $data );
        $data = str_ireplace( "or", "sqlwaf", $data );
        $data = str_ireplace( "from", "sqlwaf", $data );
        $data = str_ireplace( "execute", "sqlwaf", $data );
        $data = str_ireplace( "update", "sqlwaf", $data );
        $data = str_ireplace( "count", "sqlwaf", $data );
        $data = str_ireplace( "chr", "sqlwaf", $data );
        $data = str_ireplace( "mid", "sqlwaf", $data );
        $data = str_ireplace( "char", "sqlwaf", $data );
        $data = str_ireplace( "union", "sqlwaf", $data );
        $data = str_ireplace( "select", "sqlwaf", $data );
        $data = str_ireplace( "delete", "sqlwaf", $data );
        $data = str_ireplace( "insert", "sqlwaf", $data );
        $data = str_ireplace( "limit", "sqlwaf", $data );
        $data = str_ireplace( "concat", "sqlwaf", $data );
        $data = str_ireplace( "\\", "\\\\", $data );
        $data = str_ireplace( "&&", "", $data );
        $data = str_ireplace( "||", "", $data );
        $data = str_ireplace( "'", "", $data );
        $data = str_ireplace( "%", "\%", $data );
        $data = str_ireplace( "_", "\_", $data );

        $data = nl2br($data);
        //去掉前后空格
        $data = trim($data);
        //将HTML特殊字符转化为实体
        $data = htmlspecialchars($data);
        return $data;
}

//判断是否已经录入
function is_added_base()
{
    $conn=new mysqli("localhost", "root", "", "dbtask") or die("连接数据库出错！".mysql_error());
    if($conn){
    $sql = "select * from stu_base where snum='{$_SESSION["user_account"]}'";
    $conn->query("SET NAMES UTF8");
    $result = $conn->query($sql);
    if($result -> num_rows){
        return 1;
    }else{
        return 0;
    }
    }
}
function is_added_status()
{
    $conn=new mysqli("localhost", "root", "", "dbtask") or die("连接数据库出错！".mysql_error());
    if($conn){
    $sql = "select * from stu_status where snum='{$_SESSION["user_account"]}'";
    $conn->query("SET NAMES UTF8");
    $result = $conn->query($sql);
    if($result -> num_rows){
        return 1;
    }else{
        return 0;
    }
    }
}

?>