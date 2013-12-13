<?php
/* @var $this TurnosController */
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
	'Turnos',
);

$this->menu=array(
	array('label'=>'Crear Turnos', 'url'=>array('create')),
	array('label'=>'Administrar Turnos', 'url'=>array('admin')),
);
?>

<h1>Turnos</h1>

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
