<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jogo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'DATA'); ?>
		<?php echo $form->textField($model,'DATA'); ?>
		<?php echo $form->error($model,'DATA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TIME_CASA'); ?>
		<?php echo $form->textField($model,'TIME_CASA',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'TIME_CASA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TIME_VISITANTE'); ?>
		<?php echo $form->textField($model,'TIME_VISITANTE',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'TIME_VISITANTE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PLACAR_CASA'); ?>
		<?php echo $form->textField($model,'PLACAR_CASA',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'PLACAR_CASA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PLACAR_VISITANTE'); ?>
		<?php echo $form->textField($model,'PLACAR_VISITANTE',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'PLACAR_VISITANTE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CAMPEONATO'); ?>
		<?php echo $form->textField($model,'CAMPEONATO',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'CAMPEONATO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LIGA'); ?>
		<?php echo $form->textField($model,'LIGA',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'LIGA'); ?>
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