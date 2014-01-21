<?php

    $controlador = $this->getId();
    $pagina = $this->getAction()->getId(); 
 
    if(Yii::app()->session['var'] != NULL)
    {
 
?>  
    <div class="style_user">
    <h3>Perfil    
   <?php 
            $empaque=Usuarios::model()->findByPk(Yii::app()->session['var']);
           $nombre=$empaque->nom_usuario;
           $apellido=$empaque->apel1_usuario;
    
            echo $nombre." ".$apellido;  
        
     
    ?>
    </h3>
    
    <div class="row-fluid">    
       <div class="span3">    
    
                
                <?php
                
                if($empaque->img_usuario == "1")
                {
                    echo CHtml::image(Yii::app()->request->baseUrl.'/img/users/'.$empaque->id_usuario.".jpg","id_usuario",array("width"=>176));
                }
                else
                {
                    echo CHtml::image(Yii::app()->request->baseUrl.'/img/users/gen.png',"id_usuario",array("width"=>176));
                }
                
                ?>
                
                
            </div>
        
        <div class="span9">
        <b><?php echo CHtml::encode($empaque->getAttributeLabel('rut')); ?>:</b>
	<?php echo $empaque->rut_usuario; ?>
	
	<br />
        
        <b><?php echo CHtml::encode($empaque->getAttributeLabel('nom_usuario')); ?>:</b>
	<?php echo CHtml::encode($empaque->nom_usuario." ".$empaque->apel1_usuario." ".$empaque->apel2_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($empaque->getAttributeLabel('carrera')); ?>:</b>
	<?php echo $empaque->carreras->nom_carrera; ?>
	<br />
        
        <!--<b><?php // echo CHtml::encode($empaque->getAttributeLabel('universidad')); ?>:</b>-->
	<?php // echo $empaque->carreras->universidades->nom_univ; ?>
	<!--<br />-->

        <b><?php echo CHtml::encode($empaque->getAttributeLabel('comuna')); ?>:</b>
	<?php echo $empaque->comunas->nom_comuna; ?>
	<br />
	
        <b><?php echo CHtml::encode($empaque->getAttributeLabel('provincia')); ?>:</b>
	<?php echo CHtml::encode($empaque->comunas->provincias->nom_provincia); ?>
	<br />
        
        <b><?php echo CHtml::encode($empaque->getAttributeLabel('region')); ?>:</b>
	<?php echo CHtml::encode($empaque->comunas->provincias->regiones->nom_region); ?>
	<br />
        
        <b><?php echo CHtml::encode($empaque->getAttributeLabel('celular')); ?>:</b>
	<?php echo $empaque->cel_usuario; ?>
	<br />
        
        <b><?php echo CHtml::encode($empaque->getAttributeLabel('email')); ?>:</b>
	<?php echo $empaque->email_usuario; ?>
	<br />
        
        <b><?php echo CHtml::encode($empaque->getAttributeLabel('estudios')); ?>:</b>
	<?php if($empaque->estudios_usuario == 1){
        
                    echo "Si";
            
               }
               else{
                   echo "No";
               }
               ;
             ?>
	<br />

        <b><?php echo CHtml::encode($empaque->getAttributeLabel('hijos')); ?>:</b>
	<?php echo $empaque->hijos_usuario; ?>
	<br />
        
        <br><br>
        
        <div type="button" class="btn btn-primary">
                <a href="<?php echo Yii:: app() ->baseUrl.'/site/mperfil' ?>">Modificar datos</a>
        </div>
        
        </div>
    </div>  
        
    </div>     
        <!--fuera de sesion-->
<?php

            }
      
      if(Yii::app()->session['var'] == NULL)
            {
        
                    header("Location: ".Yii:: app() ->baseUrl.'/site/index');
          
              }
            
  ?>