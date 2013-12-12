<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->id_usuario=>array('view','id'=>$model->id_usuario),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuarios', 'url'=>array('create')),
	array('label'=>'Ver Usuarios', 'url'=>array('view', 'id'=>$model->id_usuario)),
	array('label'=>'Adminstrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Modificar Usuarios <?php echo $model->id_usuario; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>