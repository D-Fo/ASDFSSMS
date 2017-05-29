//搜索基本信息
function search_base() {
    $.ajax({
        type: 'get',
        url: 'search.php',
        data: $('form').serialize(),
        success: function (data) {
            if(data != '查询出现错误！'){
                var hdata = '<th width="80px">姓名</th><th width="80px">学号</th><th width="80px">性别</th><th width="80px">民族</th><th width="80px">籍贯</th><th width="80px">邮箱</th><th width="80px">修改</th><th width="80px">删除</th>';
                $('table').empty();
                $('table').append(hdata);
                $('table').append(data);
            }else{
                $('table').empty();
                $('table').append('没有找到~');
            }
        }
    });
    // return false;
}
//搜索学籍信息
function search_status() {
    $.ajax({
        type: 'get',
        url: 'search.php',
        data: $('form').serialize(),
        success: function (data) {
            if(data != '查询出现错误！'){
                var hdata = '<th width="80px">学号</th><th width="80px">学院</th><th width="80px">专业</th><th width="80px">班级</th><th width="80px">年级</th><th width="80px">学制</th><th width="80px">修改</th><th width="80px">删除</th>';
                
                $('table').empty();
                $('table').append(hdata);
                $('table').append(data);
            }else{
                $('table').empty();
                $('table').append('没有找到~');
            }

        }
    });
    // return false;
}
//修改
function change_base(obj) {
    window.location.href='info_change.php?'+obj.name+'='+obj.value;
}
function change_status(obj) {
    window.location.href='XJinfo_change.php?'+obj.name+'='+obj.value;
}

//删除base记录
function del_base(obj) {
    $.ajax({
    type: 'get',
    url: './del_base.php',
    data: obj.name+'='+obj.value,
    success: function(data){
        if(data == 1){
            alert('删除记录成功!');
            search_base();
        }else if (data == 0){
            alert('删除失败!');
        }
    }
});
return false;
}

//删除base记录
function del_status(obj) {
    $.ajax({
    type: 'get',
    url: './del_status.php',
    data: obj.name+'='+obj.value,
    success: function(data){
        if(data == 1){
            alert('删除记录成功!');
            search_status();
        }else if (data == 0){
            alert('删除失败!');
        }
    }
});
return false;
}

function change_data_base(){
    var snum = $("input[name='snum']").val();
    var user = $("span[name='snum']").text();
    if (snum !== user){
    alert('学号不可以修改哦');
    $("input[name='snum']").focus();
    return false;
    }else{
            $.ajax({
            type: 'post',
            url: './update_data.php',
            data: $('form').serialize(),
            success: function(data){
                if(data == 1){
                    alert('恭喜你,更新成功!');
                }else if (data == 0){
                    alert('更新失败!');
                }
            }
        });
        return false;
    }

}
function add_data_base(){
    $.ajax({
        type: 'post',
        url: './add_base.php',
        data: $('form').serialize(),
        success: function(data){
            if(data == 1){
                alert('恭喜你,添加成功!');
            }else if (data == 0){
                alert('提交失败!');
            }
        }
    });
    return false;
}

function change_data_status(){
    var snum = $("input[name='snum']").val();
    var user = $("span[name='snum']").text();
    if (snum !== user){
    alert('学号不可以修改哦');
    $("input[name='snum']").focus();
    return false;
    }else{
            $.ajax({
            type: 'post',
            url: './update_status.php',
            data: $('form').serialize(),
            success: function(data){
                if(data == 1){
                    alert('恭喜你,更新成功!');
                }else if (data == 0){
                    alert('更新失败!');
                }
            }
        });
        return false;
    }

}

function add_data_status(){
    $.ajax({
        type: 'post',
        url: './add_status.php',
        data: $('form').serialize(),
        success: function(data){
            if(data == 1){
                alert('恭喜你,添加成功!');
            }else if (data == 0){
                alert('提交失败!');
            }
        }
    });
    return false;
}

function logout(){
    $.post("../../login/login.php?action=logout",function(msg){
        if(msg == 0){
            window.location.href = '../../login/index.html';
        }
    });
}

function login(){
    $.ajax({
        dataType: 'text',
        type: 'post',
        url: './login.php?action=login',
        data: $('form').serialize(),
        success: function(data){
            if(data == 1){
                window.location.href = '../manager/baseinfo/info_view.php';
            }else if(data == 3){
                alert('用户名或密码错误！');
            }        
        }
    });
    return false;
}