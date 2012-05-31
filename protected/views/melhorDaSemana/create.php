<?php
$this->breadcrumbs=array(
	'Melhor Da Semanas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MelhorDaSemana', 'url'=>array('index')),
	array('label'=>'Manage MelhorDaSemana', 'url'=>array('admin')),
);
?>

<h1>Create MelhorDaSemana</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>