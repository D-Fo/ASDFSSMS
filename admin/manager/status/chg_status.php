<?php
$conn=new mysqli("localhost", "root", "", "dbtask") or die("连接数据库出错！".mysql_error());
if($conn){
    if (!isset($_GET['bchg'])){
        die('请点击修改按钮进入此页面！');
    }
    $sql = "select * from stu_status where snum='{$_GET['bchg']}'";
    $conn->query("SET NAMES UTF8");
    $result = $conn->query($sql);
    if($result -> num_rows == 0){
        echo "<script type='text/javascript'> alert('该生没有录入信息！');</script>";
        echo "<script>window.location.href = './XJinfo_add.php';</script>";  
    }
    else if($result -> num_rows < 0){
        mysql_error();
    }
    else{
        while ($row = $result->fetch_assoc()){
            echo '当前学生:<span name="snum">'.$row['snum'].'</span>';
            echo '<form method="post" action="" onsubmit="return change_data_status();">';
            echo '<table width="100%" border="0" cellspacing="0" cellpadding="0" style="text-align:center;">';
                echo '<tbody>
                    <tr>
                        <td align="right" width="80">
                            学号:
                        </td>
                        <td align="left" width="80">
                            <input type="text" name="snum" id="snum" value="'.$row['snum'].'"/>
                        </td>
                        <td align="right" width="80">
                            院系:
                        </td>
                        <td align="left" width="80">
                            <input type="text" name="sdept" id="sdept" value="'.$row['sdept'].'"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right" width="80">
                            专业:
                        </td>
                        <td align="left" width="80">
                            <input type="text" name="smajor" id="smajor" value="'.$row['smajor'].'"/>
                        </td>
                        <td align="right" width="80">
                            班级:
                        </td>
                        <td align="left" width="80">
                            <input type="text" name="sclass" id="sclass" value="'.$row['sclass'].'"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right" width="80">
                            年级:
                        </td>
                        <td align="left" width="80">
                            <input type="text" name="sgrade" id="sgrade" value="'.$row['sgrade'].'"/>
                        </td>
                        <td align="right" width="80">
                            学历:
                        </td>
                        <td align="left" width="80">
                            <input type="text" name="slevel" id="slevel" value="'.$row['slevel'].'"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right" width="80">
                            学制:
                        </td>
                        <td align="left" width="80" colspan="4">
                            <select name="syear">
                                <option value="4">4年</option>
                                <option value="2">2年</option>
                                <option value="3">3年</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td align="right" width="80">
                            入学时间:
                        </td>
                        <td align="left" width="80">
                            <input type="text" name="sentry" id="sentry" value="'.$row['sentry'].'"/>
                        </td>
                        <td align="right" width="80">
                            毕业时间:
                        </td>
                        <td align="left" width="80">
                            <input type="text" name="sgraduate" id="sgraduate" value="'.$row['sgraduate'].'"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" colspan="4">
                            <input type="submit" name="submit" id="submit" value="提交修改" class="button"/>
                        </td>
                    </tr>
                </tbody></table>';
                echo '</form>';
        
        }
        $conn -> close();
    }
}
?>                        
