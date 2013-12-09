<?php
/* @var $this TurnosController */
/* @var $model Turnos */

$this->breadcrumbs=array(
	'Turnoses'=>array('index'),
	$model->id_turno=>array('view','id'=>$model->id_turno),
	'Update',
);

$this->menu=array(
	array('label'=>'List Turnos', 'url'=>array('index')),
	array('label'=>'Create Turnos', 'url'=>array('create')),
	array('label'=>'View Turnos', 'url'=>array('view', 'id'=>$model->id_turno)),
	array('label'=>'Manage Turnos', 'url'=>array('admin')),
);
?>

<h1>Update Turnos <?php echo $model->id_turno; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>