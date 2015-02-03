<div id="login_page">
        <div class="login_header">
            <h1>
                <a src="#"><img src="/images/logo.jpg" /></a>
            </h1>
        </div>
        <div class="login_content">
            <div class="login_content_left">
                <a src="#"><img src="/images/log_eyes.jpg" /></a>
            </div>
            <div class="login_content_right">
                <div class="login_border">
                    <?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'login-form',
                            'enableClientValidation'=>true,
                            'clientOptions'=>array(
                                    'validateOnSubmit'=>true,
                            ),
                    )); ?>
                    <div class="login_text_h1">
                        登录
                    </div>
                    <div class="login_text">
                        <?php echo $form->textField($model,'name',array('class'=>"txt_user user")); ?>
                        <?php echo $form->error($model,'name'); ?>
                    </div>
                    <div class="login_text">
                        <?php echo $form->passwordField($model,'password',array('class'=>"txt_user pass")); ?>
                        <?php echo $form->error($model,'password'); ?>
                    </div>
                    <div class="foget_password">
                        <a href="findpwd">忘记密码？</a>
                    </div>
                    <div class="btn_login">
                        <?php echo CHtml::submitButton('登录',array('class'=>'btn_login_sub')); ?>
                        
                        <div class="foget_password">
                            <a>免费注册</a>
                        </div>
                    </div>
                </div>
                
                <?php $this->endWidget(); ?>
            </div>
            <div style="clear: both"></div>
        </div>
</div>


