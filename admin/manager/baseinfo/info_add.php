<!DOCTYPE html>
<html> 
    <head>
        <title>
            ASDF学生学籍管理系统
        </title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="../../../css/manager.css"/>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="../../../js/manager.js"></script>
    </head>
    <body>
    <?php
    require_once('../../../sys/lib.php');
    session_start();
    if (!isset($_SESSION["user_account"])){
        echo "<script>alert('你还没有登录呢~');</script>";
        echo "<meta http-equiv=refresh content='0; url=../../login/index.html'>";
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
                管理员:<span name='snum'><?= $_SESSION['user_account']?></span> 你好！
                <a onClick="logout()" href="javascript:">退出</a>
            </div>
            </div>
        </div>
        <div class="page">
            <div class="mtop">
                <div class="leftbox">
                    <div class="box-img">
                        <div class="tab1">
                            <strong>基本信息管理</strong>
                            <div class="leftbgt"></div>
                        </div>
                        <div class="tlist">
                            <div>
                                <a href="./info_view.php">基本信息查删</a>
                            </div>
                            <div>
                                <a href="./info_change.php">基本信息修改</a>
                            </div>
                            <div>
                                <a href="./info_add.php">基本信息录入</a>
                            </div>
                        </div>
                        <div class="tab1">
                            <strong>学籍信息管理</strong>
                            <div class="leftbgt2"></div>
                        </div>
                        <div class="tlist">
                            <div>
                                <a href="../status/XJinfo_view.php">学籍信息查删</a>
                            </div>
                            <div>
                                <a href="../status/XJinfo_change.php">学籍信息修改</a>
                            </div>
                            <div>
                                <a href="../status/XJinfo_add.php">学籍信息录入</a>
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
                    <h2 class="mbox">基本信息管理 > 基本信息录入 </h2>
                    <div class="tag-info">
                        <ul id="ulStuInfoTag">
                            <li>
                                <a class="tag3" onclick href="./info_view.php">基本信息查删</a> 
                            </li>
                            <li>
                                <a class="tag2" onclick href="./info_change.php">基本信息修改</a> 
                            </li>
                            <li>
                                <a class="tag1" onclick href="./info_add.php">基本信息录入</a> 
                            </li>
                        </ul>
                    </div>
                    <div class="info-table">
                        <form method="post" onsubmit="return add_data_base();" action="" >
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="text-align:center;">
                                <tbody>
                                    <tr>
                                        <td align="right" width="80">
                                            姓名:
                                        </td>
                                        <td align="left" width="80">
                                            <input type="text" name="sname" id="sname"/>
                                        </td>
                                        <td align="right" width="80">
                                            性别:
                                        </td>
                                        <td align="left" width="80">
                                        <select name="ssex">
                                            <option value="男">男</option>
                                            <option value="女">女</option>
                                        </select> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right" width="80">
                                            学号:
                                        </td>
                                        <td align="left" width="80">
                                            <input type="text" name="snum" id="snum"/>
                                        </td>
                                        <td align="right" width="80">
                                            民族:
                                        </td>
                                        <td align="left" width="80">
                                            <input type="text" name="srace" id="srace"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right" width="80">
                                            身份证号:
                                        </td>
                                        <td align="left" width="80" colspan="4">
                                            <input type="text" name="sid" id="sid"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right" width="80">
                                            生日:
                                        </td>
                                        <td align="left" width="80">
                                            <input type="text" name="sbirth" id="sbirth"/>
                                        </td>
                                        <td align="right" width="80">
                                            籍贯:
                                        </td>
                                        <td align="left" width="80">
                                            <input type="text" name="shome" id="shome"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right" width="80">
                                            手机号:
                                        </td>
                                        <td align="left" width="80">
                                            <input type="text" name="scon" id="scon"/>
                                        </td>
                                        <td align="right" width="80">
                                            邮箱:
                                        </td>
                                        <td align="left" width="80">
                                            <input type="text" name="semail" id="semail"/>
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
