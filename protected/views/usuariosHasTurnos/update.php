<?php
/* @var $this UsuariosHasTurnosController */
/* @var $model UsuariosHasTurnos */

$this->breadcrumbs=array(
	'Turnos de Usuarios'=>array('index'),
	$model->usuarios_id_usuario=>array('view','id'=>$model->usuarios_id_usuario),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Turnos de Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Turnos de Usuarios', 'url'=>array('create')),
	array('label'=>'Ver Turnos de Usuarios', 'url'=>array('view', 'id'=>$model->usuarios_id_usuario)),
	array('label'=>'Administrar Turnos de Usuarios', 'url'=>array('admin')),
);
?>

<h1>Update UsuariosHasTurnos <?php echo $model->usuarios_id_usuario; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>