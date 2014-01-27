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
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
         <script src="//code.jquery.com/jquery-1.9.1.js"></script>
        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        
        
        <?php $controlador = $this->getId(); ?>
        <?php $pagina = $this->getAction()->getId(); ?>
        <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'></link>
        
        <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon.ico" />
     
        <?php if($pagina == 'peticion' || $pagina == 'repechaje') {?> <meta content="5" http-equiv="REFRESH"> </meta> <?php } ?>
        
        
        
</head>

<body <?php  if(Yii::app()->session['var'] == NULL){ ?>  
    
 
     
     style="background-color:white; background-size: 100%;"
          
            <?php } ?> >

<div class="all" id="">

	
        
        <!--menu-->
        
        <!--en la sesion-->
        
        
        
        <?php 
        
            date_default_timezone_set("Chile/Continental");
            $dia_peticion = 0;
            $dia_repechaje = 0;
         
        
            if(Yii::app()->session['var'] != NULL){
             $usuario=Usuarios::model()->findByPk(Yii::app()->session['var']);
              if( $usuario->rut_usuario != 'admin') 
                {    
                
                 
                $fecha_dia = date("w");
//                echo $fecha_dia;
         
                
            ?>
    
        
        <div class="row-fluid">
            <div class="span12 barra alert alert-success">
                <div class="container-fluid">
                <div class="row-fluid" style="padding-top: 10px;">
                    
                    <div class="span4">
                        
                          <div class="style_user"> 
                            <b>Bienvenido</b> &nbsp; <?php
            
                                 $empaque=Usuarios::model()->findByPk(Yii::app()->session['var']);
                                 $nombre=$empaque->nom_usuario;
                                 $apellido=$empaque->apel1_usuario;   
                                 echo $nombre." ".$apellido;
            
                                ?>
                               - 
                            
                               <b> Estado</b> &nbsp;
                               <?php
                                if ($empaque->estudios_usuario == '1'){
                                    
                                    echo 'Activo';
                                }
                                else{
                                    if($empaque->estudios_usuario == '0'){
                                        
                                     echo 'Inactivo';   
                                        
                                    }
                                }
                                
                               ?>
                               
                        </div>
                        
                        
                    </div>
                    <div class="span4">
                        
                        <b>Toma de Turnos</b> Jueves 23:00 hrs
                        
                    </div>
                    <div class="span4">
                      
                             <div type="button" class="btn btn-danger pull-right">
                                <a href="<?php echo Yii:: app() ->baseUrl.'/site/logout' ?>">Cerrar Sesion</a>
                            </div>
            
                        
                    </div>
                    
                </div>
                </div>    
            </div>
        </div>    
        
        <div class="container">
        
        <ul class="altura3 nav nav-tabs nav-pills ">
            <li <?php if($pagina == "index") { ?>class="active" <?php } ?>><a href="<?php echo Yii:: app() ->baseUrl.'/site/index' ?>"> Inicio</a></li>
            <li <?php if($pagina == "perfil") { ?>class="active" <?php } ?> ><a href="<?php echo Yii:: app() ->baseUrl.'/site/perfil' ?>"> Perfil</a></li>
            <li <?php if($pagina == "turnosuser") { ?>class="active" <?php } ?> ><a href="<?php echo Yii:: app() ->baseUrl.'/site/turnosuser' ?>"> Mis Turnos</a></li>
            <li <?php if($pagina == "peticion") { ?>class="active" <?php } ?> >
                
                    <?php if($fecha_dia == $dia_peticion) { ?>
                                <a href="<?php echo Yii:: app() ->baseUrl.'/site/peticion'; ?>">Tomar Turnos </a>
                    <?php } ?>
                                
            </li>
            <li 
                <?php if($pagina == "repechaje") { ?>class="active" <?php } ?> >
            
                       <?php if($fecha_dia == $dia_repechaje) { ?>
                
                                <a href="<?php echo Yii:: app() ->baseUrl.'/site/repechaje' ?>"> Turnos Repechaje</a>
                       <?php } ?>
            
            </li>
           
            <li>  
                
                    
            </li>
            
           
        </ul>
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
                        
        <ul class="altura3 nav nav-tabs">
       
            <li>  
                <div class="style_user"> 
                    <h2> Sesión Administrador <?php
            
                                 $empaque=Usuarios::model()->findByPk(Yii::app()->session['var']);
                                 $nombre=$empaque->nom_usuario;
                                 $apellido=$empaque->apel1_usuario;   
                                 echo $nombre." ".$apellido;
            
                        ?>
                    </h2>   
                </div>
                    
            </li>
            
            <div type="button" class="btn btn-danger pull-right"><a href="<?php echo Yii:: app() ->baseUrl.'/site/logout' ?>">Cerrar Sesion</a></div>
        </ul>
        <!--fin del menu-->
        </div>
                    </div>               
        
        <div class="">
<!--<h2>Panel de administracion</h2>-->

<div class="container panel">
    <div class="row-fluid">
<div class="span4 centrar">

    <h3> Usuarios </h3>
    
    <div class="nav">
    <li><a href="<?php echo Yii:: app() ->baseUrl.'/usuarios/admin' ?>"><i class="icon-list-alt"></i> Listar usuarios</a></li>
    <li><a href="<?php echo Yii:: app() ->baseUrl.'/usuarios/create' ?>"><i class="icon-plus-sign"></i> Crear usuarios</a></li>
    
    </div>
</div>
       

<div class="span4 centrar">
    
    <h3>Planilla</h3>
    <div class="nav">
<!--    <li><a href="<?php //echo Yii:: app() ->baseUrl.'/site/admin' ?>"><i class="icon-list-alt"></i> Listar turnos</a></li>-->
    <li><a href="<?php echo Yii:: app() ->baseUrl.'/turnos/create' ?>#"><i class="icon-plus-sign"></i> Crear turnos</a></li>
   
    <li><a href="<?php echo Yii:: app() ->baseUrl.'/site/planilla' ?>"><i class="icon-plus"></i> Generar planilla</a></li>
    </div>
</div>  
        
        
        
<div class="span4 centrar">
    
    <h3>Faltas</h3>
    <div class="nav ">
    <li><a href="<?php echo Yii:: app() ->baseUrl.'/faltas/' ?>"><i class="icon-list-alt"></i> Listar faltas</a></li>
    <li><a href="<?php echo Yii:: app() ->baseUrl.'/faltas/create' ?>"><i class="icon-plus-sign"></i> Crear faltas</a></li>
    <!--<li><a href="<?php // echo Yii:: app() ->baseUrl.'/site/admin' ?>">Eliminar turnos</a></li>-->
    <!--<li><a href="<?php // echo Yii:: app() ->baseUrl.'/site/planilla' ?>">Generar planilla</a></li>-->
    </div>
</div>         
        
    </div>
</div>

</div>
        
          <?php
        
                }
          ?>
        <!--contenido-->
        
       
        <div class="container contenido">
        
            <?php 
            
                    }
                 
             
                echo $content; 
                
                
                if(Yii::app()->session['var'] != NULL )
                    
            {
            
            ?>
        <!--fin del contenido-->
        </div>
        
	
        <!--footer-->

        <div class="">
            <div class="row-fluid">
                <div class="span-12">
                    <div class="pie centrar">
                        Copyright &copy; <?php echo date('Y'); ?> by Bastías - Rojas<br/>
                        All Rights Reserved.<br/>
                
                        <?php
                            $usuario=Usuarios::model()->findByPk(Yii::app()->session['var']);
                            if( $usuario->rut_usuario == 'admin') 
                            {
                                ?>
                                <button type="button" class="btn btn-info btn-large"><a href="<?php echo Yii:: app() ->baseUrl.'/site/admin' ?>"> Panel</a></button>
                         <?php
                            }       
                                    ?>
                        <br>
                        Última conexión <?php

                                date_default_timezone_set("Chile/Continental");
                                echo "Hora:". date ("G:i:s") . "<br />";
                                echo "Fecha:". date ("d:m:Y") . "<br/>";

                                echo "Versión de Actualización: 14:32 - 24/01/2013";
                                ?>
                        
                    </div>
                </div>
           </div>
        </div>
        <!-- fin footer -->

        <?php
        
            }
            
            if (Yii::app()->session['var'] == NULL)
            {
        ?>
            <div class="footer_null" style="margin-top: 100px;">
            <div class="row-fluid">
                <div class="span-12">
                    <div class="pie centrar">
                        <div class="row-fluid">
                            
                            <div class="span3">

                            </div>
                            <div class="span6">
                            <div class="footer_border"> 
                            <a href="<?php echo Yii:: app() ->baseUrl.'/site/' ?>">Inicio </a> -
                            <a href="<?php echo Yii:: app() ->baseUrl.'/site/empresa' ?>">Empresa </a> - 
                            <a href="<?php echo Yii:: app() ->baseUrl.'/site/quienes' ?>">Quienes Somos </a> -
                            <a href="<?php echo Yii:: app() ->baseUrl.'/site/fotos' ?>">Fotos </a> -
                            <a href="<?php echo Yii:: app() ->baseUrl.'/site/' ?>">Entrar </a> - 
                         
                            <a href="<?php echo Yii:: app() ->baseUrl.'/site/contact' ?>">Postulación </a>
                      
                            </div>
                            </div>
                            
                            <div class="span3">
                                
                            </div>
                            
                        </div>    
                        <br>
                        <br>
                        
                        Copyright &copy; <?php echo date('Y'); ?> by Bastías - Rojas<br/>
                        All Rights Reserved.<br/>
                
                    
                        <br>
                        Última conexión <?php

                                date_default_timezone_set("Chile/Continental");
                                echo "Hora:". date ("G:i:s") . "<br />";
                                echo "Fecha:". date ("d:m:Y") . "<br/>";

                                ?>
                        
                    </div>
                </div>
           </div>
        </div>
        
        
        <?php
        
            }
        ?>
</div><!-- page -->

</body>
</html>
