<?php
/* @var $this UsuariosHasTurnosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Usuarios Has Turnoses',
);

$this->menu=array(
	array('label'=>'Create UsuariosHasTurnos', 'url'=>array('create')),
	array('label'=>'Manage UsuariosHasTurnos', 'url'=>array('admin')),
);
?>

<h1>Usuarios Has Turnoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
