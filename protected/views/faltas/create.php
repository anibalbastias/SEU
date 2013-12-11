<?php
/* @var $this FaltasController */
/* @var $model Faltas */

$this->breadcrumbs=array(
	'Faltases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Faltas', 'url'=>array('index')),
	array('label'=>'Manage Faltas', 'url'=>array('admin')),
);
?>

<h1>Create Faltas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>