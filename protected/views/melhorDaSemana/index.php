<?php
$this->breadcrumbs=array(
	'Melhor Da Semanas',
);

$this->menu=array(
	array('label'=>'Create MelhorDaSemana', 'url'=>array('create')),
	array('label'=>'Manage MelhorDaSemana', 'url'=>array('admin')),
);
?>

<h1>Melhor Da Semanas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
