<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<?php echo $form->labelEx($model,'name'); ?>
<?php echo $form->textField($model,'name'); ?>
<?php echo $form->error($model,'name'); ?>

<?php echo $form->labelEx($model,'email'); ?>
<?php echo $form->textField($model,'email'); ?>
<?php echo $form->error($model,'email'); ?>

<div class="form-group">
    <?php echo CHtml::submitButton('Login'); ?>
</div>
<?php $this->endWidget(); ?>