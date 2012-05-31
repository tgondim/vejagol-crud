<?php
$this->breadcrumbs=array(
	'Jogos'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Jogo', 'url'=>array('index')),
	array('label'=>'Create Jogo', 'url'=>array('create')),
	array('label'=>'Update Jogo', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Jogo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jogo', 'url'=>array('admin')),
);
?>

<h1>View Jogo #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'DATA',
		'TIME_CASA',
		'TIME_VISITANTE',
		'PLACAR_CASA',
		'PLACAR_VISITANTE',
		'CAMPEONATO',
		'LIGA',
		'LINK',
	),
)); ?>
