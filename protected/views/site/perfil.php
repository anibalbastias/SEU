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
        
        <div type="button" class="btn btn-success">
                <a href="<?php echo Yii:: app() ->baseUrl.'/#' ?>">Descargar Credencial</a>
        </div>
        
       
        <!-- ############## reglamento  ##########################--> 
        
        <!-- Button to trigger modal -->
            <a href="#myModal" role="button" class="btn btn-warning" data-toggle="modal">Reglamento</a>
 
        <!-- Modal -->
            <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <div type="button" class="close" data-dismiss="modal" aria-hidden="true">×</div>
                <h4 id="myModalLabel">Reglamento - Servicio de Empaques Universitarios</h4>
            </div>
            <div class="modal-body">
                
                 <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
                    Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                 </p>
                 
                 <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
                    Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                 </p>
                 
                 <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
                    Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                 </p>
                 
                 <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
                    Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                 </p>
                 <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
                    Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                 </p>
                 
                 <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
                    Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                 </p>
                 
            </div>
            <div class="modal-footer">
                <div type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Cerrar</div>
                
            </div>
            </div>
        
        <!-- ############## fin del reglamento ################-->
        
            <!-- ##############  alerta reglamento ###################-->
        <div class="bs-docs-example" style="padding-top:30px;">
          <div class="alert alert-block alert-error fade in">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Advertencia!</strong> Acuérdese de leer constantemente el reglamento.
          </div>
        </div>
        
        <!-- ############## fin alerta reglamento #############-->
        
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