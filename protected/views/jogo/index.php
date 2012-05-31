<?php
$this->breadcrumbs=array(
	'Jogos',
);

$this->menu=array(
	array('label'=>'Create Jogo', 'url'=>array('create')),
	array('label'=>'Manage Jogo', 'url'=>array('admin')),
);
?>

<h1>Jogos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
