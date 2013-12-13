<?php
/* @var $this UsuariosHasTurnosController */
/* @var $model UsuariosHasTurnos */


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
	'Turnos de Usuarios'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Turnos de Usuarios', 'url'=>array('index')),
	array('label'=>'Administrar Turnos de Usuario', 'url'=>array('admin')),
);
?>

<h1>Crear Turno de Usuario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model));


}}

if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }




?>