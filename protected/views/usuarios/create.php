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
	'Crear',
);

//$this->menu=array(
//	array('label'=>'List Usuarios', 'url'=>array('index')),
//	array('label'=>'Manage Usuarios', 'url'=>array('admin')),
//);
?>

<div class="">
        <div class="row-fluid" style="background-color: #00b2d9; color:white;">
            <div class="span12">
                <h3 style="margin-left: 20px;">Crear Empaques </h3>
            </div>    
        </div>
        </div>

<!--<h3>Crear Usuarios</h3>-->

<?php echo $this->renderPartial('_form', array('model'=>$model));

}}

if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }






?>