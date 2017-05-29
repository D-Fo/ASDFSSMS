<?php
$conn=new mysqli("localhost", "root", "", "dbtask") or die("连接数据库出错！".mysql_error());
if($conn){
    $sql = "select * from stu_base where snum='{$_SESSION["user_account"]}'";
    $conn->query("SET NAMES UTF8");
    $result = $conn->query($sql);
    if($result -> num_rows == 0){
        echo "<script type='text/javascript'> alert('你还没有录入信息！');</script>";
        echo "<script>window.location.href = './info_add.php';</script>";  
    }
    else if($result -> num_rows < 0){
        mysql_error();
    }
    else{
        while ($row = $result->fetch_assoc()){
            
            echo "<table width='100%' border='0' cellspacing='0' cellpadding='0' style='text-align:center;'>";
            echo '
            <tbody>
            <tr>
                <td width="80" align="right">
                    姓名:
                </td>
                <td align="left">
                    '.$row['sname'].'
                </td>
                <td width="90" align="right">
                    性别:
                </td>
                <td align="left">
                    '.$row['ssex'].'
                </td>
                <td rowspan="5">
                    <div align="center"> 
                        <img src="../../../asserts/students/avatar.png" width="120" height="160" style="border: 1px #ddd solid; padding: 2px 2px 5px;" />
                    </div>
                </td>
            </tr>
            <tr>
                <td align="right">
                    学号:
                </td>
                <td align="left">
                    '.$row['snum'].'
                </td>
                <td align="right">
                    民族:
                </td>
                <td align="left">
                    ' .$row['srace'].'
                </td>
            </tr>
            <tr>
                <td align="right">
                    身份证号:
                </td>
                <td colspan="4" align="left">
                    '.$row['sid'].'
                </td>
            </tr>
            <tr>
                <td align="right">
                    生日:
                </td>
                <td align="left">
                    ' .$row['sbirth'].'
                </td>
                <td align="right">
                    籍贯:
                </td>
                <td align="left">
                    '.$row['shome'].'
                </td>
            </tr>
            <tr>
                <td align="right">
                    手机号:
                </td>
                <td align="left">
                    '.$row['scon'].'
                </td>
                <td align="right">
                    邮箱:
                </td>
                <td align="left">
                    '.$row['semail'].'
                </td>
            </tr>
            </tbody>
        </table>
        ';
        
        }
        $conn -> close();
    }
}
?>