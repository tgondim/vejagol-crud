<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATA')); ?>:</b>
	<?php echo CHtml::encode($data->DATA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIME_CASA')); ?>:</b>
	<?php echo CHtml::encode($data->TIME_CASA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIME_VISITANTE')); ?>:</b>
	<?php echo CHtml::encode($data->TIME_VISITANTE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PLACAR_CASA')); ?>:</b>
	<?php echo CHtml::encode($data->PLACAR_CASA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PLACAR_VISITANTE')); ?>:</b>
	<?php echo CHtml::encode($data->PLACAR_VISITANTE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CAMPEONATO')); ?>:</b>
	<?php echo CHtml::encode($data->CAMPEONATO); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('LIGA')); ?>:</b>
	<?php echo CHtml::encode($data->LIGA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LINK')); ?>:</b>
	<?php echo CHtml::encode($data->LINK); ?>
	<br />

	*/ ?>

</div>