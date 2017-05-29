<?php
session_start();
$action = $_GET['action'];

if($action == 'login'){
    $conn = new mysqli("localhost", "root", "", "dbtask");
    if (!$conn){
        echo "连接服务器失败!";
    }else{
        $user = $_POST["u"];
        $pass = md5($_POST["p"]);
        $query = "select * from admin where name = '{$user}' and password = '{$pass}'";
        $result = $conn->query($query);
        if ($result->num_rows > 0){
            $_SESSION["user_account"] = $user;
            echo '1';
        }
        else{
            echo "3";
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