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
                        <td align="right" width="80">
                            学号:
                        </td>
                        <td align="left" width="80">
                            <input type="text" name="snum" id="snum" placeholder="'.$row['snum'].'"/>
                        </td>
                        <td align="right" width="80">
                            院系:
                        </td>
                        <td align="left" width="80">
                            <input type="text" name="sdept" id="sdept" placeholder="'.$row['sdept'].'"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right" width="80">
                            专业:
                        </td>
                        <td align="left" width="80">
                            <input type="text" name="smajor" id="smajor" placeholder="'.$row['smajor'].'"/>
                        </td>
                        <td align="right" width="80">
                            班级:
                        </td>
                        <td align="left" width="80">
                            <input type="text" name="sclass" id="sclass" placeholder="'.$row['sclass'].'"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right" width="80">
                            年级:
                        </td>
                        <td align="left" width="80">
                            <input type="text" name="sgrade" id="sgrade" placeholder="'.$row['sgrade'].'"/>
                        </td>
                        <td align="right" width="80">
                            学历:
                        </td>
                        <td align="left" width="80">
                            <input type="text" name="slevel" id="slevel" placeholder="'.$row['slevel'].'"/>
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
                            <input type="text" name="sentry" id="sentry" placeholder="'.$row['sentry'].'"/>
                        </td>
                        <td align="right" width="80">
                            毕业时间:
                        </td>
                        <td align="left" width="80">
                            <input type="text" name="sgraduate" id="sgraduate" placeholder="'.$row['sgraduate'].'"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" colspan="4">
                            <input type="submit" name="submit" id="submit" value="提交修改" class="button"/>
                        </td>
                    </tr>
                </tbody></table>';
        
        }
        $conn -> close();
    }
}
?>                        
