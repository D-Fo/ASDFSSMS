<?php
session_start();
$action = $_GET['action'];
error_reporting();

if($action == 'login'){
    $conn = new mysqli("localhost", "root", "", "dbtask");
    if (!$conn){
        echo "连接服务器失败!";
    }else{
        $user = $_POST["u"];
        $pass = md5($_POST["p"]);
        $query = "select * from user where username = '{$user}' and password = '{$pass}'";
        $result = $conn->query($query);
        if($result == null){
            echo "3";
        }else if ($result->num_rows > 0){
            $_SESSION["user_account"] = $user;
            echo '1';
        }
    $conn->close();
    }
}
elseif($action == 'logout'){
    unset($_SESSION['user_account']);
    session_destroy();
    echo '0';
}

?>  