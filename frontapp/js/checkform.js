/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and form表单验证
 */
$(document).ready(function(){
    $.formValidator.initConfig({formid:"sub_form",debug:false,submitonce:true,
            onerror:function(msg,obj,errorlist){
                    //$.map(errorlist,function(msg1){alert(msg1)});
                    alert(msg);
            }
    });
    $("#t_UserName").formValidator({onshow:"5-10个字符",onfocus:"5-10个字符",oncorrect:"该用户名可以注册"}).inputValidator({min:5,max:10,onerror:"输入有误"}).regexValidator({regexp:"username",datatype:"enum",onerror:"格式有误"});
    $("#iptNickName").formValidator({onshow:"至少4个字符",onfocus:"至少4个字符",oncorrect:"通过"}).inputValidator({min:4,empty:{leftempty:false,rightempty:false,emptyerror:"输入有误"},onerror:"输入有误"});
    $("#t_UserPass").formValidator({onshow:"至少6个字符",onfocus:"至少6个字符",oncorrect:"密码合法"}).inputValidator({min:6,empty:{leftempty:false,rightempty:false,emptyerror:"输入有误"},onerror:"输入有误"});
    $("#t_RePass").formValidator({onshow:"请再次输入密码",onfocus:"请再次输入密码",oncorrect:"密码一致"}).inputValidator({min:6,empty:{leftempty:false,rightempty:false,emptyerror:"输入有误"},onerror:"输入有误"}).compareValidator({desid:"t_UserPass",operateor:"=",onerror:"密码不一致"});	
    $("#iptName").formValidator({onshow:"至少4个字符",onfocus:"至少4个字符",oncorrect:"通过"}).inputValidator({min:4,empty:{leftempty:false,rightempty:false,emptyerror:"输入有误"},onerror:"输入有误"});
    $("#iptCard").formValidator({onshow:"15或18位的身份证",onfocus:"15或18位的身份证",oncorrect:"输入正确"}).functionValidator({fun:isCardID});
    $("#t_Email").formValidator({onshow:"6-100个字符",onfocus:"6-100个字符",oncorrect:"恭喜你,你输对了",defaultvalue:"@"}).inputValidator({min:6,max:100,onerror:"长度非法"}).regexValidator({regexp:"^([\\w-.]+)@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.)|(([\\w-]+.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(]?)$",onerror:"格式不正确"});
});

