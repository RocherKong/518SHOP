<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>登录</title>
<link rel="stylesheet" type="text/css" href="css/login.css"/>
<script type="text/javascript" src="js/formValidator_min.js"></script>
<script type="text/javascript" src="js/formValidatorRegex.js" ></script>
<script type="text/javascript"src="js/checkform.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#login_close").click(function(){
            $.XYTipsWindow.removeBox();
            $.XYTipsWindow({
                    ___title:"注册",
                    ___content:"url:POSt?index.php?r=index/reg",
                    ___width:"460",
                    ___height:"450",
                    ___showbg:false,
                    ___drag:"___boxTitle"
            });
    });
    $.formValidator.initConfig({formid:"form1",debug:false,submitonce:true,
            onerror:function(msg,obj,errorlist){
                    //$.map(errorlist,function(msg1){alert(msg1)});
                    alert(msg);
            }
    });
    $("#t_UserName").formValidator({onshow:"5-10个字符",onfocus:"5-10个字符",oncorrect:"该用户名可以注册"}).inputValidator({min:5,max:10,onerror:"输入有误"}).regexValidator({regexp:"username",datatype:"enum",onerror:"格式有误"});
    $("#t_UserPass").formValidator({onshow:"至少6个字符",onfocus:"至少6个字符",oncorrect:"密码合法"}).inputValidator({min:6,empty:{leftempty:false,rightempty:false,emptyerror:"输入有误"},onerror:"输入有误"});	
});
function test1(obj)
{
    if(obj.value=="全角字符当做1个长度")
    {
        $.formValidator.getInitConfig("1").wideword = false;
        obj.value = "全角字符当做2个长度";
    }
    else
    {
        $.formValidator.getInitConfig("1").wideword = true;
        obj.value = "全角字符当做1个长度";
    }
}
</script>
</head>
<body>
<!--登录开始-->
<div class="reg login">
    <form action="" method="post" name="form1" id="form1">
        <table>
            <tr>
                <td><span class="title">登录账号：</span></td>
                <td><input class="reg_input" name="t_UserName" id="t_UserName" onblur="checkusername(this.value);" type="text" /><span id="t_UserNameTip" class="onshow"></span></td>
            </tr>
            <tr><td><span class="title">登录密码：</span></td>
                <td><input class="reg_input" onblur="return checkpasswd(this);" id="t_UserPass" name="t_UserPass" type="password"/><span id="t_UserPassTip" class="onshow"></span></td>
            </tr>
            <tr>
                <input id="button" name="button" type="submit" value="登录" class=""/><span class="clew_txt">还没账号？<a href="javascript:void(0)" id="login_close">立即注册</a></span>
            </tr>
        </table>
    </form>                      
</div>
<!--登录结束-->   
</body>
</html>