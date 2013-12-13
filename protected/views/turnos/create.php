<?php
/* @var $this TurnosController */
/* @var $model Turnos */

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
	'Turnos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Turnos', 'url'=>array('index')),
	array('label'=>'Administrar Turnos', 'url'=>array('admin')),
);
?>

<h1>Crear Turnos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model));

}}

if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }



?>