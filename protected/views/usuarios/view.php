<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */


if(Yii::app()->session['var'] != NULL)
{
    $usuario=Usuarios::model()->findByPk(Yii::app()->session['var']);
    
    if( $usuario->rut_usuario != 'admin') 
       {
    
        header("Location: ".Yii:: app() ->baseUrl.'/site/index');
        
       }
    
    if( $usuario->rut_usuario == 'admin') 
       {
    



$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->id_usuario,
);

//$this->menu=array(
//	array('label'=>'Listar Usuarios', 'url'=>array('index')),
//	array('label'=>'Crear Usuarios', 'url'=>array('create')),
//	array('label'=>'Modificar Usuarios', 'url'=>array('update', 'id'=>$model->id_usuario)),
//	array('label'=>'Eliminar Usuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_usuario),'confirm'=>'¿Estas seguro de eliminar este usuario?')),
//	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
//);
//?>

<h1>Usuario #<?php echo $model->id_usuario; ?></h1>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_usuario',
		'carreras_id_carrera',
		'comunas_id_comuna',
		'nom_usuario',
		'apel1_usuario',
		'apel2_usuario',
		'rut_usuario',
		'dir_usuario',
		'email_usuario',
		'cel_usuario',
		'estudios_usuario',
		'fnac_usuario',
		'genero_usuario',
		'hijos_usuario',
		'pass_usuario',
	),
)); 


}}

if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }




?>
