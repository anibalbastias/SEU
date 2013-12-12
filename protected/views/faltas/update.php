<?php
/* @var $this FaltasController */
/* @var $model Faltas */

$this->breadcrumbs=array(
	'Faltas'=>array('index'),
	$model->id_falta=>array('view','id'=>$model->id_falta),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Faltas', 'url'=>array('index')),
	array('label'=>'Crear Faltas', 'url'=>array('create')),
	array('label'=>'Ver Faltas', 'url'=>array('view', 'id'=>$model->id_falta)),
	array('label'=>'Administrar Faltas', 'url'=>array('admin')),
);
?>

<h1>Update Faltas <?php echo $model->id_falta; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>