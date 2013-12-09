<?php
/* @var $this UniversidadesController */
/* @var $model Universidades */

$this->breadcrumbs=array(
	'Universidades'=>array('index'),
	$model->id_univ=>array('view','id'=>$model->id_univ),
	'Update',
);

$this->menu=array(
	array('label'=>'List Universidades', 'url'=>array('index')),
	array('label'=>'Create Universidades', 'url'=>array('create')),
	array('label'=>'View Universidades', 'url'=>array('view', 'id'=>$model->id_univ)),
	array('label'=>'Manage Universidades', 'url'=>array('admin')),
);
?>

<h1>Update Universidades <?php echo $model->id_univ; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>