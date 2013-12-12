<?php
/* @var $this TurnosController */
/* @var $model Turnos */

$this->breadcrumbs=array(
	'Turnos'=>array('index'),
	$model->id_turno=>array('view','id'=>$model->id_turno),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Turnos', 'url'=>array('index')),
	array('label'=>'Crear Turnos', 'url'=>array('create')),
	array('label'=>'Ver Turnos', 'url'=>array('view', 'id'=>$model->id_turno)),
	array('label'=>'Administrar Turnos', 'url'=>array('admin')),
);
?>

<h1>Update Turnos <?php echo $model->id_turno; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>