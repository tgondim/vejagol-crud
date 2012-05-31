<?php
$this->breadcrumbs=array(
	'Jogos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Jogo', 'url'=>array('index')),
	array('label'=>'Manage Jogo', 'url'=>array('admin')),
);
?>

<h1>Create Jogo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>