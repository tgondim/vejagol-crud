<?php
$this->breadcrumbs=array(
	'Jogos'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Jogo', 'url'=>array('index')),
	array('label'=>'Create Jogo', 'url'=>array('create')),
	array('label'=>'View Jogo', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Jogo', 'url'=>array('admin')),
);
?>

<h1>Update Jogo <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>