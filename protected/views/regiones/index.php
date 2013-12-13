<?php
/* @var $this RegionesController */
/* @var $dataProvider CActiveDataProvider */

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
	'Regiones',
);

$this->menu=array(
	array('label'=>'Crear Regiones', 'url'=>array('create')),
	array('label'=>'Administrar Regiones', 'url'=>array('admin')),
);
?>

<h1>Regiones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));

   }
       
       }     

if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }




?>
