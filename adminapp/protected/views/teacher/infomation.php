<?php require_once("left.php");?>
<script type="text/javascript" src="js/regin.js"></script>
<link rel="stylesheet" type="text/css" href="css/userinformation.css"></script>
<script type="text/javascript" src="js/formValidator_min.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/formValidatorRegex.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/checkform.js" charset="UTF-8"></script>
<div class="content_right">
    <form name="sub_form" id="sub_form" action="">
    <table class="tab_information">
        <tr>
            <td colspan="2">基础信息录入</td> 
        </tr>
        <tr>
            <td><span>姓名：</span></td>
            <td><input type="text" class="txt_information" name="user_name"/></td>
        </tr>
        <tr>
            <td><span>性别：</span></td>
            <td><div class="radio_infation"><input type="radio" name="user_sex" value="1">男</div><div class="radio_infation"><input type="radio" name="user_sex" value="2">女</div><div style="clear: both"></div></td>
        </tr>
        <tr>
            <td><span>出生日期：</span></td>
            <td><input type="text" class="txt_information" name="user_birth"></td>
        </tr>
        <tr>
            <td><span>民族：</span></td>
            <td><input type="text" class="txt_information" name="user_nation"></td>
        </tr>
        <tr>
            <td><span>现居地：</span></td>
            <td><input type="hidden" class="txt_name" name="user_present_address"><?php print_r($list);?><span id="city" ></span><span id="area"></span></td>
        </tr>
        <tr>
            <td><span>身份证：</span></td>
            <td><input type="text" class="txt_information" name="identity_card" id="iptCard"><span id="iptCardTip" class="onshow"></span></td>
        </tr>
        <tr>
            <td><span>邮箱：</span></td>
            <td><input type="text" class="txt_information" name="user_emal" id="t_Email"><span id="t_EmailTip" class="onshow"></span></td>
        </tr>
        <tr>
            <td><span>手机：</span></td>
            <td><input type="text" class="txt_information" name="user_iphone" id="t_iphone"><span id="t_iphoneTip" class="onshow"></span></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" class="btn_submit" value="提交"></td>
        </tr>
    </table>
    </form>
</div>

