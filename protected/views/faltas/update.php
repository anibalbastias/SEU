<?php
/* @var $this FaltasController */
/* @var $model Faltas */

$this->breadcrumbs=array(
	'Faltases'=>array('index'),
	$model->id_falta=>array('view','id'=>$model->id_falta),
	'Update',
);

$this->menu=array(
	array('label'=>'List Faltas', 'url'=>array('index')),
	array('label'=>'Create Faltas', 'url'=>array('create')),
	array('label'=>'View Faltas', 'url'=>array('view', 'id'=>$model->id_falta)),
	array('label'=>'Manage Faltas', 'url'=>array('admin')),
);
?>

<h1>Update Faltas <?php echo $model->id_falta; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>