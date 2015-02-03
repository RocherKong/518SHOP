<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>注册</title>
<script type="text/javascript" src="js/formValidator_min.js" ></script>
<script type="text/javascript" src="js/formValidatorRegex.js" ></script>
<script type="text/javascript" src="js/checkform.js" ></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#reg_close").click(function(){
        $.XYTipsWindow.removeBox();
        $.XYTipsWindow({
                ___title:"登录",
                ___content:"url:POST?index.php?r=index/login",
                ___width:"460",
                ___height:"150",
                ___showbg:false,
                ___drag:"___boxTitle"
        });
    });
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

<!--注册开始-->
    <div class="reg">
        <form action="" method="post" name="sub_form" id="form1">
            <dl>
                <dt class="f14 b">帐户基本信息</dt>
                <dd><span class="title">登录账号：</span><input class="reg_input" name="t_UserName" id="t_UserName" onblur="checkusername(this.value);" type="text" /><span id="t_UserNameTip" class="onshow"></span></dd>
                <dd><span class="title">昵称：</span><input class="reg_input" name="iptNickName" id="iptNickName" onblur="checkNickName(this.value)" type="text" /><span id="iptNickNameTip" class="onshow"></span></dd>
                <dd><span class="title">性别：</span><input type="radio" id="Sex_Man" name="rb_Sex" value="0" checked="CHECKED" /><label for="Sex_Man"> 帅哥</label>
                                                    <input type="radio" id="Sex_Woman" name="rb_Sex" value="0" /><label for="Sex_Woman"> 美女</label>　
                                                    <input name="" type="checkbox" value="" /> 不公开
              </dd>
            </dl>
            <dl>
                <dt class="f14 b">帐户安全设置</dt>
                <dd><span class="title">登录密码：</span><input class="reg_input" onblur="return checkpasswd(this);" id="t_UserPass" name="t_UserPass" type="password"/><span id="t_UserPassTip" class="onshow"></span></dd>
                <dd><span class="title">确认登录密码：</span><input onblur="checkdoublepassword();" class="reg_input" type="password" id="t_RePass" name="t_RePass"/><span id="t_RePassTip" class="onshow"></span></dd>
                <dd><span class="title">真实姓名：</span><input name="iptName" id="iptName" class="reg_input" type="text" onblur="return isCnn(this)" /><span id="iptNameTip" class="onshow"></span></dd>
                <dd><span class="title">身份证号：</span><input class="reg_input" name='iptCard' type='text' id='iptCard' onblur="return checktheform();" /><span id="iptCardTip" class="onshow"></span></dd>
                <dd><span class="title">邮箱地址：</span><input class="reg_input" name="t_Email" type="text" id="t_Email" onblur="checkemail(this.value)" /><span id="t_EmailTip" class="onshow"></span></dd>
                <dd><span class="title">验证码：</span><input id="t_CheckCode" class="reg_input_pic" name="t_CheckCode" type="text" maxlength="4" />
                <img class="img" src="images/eee.jpg" width="60" height="30" /><span id="t_CheckCodeTip" class="reg_m onError in_pic_s">sdsdas</span></dd>
            </dl>
            <div class="f_reg_but"><input id="button" name="button" type="submit" value="免费注册" class="r_button"/><span class="clew_txt">如果您已有帐号，可<a href="javascript:void(0)" id="reg_close">直接登录</a></span></div>
        </form>                              
    </div>
<!--注册结束-->        
</body>
</html>