<?php
/* @var $this UniversidadesController */
/* @var $model Universidades */

$this->breadcrumbs=array(
	'Universidades'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Universidades', 'url'=>array('index')),
	array('label'=>'Manage Universidades', 'url'=>array('admin')),
);
?>

<h1>Create Universidades</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>