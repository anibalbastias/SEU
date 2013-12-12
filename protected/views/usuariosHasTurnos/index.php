<?php
/* @var $this UsuariosHasTurnosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Turnos de Usuarios',
);

$this->menu=array(
	array('label'=>'Crear Turnos de Usuarios', 'url'=>array('create')),
	array('label'=>'Administrar Turnos de Usuarios', 'url'=>array('admin')),
);
?>

<h1>Turnos de Usuarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
