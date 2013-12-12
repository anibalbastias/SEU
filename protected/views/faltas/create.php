<?php
/* @var $this FaltasController */
/* @var $model Faltas */

$this->breadcrumbs=array(
	'Faltas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Faltas', 'url'=>array('index')),
	array('label'=>'Administrar Faltas', 'url'=>array('admin')),
);
?>

<h1>Create Faltas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>