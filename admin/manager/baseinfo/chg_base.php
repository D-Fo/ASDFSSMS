<?php
$conn=new mysqli("localhost", "root", "", "dbtask") or die("连接数据库出错！".mysql_error());
if($conn){
    if (!isset($_GET['bchg'])){
        die('请点击修改按钮进入此页面！');
    }
    $sql = "select * from stu_base where snum='{$_GET['bchg']}'";
    $conn->query("SET NAMES UTF8");
    $result = $conn->query($sql);
    if($result -> num_rows == 0){
        echo "<script type='text/javascript'> alert('该生没有录入信息！');</script>";
        echo "<script>window.location.href = './info_add.php';</script>";  
    }
    else if($result -> num_rows < 0){
        mysql_error();
    }
    else{
        while ($row = $result->fetch_assoc()){
            echo '当前学生:<span name="snum">'.$row['snum'].'</span>';
            echo '<form method="post" action="" onsubmit="return change_data_base();">';
            echo "<table width='100%' border='0' cellspacing='0' cellpadding='0' style='text-align:center;'>";
            echo '
            <tbody>
                <tr>
                    <td align="right" width="80">
                        姓名:
                    </td>
                    <td align="left" width="80">
                        <input type="text" name="sname" id="sname" value="'.$row['sname'].'"/>
                    </td>
                    <td align="right" width="80">
                        性别:
                    </td>
                    <td align="left" width="80">';
                    if ($row['ssex'] == '男'){
                        echo '<select name="ssex">
                            <option value="男" selected="selected">男</option>
                            <option value="女">女</option>
                            </select>';
                    }else{
                        echo '<select name="ssex">
                            <option value="男">男</option>
                            <option value="女" selected="selected">女</option>
                            </select>';
                    }
                    echo '
                    </td>
                    </tr>
                    <tr>
                    <td align="right" width="80">
                        学号:
                    </td>
                    <td align="left" width="80">
                        <input type="text" name="snum" id="snum" value="'.$row['snum'].'"/>
                    </td>
                    <td align="right" width="80">
                        民族:
                    </td>
                    <td align="left" width="80">
                        <input type="text" name="srace" id="srace" value="'.$row['srace'].'"/>
                    </td>
                </tr>
                <tr>
                    <td align="right" width="80">
                        身份证号:
                    </td>
                    <td align="left" width="80" colspan="4">
                        <input type="text" name="sid" id="sid" value="'.$row['sid'].'"/>
                    </td>
                </tr>
                <tr>
                    <td align="right" width="80">
                        生日:
                    </td>
                    <td align="left" width="80">
                        <input type="text" name="sbirth" id="sbirth" value="'.$row['sbirth'].'"/>
                    </td>
                    <td align="right" width="80">
                        籍贯:
                    </td>
                    <td align="left" width="80">
                        <input type="text" name="shome" id="shome" value="'.$row['shome'].'"/>
                    </td>
                </tr>
                <tr>
                    <td align="right" width="80">
                        手机号:
                    </td>
                    <td align="left" width="80">
                        <input type="text" name="scon" id="scon" value="'.$row['scon'].'"/>
                    </td>
                    <td align="right" width="80">
                        邮箱:
                    </td>
                    <td align="left" width="80">
                        <input type="text" name="semail" id="semail" value="'.$row['semail'].'"/>
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
