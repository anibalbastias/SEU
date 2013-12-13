<?php
/* @var $this UniversidadesController */
/* @var $model Universidades */

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
	'Universidades'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Universidades', 'url'=>array('index')),
	array('label'=>'Manage Universidades', 'url'=>array('admin')),
);
?>

<h1>Create Universidades</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model));

}}

if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }




?>