<?php
/* @var $this ComunasController */
/* @var $model Comunas */

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
	'Comunases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Comunas', 'url'=>array('index')),
	array('label'=>'Manage Comunas', 'url'=>array('admin')),
);
?>

<h1>Create Comunas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); 


}}

if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }






?>