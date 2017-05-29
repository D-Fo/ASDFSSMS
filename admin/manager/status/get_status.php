<?php
$conn=new mysqli("localhost", "root", "", "dbtask") or die("连接数据库出错！".mysql_error());
if($conn){
    $sql = "select * from stu_status where snum='{$_SESSION["user_account"]}'";
    $conn->query("SET NAMES UTF8");
    $result = $conn->query($sql);
    if($result -> num_rows == 0){
        echo "<script type='text/javascript'> alert('你还没有录入信息！');</script>";
        echo "<script>window.location.href = './XJinfo_add.php';</script>";  
    }
    else if($result -> num_rows < 0){
        mysql_error();
    }
    else{
        while ($row = $result->fetch_assoc()){
            
            echo '<table width="100%" border="0" cellspacing="0" cellpadding="0" style="text-align:center;">';
            echo '<tbody>
                <tr>
                    <td width="80" align="right">
                        学号:
                    </td>
                    <td align="left">'.
                        $row['snum'].'
                    </td>
                    <td width="90" align="right">
                        院系:
                    </td>
                    <td align="left">'.
                        $row['sdept'].'
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        专业:
                    </td>
                    <td align="left">'.
                        $row['smajor'].'
                    </td>
                    <td align="right">
                        班级:
                    </td>
                    <td align="left">'.
                        $row['sclass'].'
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        年级:
                    </td>
                    <td align="left">'.
                        $row['sgrade'].'
                    </td>
                    <td align="right">
                        学历:
                    </td>
                    <td align="left">'.
                        $row['slevel'].'
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        学制:
                    </td>
                    <td  colspan="4" align="left">'.
                        $row['syear'].'
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        入学时间:
                    </td>
                    <td align="left">'.
                        $row['sentry'].'
                    </td>
                    <td align="right">
                        毕业时间:
                    </td>
                    <td align="left">'.
                        $row['sgraduate'].'
                    </td>
                </tr>
            
                </tbody>
            </table>';
        
        }
        $conn -> close();
    }
}
?>                        
                        
                        
                            