<?php

    $controlador = $this->getId();
    $pagina = $this->getAction()->getId(); 
 
    
    
    if(Yii::app()->session['var'] != NULL)
            {

     
?>


   
  
    <div class="style_user well">
    <h3>perfil    
   <?php 
                        $empaque=Usuarios::model()->findByPk(Yii::app()->session['var']);
                       $nombre=$empaque->nom_usuario;
                       $apellido=$empaque->apel1_usuario;
    
    echo $nombre." ".$apellido;  
        
     
    ?>
    </h3>
    




        <b><?php echo CHtml::encode($empaque->getAttributeLabel('rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($empaque->rut_usuario), array('view', 'id'=>$empaque->id_usuario)); ?>
	<br />
        
        <b><?php echo CHtml::encode($empaque->getAttributeLabel('nom_usuario')); ?>:</b>
	<?php echo CHtml::encode($empaque->nom_usuario." ".$empaque->apel1_usuario." ".$empaque->apel2_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($empaque->getAttributeLabel('carrera')); ?>:</b>
	<?php echo $empaque->carreras->nom_carrera; ?>
	<br />
        
        <b><?php echo CHtml::encode($empaque->getAttributeLabel('universidad')); ?>:</b>
	<?php echo $empaque->carreras->universidades->nom_univ; ?>
	<br />

        <b><?php echo CHtml::encode($empaque->getAttributeLabel('comuna')); ?>:</b>
	<?php echo $empaque->comunas->nom_comuna; ?>
	<br />
	
        <b><?php echo CHtml::encode($empaque->getAttributeLabel('provincia')); ?>:</b>
	<?php echo CHtml::encode($empaque->comunas->provincias->nom_provincia); ?>
	<br />
        
        <b><?php echo CHtml::encode($empaque->getAttributeLabel('region')); ?>:</b>
	<?php echo CHtml::encode($empaque->comunas->provincias->regiones->nom_region); ?>
	<br />
        
        

        <br><br><br>
        
        <a href="<?php echo Yii:: app() ->baseUrl.'/site/mperfil' ?>"><h3>Modificar datos</h3></a>

        
        </div>
        <!--fuera de sesion-->
<?php

            }
      
      if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }
            
  ?>