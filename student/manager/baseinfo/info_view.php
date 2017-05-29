<?php session_start(); ?>
<!DOCTYPE html>
<html> 
    <head>
        <title>
            ASDF学生学籍管理系统
        </title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="../../../css/manager.css"/>
        <script type="text/javascript" src="../../../js/student.js"></script>
    </head>
    <body>
        <div class="banner">
            <div class="page">
            <div id="logo">
                <a href="#">
                    <img src="../../../asserts/logo.png" alt width="250" height="50" />
                </a>
            </div>
            <div class="topxx">
                学生:<?= $_SESSION['user_account']?> 你好！
                <a onclick="logout()" href="javascript:">退出</a>
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
                                <a href="./info_view.php">基本信息查询</a>
                            </div>
                            <div>
                                <a href="./info_change.php">基本信息修改</a>
                            </div>
                            <div>
                                <a href="./info_add.php">自主录入</a>
                            </div>
                        </div>
                        <div class="tab1">
                            <strong>学籍信息</strong>
                            <div class="leftbgt2"></div>
                        </div>
                        <div class="tlist">
                            <div>
                                <a href="../status/XJinfo_view.php">学籍信息查询</a>
                            </div>
                            <div>
                                <a href="../status/XJinfo_change.php">学籍信息修改</a>
                            </div>
                            <div>
                                <a href="../status/XJinfo_add.php">自主录入</a>
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
                    <h2 class="mbox">基本信息 > 基本信息查询</h2>
                    <div class="tag-info">
                        <ul id="ulStuInfoTag">
                            <li>
                                <a class="tag1" onclick href="./info_view.php">基本信息查询</a> 
                            </li>
                            <li>
                                <a class="tag2" onclick href="./info_change.php">基本信息修改</a> 
                            </li>
                            <li>
                                <a class="tag3" onclick href="./info_add.php">自主录入</a> 
                            </li>
                        </ul>
                    </div>
                    <div class="info-table">
                        <?php require('./get_base.php'); ?>
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
