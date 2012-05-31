<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SEMANA')); ?>:</b>
	<?php echo CHtml::encode($data->SEMANA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MES')); ?>:</b>
	<?php echo CHtml::encode($data->MES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ANO')); ?>:</b>
	<?php echo CHtml::encode($data->ANO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LINK')); ?>:</b>
	<?php echo CHtml::encode($data->LINK); ?>
	<br />


</div>