<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
        
        
       
        
        
     
	<?php Yii::app()->bootstrap->registerAllCss(); ?>
        <?php Yii::app()->bootstrap->register(); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        
	<title>SEU</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
       
        
        <?php $controlador = $this->getId(); ?>
        <?php $pagina = $this->getAction()->getId(); ?>
        <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'></link>
        
        <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon.ico" />
     
        
</head>

<body>

<div class="all" id="">

	
        
        <!--menu-->
        
        <!--en la sesion-->
        
        
        
        <?php 
        
         
        
            if(Yii::app()->session['var'] != NULL){
             $usuario=Usuarios::model()->findByPk(Yii::app()->session['var']);
              if( $usuario->rut_usuario != 'admin') 
                {    
                
                
            
                
            ?>
    
        
        
        
        <div class="container">
        
        
        <!--fin del menu-->
        </div>
        
        <!--administrador #############################################-->
        
        <?php
        
            }
             if( $usuario->rut_usuario == 'admin') 
                {    
               
            ?>
       
                    <div class="cabecera">
        
                        <div class="container">
                        
        
        <!--fin del menu-->
        </div>
                    </div>               
        
        <div class="">
<!--<h2>Panel de administracion</h2>-->



</div>
        
          <?php
        
                }
          ?>
        <!--contenido-->
        
       
        <div class="container contenido">
        
            <?php 
            
                    }
                 
             
                echo $content; 
                
                
                if(Yii::app()->session['var'] != NULL)
                    
            {
            
            ?>
        <!--fin del contenido-->
        </div>
        
	
        <!--footer-->

        <div class="">
            <div class="row-fluid">
                <div class="span-12">
                    <div class="pie centrar">
                       
                       <?php

                                date_default_timezone_set("Chile/Continental");
                                echo "Fecha de generación". date ("G:i:s") . " " . date ("d:m:Y") ;
                              

//                                echo "version de actualizazion: 11:15 - 21/12/2013";
                                ?>
                        
                    </div>
                </div>
           </div>
        </div>
        <!-- fin footer -->

        <?php
        
            }
        ?>
            
</div><!-- page -->

</body>
</html>
