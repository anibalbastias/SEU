<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
        
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
            
            $model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
            
            
            
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index',array('model'=>$model));
	}

        public function actionPerfil()
        {
            
            $empaque=Usuarios::model()->findByPk(Yii::app()->session['var']);
        
            $this->render('perfil');
                   
        }
        
        public function actionMperfil()
        {
            $model=Usuarios::model()->findByPk(Yii::app()->session['var']);      
            $pass = $model->pass_usuario;
           
            if(isset($_POST['Usuarios']))
            {   
                $model->attributes=$_POST['Usuarios'];
                $uploadedFile=CUploadedFile::getInstance($model,'id_usuario');
                $pass2 = $model->pass_usuario;
                    
                if($pass == $pass2)
                {	
                    $model->pass_usuario = $pass2;  

                    if($uploadedFile)
                    {
                        $model->img_usuario = 1;
                        $model->save();
                        $uploadedFile->saveAs(Yii::app()->basePath.'/../img/users/'.$model->id_usuario.'.jpg');
                    }
                    else
                    {
                        $model->save();
                    }    
                    $this->redirect(array('perfil'));
                }
                    
                else
                { 
                    if($pass != md5($model->pass_usuario) )
                    {
                        $model->pass_usuario = md5($pass2); 

                        if($model->save())
                            $this->redirect(array('admin'));

                    }
                    else
                    {
                        if($pass == md5($pass2)){                                
                              $model->pass_usuario = $pass;
                         
                        if($model->save())
                            $this->redirect(array('admin'));

                        }       
                    }         
                }        
            }
            $this->render('mperfil');      
        }
        
        public function actionTurnosuser()
        {
            
        
            $this->render('turnosuser');
                   
        }
        
        public function actionPlanilla()
        {
        
            $this->render('planilla');
                   
        }
        
        public function actionPeticion()
        {
        
            $this->render('peticion');
                   
        }
        
        public function actionTomaTurno($id)
        {
            $model= new UsuariosHasTurnos;

            $empaque=Usuarios::model()->findByPk(Yii::app()->session['var']);
            $model->turnos_id_turno = $id;
            $model->usuarios_id_usuario = $empaque->id_usuario;
            $model->estado = "Aceptado";
            $model->save();
            
            $this->redirect(array('peticion'));
            
            $this->render('create',array(
                    'model'=>$model,
            ));
            
        }
        
        public function actionTomaTurnoRep($id)
        {
            $model= new UsuariosHasTurnos;

            $empaque=Usuarios::model()->findByPk(Yii::app()->session['var']);
            $model->turnos_id_turno = $id;
            $model->usuarios_id_usuario = $empaque->id_usuario;
            $model->estado = "Aceptado";
            $model->save();
            
            $this->redirect(array('repechaje'));
            
            $this->render('create',array(
                    'model'=>$model,
            ));
            
        }
        
        public function actionRellenar($id)
        {
            $model= new UsuariosHasTurnos;

            $empaque=Usuarios::model()->findByPk(Yii::app()->session['var']);
            $model->turnos_id_turno = $id;
            $model->usuarios_id_usuario = $empaque->id_usuario;
            $model->estado = "Aceptado";
            $model->save();
            
            $this->redirect(array('repechaje'));
            
            $this->render('create',array(
                    'model'=>$model,
            ));
            
        }
        
        
        public function actionRegalaTurno($id)
        {
            //$model = UsuariosHasTurnos::model()->find('usuarios_id_usuario='.Yii::app()->session['var']);      
            
//            $empaque=Usuarios::model()->findByPk(Yii::app()->session['var']);
//            $model->turnos_id_turno = $id;
//            $model->usuarios_id_usuario = Yii::app()->session['var'];
//            $model->estado = "Rechazado";
//            
//            $model->save();    
            
            
//            $this->render('update',array(
//                'model'=>$this->loadModel($empaque),
//                
//                'estado'=>'Rechazado',
//                
//            ));
            
            Yii::app()->db
                ->createCommand("UPDATE usuarios_has_turnos SET estado = 'Rechazado' WHERE turnos_id_turno=:IdTurno AND usuarios_id_usuario=:IdUsuario")
                ->bindValues(array(':IdTurno' => $id, ':IdUsuario' => Yii::app()->session['var']))
                ->execute();
            $this->redirect(array('turnosuser'));
        }
        
        public function actionQuienes()
        {
        
            $this->render('quienes');
                   
        }
        
        
        public function actionRepechaje()
        {
        
            $this->render('repechaje');
                   
        }
        public function actionEnviar()
        {
        
            $this->render('enviar');
                   
        }
        
        public function actionEmpresa()
        {
        
            $this->render('empresa');
                   
        }
       
       
        
         public function actionFotos()
        {
        
            $this->render('fotos');
                   
        }
        
        public function actionAdmin()
        {
        
            $this->render('admin');
                   
        }
        
        public function actionCredencial(){
            
            $mPDF1 = Yii::app()->ePdf->mpdf();
            $this->layout="//layouts/credencial_usuario";
            $stylesheet = file_get_contents(Yii::getPathOfAlias('webroot.css') . '/style.css');
            $stylesheet2 = file_get_contents(Yii::getPathOfAlias('webroot.css') . '/style_1.css');
            $stylesheet3 = file_get_contents(Yii::getPathOfAlias('bootstrap').'/assets/css/bootstrap.css');
            $stylesheet4 = file_get_contents(Yii::getPathOfAlias('bootstrap').'/assets/css/bootstrap.min.css');
            
            $mPDF1->WriteHTML($stylesheet,1);
            $mPDF1->WriteHTML($stylesheet2,1);
            $mPDF1->WriteHTML($stylesheet3,1);
            $mPDF1->WriteHTML($stylesheet4,1);
            
//            $mPDF1->WriteHTML(CHtml::image(Yii::app()->request->baseUrl.'/img/credencial.png',' ',array(
//                'class'=>'')));
            
        
            $mPDF1->WriteHTML($this->render('credencial',array(),true));
            $mPDF1->Output();
            exit();
            
        } 
        
        
       public function actionPdf()
	{
            
            $mPDF1 = Yii::app()->ePdf->mpdf();
//            
            $this->layout="//layouts/pdf_usuario";
            $stylesheet = file_get_contents(Yii::getPathOfAlias('webroot.css') . '/style.css');
            $stylesheet2 = file_get_contents(Yii::getPathOfAlias('webroot.css') . '/style_1.css');
            $stylesheet3 = file_get_contents(Yii::getPathOfAlias('bootstrap').'/assets/css/bootstrap.css');
            $stylesheet4 = file_get_contents(Yii::getPathOfAlias('bootstrap').'/assets/css/bootstrap.min.css');
// 
//            
//             $mPDF1->WriteHTML($stylesheet, 1);
//            $mPDF1->WriteHTML($stylesheet2, 1);
//            $mPDF1->WriteHTML($stylesheet3, 1);
//          
//        $mPDF1->Bookmark('Start of the document');
                $mPDF1->WriteHTML($stylesheet,1);
        $mPDF1->WriteHTML($stylesheet2,1);
        $mPDF1->WriteHTML($stylesheet3,1);
        $mPDF1->WriteHTML($stylesheet4,1);
            
            $mPDF1->WriteHTML(CHtml::image(Yii::app()->request->baseUrl.'/img/logo_seu.png',' ',array('width'=>'20%',
                'class'=>'')));
//            $mpdf->headerPageNoMarker = "xx"; //muestra la numeracion de la pagina
//            $mPDF1->WriteHTML($this->render('pdf',array(),true));
//
//            $mPDF1->Output();
//            exit();
            
       
    
//        $mpdf->Image('files/images/frontcover.png',0,0,210,297,'png','',true, false);
//        $mPDF1->WriteHTML('<div class="well">  Section 1 text</div>');
        $mPDF1->WriteHTML($this->render('pdf',array(),true));
        $mPDF1->Output();
        exit();
		
	}
        
        
        
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
            
                $this->render('logout');
//		Yii::app()->user->logout();
//		$this->redirect(Yii::app()->homeUrl);
	}
}