<?php
$this->breadcrumbs=array(
	'Melhor Da Semanas'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List MelhorDaSemana', 'url'=>array('index')),
	array('label'=>'Create MelhorDaSemana', 'url'=>array('create')),
	array('label'=>'Update MelhorDaSemana', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete MelhorDaSemana', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MelhorDaSemana', 'url'=>array('admin')),
);
?>

<h1>View MelhorDaSemana #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'SEMANA',
		'MES',
		'ANO',
		'LINK',
	),
)); ?>
