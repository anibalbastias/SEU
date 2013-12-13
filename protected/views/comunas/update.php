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
	$model->id_comuna=>array('view','id'=>$model->id_comuna),
	'Update',
);

$this->menu=array(
	array('label'=>'List Comunas', 'url'=>array('index')),
	array('label'=>'Create Comunas', 'url'=>array('create')),
	array('label'=>'View Comunas', 'url'=>array('view', 'id'=>$model->id_comuna)),
	array('label'=>'Manage Comunas', 'url'=>array('admin')),
);
?>

<h1>Update Comunas <?php echo $model->id_comuna; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model));


}}

if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }






?>