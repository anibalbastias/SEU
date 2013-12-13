<?php
/* @var $this ComunasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Comunas',
);

$this->menu=array(
	array('label'=>'Crear Comunas', 'url'=>array('create')),
	array('label'=>'Administrar Comunas', 'url'=>array('admin')),
);
?>

<h1>Comunas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
