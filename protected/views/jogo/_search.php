<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DATA'); ?>
		<?php echo $form->textField($model,'DATA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TIME_CASA'); ?>
		<?php echo $form->textField($model,'TIME_CASA',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TIME_VISITANTE'); ?>
		<?php echo $form->textField($model,'TIME_VISITANTE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PLACAR_CASA'); ?>
		<?php echo $form->textField($model,'PLACAR_CASA',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PLACAR_VISITANTE'); ?>
		<?php echo $form->textField($model,'PLACAR_VISITANTE',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CAMPEONATO'); ?>
		<?php echo $form->textField($model,'CAMPEONATO',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LIGA'); ?>
		<?php echo $form->textField($model,'LIGA',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LINK'); ?>
		<?php echo $form->textField($model,'LINK',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->