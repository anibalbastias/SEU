<?php
/* @var $this ComunasController */
/* @var $model Comunas */

$this->breadcrumbs=array(
	'Comunases'=>array('index'),
	$model->id_comuna=>array('view','id'=>$model->id_comuna),
	'Update',
);

$this->menu=array(
	array('label'=>'List Comunas', 'url'=>array('index')),
	array('label'=>'Create Comunas', 'url'=>array('create')),
	array('label'=>'View Comunas', 'url'=>array('view', 'id'=>$model->id_comuna)),
	array('label'=>'Manage Comunas', 'url'=>array('admin')),
);
?>

<h1>Update Comunas <?php echo $model->id_comuna; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>