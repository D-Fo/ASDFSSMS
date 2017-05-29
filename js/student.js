function add_data_base(){
    var snum = $("input[name='snum']").val();
    var user = $("span[name='snum']").text();
    // var sname = $("input[name='sname']").val();
    // var ssex = $("input[name='ssex']").val();
    // var srace = $("input[name='srace']").val();
    // var sid = $("input[name='sid']").val();
    // var sbirth = $("input[name='sbirth']").val();
    // var shome = $("input[name='shome']").val();
    if (snum != user){
        alert('输入的学号和登陆的学号不一致!');
        $("input[name='snum']").focus();
        return false;
    }else{
        $.ajax({
            type: 'post',
            url: './add_base.php',
            data: $('form').serialize(),
            success: function(data){
                if(data == 1){
                    alert('恭喜你,添加成功!');
                    window.location.href='./info_view.php';
                }else if (data == 0){
                    alert('提交失败!');
                }
            }
        });
        return false;
    }
}

function change_data_base(){
    var snum = $("input[name='snum']").val();
    var user = $("span[name='snum']").text();
    if (snum != user){
    alert('学号不可以修改哦');
    $("input[name='snum']").focus();
    return false;
    }else{
            $.ajax({
            type: 'post',
            url: './update_base.php',
            data: $('form').serialize(),
            success: function(data){
                if(data == 1){
                    alert('恭喜你,更新成功!');
                    window.location.href='./info_view.php';
                }else if (data == 0){
                    alert('更新失败!');
                }
            }
        });
        return false;
    }

}

function add_data_status(){
    var snum = $("input[name='snum']").val();
    var user = $("span[name='snum']").text();
    // var sname = $("input[name='sname']").val();
    // var ssex = $("input[name='ssex']").val();
    // var srace = $("input[name='srace']").val();
    // var sid = $("input[name='sid']").val();
    // var sbirth = $("input[name='sbirth']").val();
    // var shome = $("input[name='shome']").val();
    if (snum != user){
        alert('输入的学号和登陆的学号不一致!');
        $("input[name='snum']").focus();
        return false;
    }else{
        $.ajax({
            type: 'post',
            url: './add_status.php',
            data: $('form').serialize(),
            success: function(data){
                if(data == 1){
                    alert('恭喜你,添加成功!');
                    window.location.href='./XJinfo_view.php';
                }else if (data == 0){
                    alert('提交失败!');
                }
            }
        });
        return false;
    }
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