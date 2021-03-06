<?php
/* @var $this FaltasController */
/* @var $model Faltas */

$this->breadcrumbs=array(
	'Faltas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Faltas', 'url'=>array('index')),
	array('label'=>'Crear Faltas', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('faltas-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php header("Location: ".Yii:: app() ->baseUrl.'/usuarios/admin'); ?>


<h1>Administrar Faltas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'faltas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_falta',
		'usuarios_id_usuario',
		'desc_falta',
		'tipo_falta',
		'fecha_falta',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
