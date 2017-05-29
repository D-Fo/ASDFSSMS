<?php
include_once('../../../sys/lib.php');

$conn=new mysqli("localhost", "root", "", "dbtask") or die("连接数据库出错！".mysql_error());
if($conn){
    //过滤输入，防止sql注入
    $stype = $_GET['stype'];
    $stext = sqlwaf($_GET['s_text']);

    if ($stype == 'snum'){
        $sql = "select * from stu_status where snum='{$stext}'";
    }else if($stype == 'sdept'){
        $sql = "select * from stu_status where sdept='{$stext}'";
    }else if ($stype == 'sgrade'){
        $sql = "select * from stu_status where sgrade='{$stext}'";
    }
    
    $conn->query("SET NAMES UTF8");
    $result = $conn->query($sql);
    if($result -> num_rows == 0){
        echo "查询出现错误！";
    }
    else if($result -> num_rows < 0){
        mysql_error();
    }
    else{
        while ($row = $result->fetch_assoc()){
                echo '                 
                <tr>
                <td width="80">'.
                    $row['snum'].'
                </td>
                <td width="80">'.
                    $row['sdept'].'
                </td>
                <td width="80">'.
                    $row['smajor'].'
                </td>
                <td width="80">'.
                    $row['sclass'].'
                </td>
                <td width="80">'.
                    $row['sgrade'].'
                </td>
                <td width="80">'.
                    $row['syear'].'
                </td>
                <td width="80">
                    <button class="s_button" name="bchg" onclick="change_status(this)" value="'.$row['snum'].'">修改</button>
                </td>
                <td width="80">
                    <button class="s_button" name="bdel" onclick="del_status(this)" value="'.$row['snum'].'">删除</button>
                </td>
            </tr>';
        
        }
        $conn -> close();
    }
}
?>