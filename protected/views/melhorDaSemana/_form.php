<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'melhor-da-semana-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'SEMANA'); ?>
		<?php echo $form->textField($model,'SEMANA',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'SEMANA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MES'); ?>
		<?php echo $form->textField($model,'MES',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'MES'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ANO'); ?>
		<?php echo $form->textField($model,'ANO',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ANO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LINK'); ?>
		<?php echo $form->textField($model,'LINK',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'LINK'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->