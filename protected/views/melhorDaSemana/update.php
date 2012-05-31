<?php
$this->breadcrumbs=array(
	'Melhor Da Semanas'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List MelhorDaSemana', 'url'=>array('index')),
	array('label'=>'Create MelhorDaSemana', 'url'=>array('create')),
	array('label'=>'View MelhorDaSemana', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage MelhorDaSemana', 'url'=>array('admin')),
);
?>

<h1>Update MelhorDaSemana <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>