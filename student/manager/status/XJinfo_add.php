<!DOCTYPE html>
<html> 
    <head>
        <title>
            ASDF学生学籍管理系统
        </title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="../../../css/manager.css"/>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="../../../js/student.js"></script>
    </head>
    <body>
    <?php
    require_once('../../../sys/lib.php');
    session_start();
    if (!isset($_SESSION["user_account"])){
        echo "您还没有登陆!";
        sleep(2);
        header("Location: ../../login/index.html");
    }
    if (is_added_status()){
        echo "<script type='text/javascript'> alert('你已经录入过了，不要重复录入，但是你可以修改！');</script>";
        echo "<script>window.location.href = './XJinfo_change.php';</script>";  
    }
    ?>
        <div class="banner">
            <div class="page">
            <div id="logo">
                <a href="#">
                    <img src="../../../asserts/logo.png" alt width="250" height="50" />
                </a>
            </div>
            <div class="topxx">
                学生:<span name='snum'><?= $_SESSION['user_account']?></span>你好！
                <a onClick="logout()" href="javascript:">退出</a>
            </div>
            </div>
        </div>
        <div class="page">
            <div class="mtop">
                <div class="leftbox">
                    <div class="box-img">
                        <div class="tab1">
                            <strong>基本信息</strong>
                            <div class="leftbgt"></div>
                        </div>
                        <div class="tlist">
                            <div>
                                <a href="../baseinfo/info_view.php">基本信息查询</a>
                            </div>
                            <div>
                                <a href="../baseinfo/info_change.php">基本信息修改</a>
                            </div>
                            <div>
                                <a href="../baseinfo/info_add.php">自主录入</a>
                            </div>
                        </div>
                        <div class="tab1">
                            <strong>学籍信息</strong>
                            <div class="leftbgt2"></div>
                        </div>
                        <div class="tlist">
                            <div>
                                <a href="./XJinfo_view.php">学籍信息查询</a>
                            </div>
                            <div>
                                <a href="./XJinfo_change.php">学籍信息修改</a>
                            </div>
                            <div>
                                <a href="./XJinfo_add.php">自主录入</a>
                            </div>
                        </div>
                        <div class="tab1">
                            <strong>账号相关</strong>
                            <div class="leftbgt2"></div>
                        </div>
                        <div class="tlist">
                            <div>
                                <a href="#">更改密码</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rightbox">
                    <h2 class="mbox">学籍信息 > 学籍信息自主录入</h2>
                    <div class="tag-info">
                        <ul id="ulStuInfoTag">
                            <li>
                                <a class="tag3" onclick href="./XJinfo_view.php">学籍信息查询</a> 
                            </li>
                            <li>
                                <a class="tag2" onclick href="./XJinfo_change.php">学籍信息修改</a> 
                            </li>
                            <li>
                                <a class="tag1" onclick href="./XJinfo_add.php">自主录入</a> 
                            </li>
                        </ul>
                    </div>
                    <div class="info-table">
                        <form method="post" action="" onsubmit="return add_data_status();">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="text-align:center;">
                                <tbody>
                                    <tr>
                                        <td align="right" width="80">
                                            学号:
                                        </td>
                                        <td align="left" width="80">
                                            <input type="text" name="snum" id="snum"/>
                                        </td>
                                        <td align="right" width="80">
                                            院系:
                                        </td>
                                        <td align="left" width="80">
                                            <input type="text" name="sdept" id="sdept"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right" width="80">
                                            专业:
                                        </td>
                                        <td align="left" width="80">
                                            <input type="text" name="smajor" id="smajor"/>
                                        </td>
                                        <td align="right" width="80">
                                            班级:
                                        </td>
                                        <td align="left" width="80">
                                            <input type="text" name="sclass" id="sclass"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right" width="80">
                                            年级:
                                        </td>
                                        <td align="left" width="80">
                                            <input type="text" name="sgrade" id="sgrade"/>
                                        </td>
                                        <td align="right" width="80">
                                            学历:
                                        </td>
                                        <td align="left" width="80">
                                            <input type="text" name="slevel" id="slevel"/>
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
                                            <input type="text" name="sentry" id="sentry"/>
                                        </td>
                                        <td align="right" width="80">
                                            毕业时间:
                                        </td>
                                        <td align="left" width="80">
                                            <input type="text" name="sgraduate" id="sgraduate"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" colspan="4">
                                            <input type="submit" name="submit" id="submit" value="提交" class="button"/>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
                <div class="footer">
                    <p>
                    ©copyright 2017 XZLiu 版权所有</p>
                </div>
            </div>
        </div>
    </body>
</html>
