<?php
/* @var $this TurnosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Turnos',
);

$this->menu=array(
	array('label'=>'Crear Turnos', 'url'=>array('create')),
	array('label'=>'Administrar Turnos', 'url'=>array('admin')),
);
?>

<h1>Turnoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
