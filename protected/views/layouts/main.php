<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />-->
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />-->
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />-->
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />-->
	<?php Yii::app()->bootstrap->registerAllCss(); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
	
	<title>SEU</title>
        
        <?php $controlador = $this->getId(); ?>
        <?php $pagina = $this->getAction()->getId(); ?>
        <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'></link>
        
</head>

<body>

<div class="container all" id="page">

	
        
        <!--menu-->
        
    
        
        <ul class="altura3 nav nav-tabs">
            <li <?php if($pagina == "index") { ?>class="active" <?php } ?> ><a href="index"> Inicio</a></li>
            <li <?php if($pagina == "perfil") { ?>class="active" <?php } ?> ><a href="perfil"> Perfil</a></li>
            <li <?php if($pagina == "turnos") { ?>class="active" <?php } ?> ><a href="turnos"> Mis Turnos</a></li>
            <li <?php if($pagina == "peticion") { ?>class="active" <?php } ?> ><a href="peticion">Tomar Turnos </a></li>
            <li <?php if($pagina == "repechaje") { ?>class="active" <?php } ?> ><a href="repechaje"> Turnos Repechaje</a></li>
        </ul>
        <!--fin del menu-->
        
        <!--contenido-->
            <?php echo $content; ?>
        <!--fin del contenido-->
        
        
	
        <!--footer-->

            <div class="well centrar">
		Copyright &copy; <?php echo date('Y'); ?> by Bastías - Rojas<br/>
		All Rights Reserved.<br/>
		
            </div>
        <!-- fin footer -->

</div><!-- page -->

</body>
</html>