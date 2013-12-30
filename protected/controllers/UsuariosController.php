<?php

class UsuariosController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
//	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
//			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','pdf','faltas'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
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
//            $mPDF1->WriteHTML($stylesheet, 1);
//            $mPDF1->WriteHTML($stylesheet2, 1);
//            $mPDF1->WriteHTML($stylesheet3, 1);
//          
        $mPDF1->Bookmark('Start of the document');
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
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Usuarios;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Usuarios']))
		{
                    $model->attributes=$_POST['Usuarios'];
                    $uploadedFile=CUploadedFile::getInstance($model,'id_usuario');
                    $model->pass_usuario=md5($model->pass_usuario);

                    if($uploadedFile)
                    {
                        $model->img_usuario = 1;
                        $model->save();
                        $uploadedFile->saveAs(Yii::app()->basePath.'/../img/users/'.$model->id_usuario.'.jpg');
                    }
                    else
                    {
                        $model->img_usuario = 0;
                        $model->save();
                    }    
                    $this->redirect(array('view','id'=>$model->id_usuario));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
                
                
//                if(isset($_POST['Usuarios']))
//		{
//			$model->attributes=$_POST['Usuarios'];
//                        $model->pass_usuario=md5($model->pass_usuario);
//			if($model->save())
//				$this->redirect(array($model->id_usuario));
//		}
                
                
                 $pass = $model->pass_usuario;
                
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

             
                 
		if(isset($_POST['Usuarios']))
		{
                    
                    $model->attributes=$_POST['Usuarios'];
                    $uploadedFile=CUploadedFile::getInstance($model,'id_usuario');
                    $pass2 = $model->pass_usuario;
                    
                        if($pass == $pass2){
			
                              $model->pass_usuario = $pass2;  
//                            $model->attributes=$_POST['Usuarios'];
                            if($uploadedFile)
							{
								$model->img_usuario = 1;
								$model->save();
								$uploadedFile->saveAs(Yii::app()->basePath.'/../img/users/'.$model->id_usuario.'.jpg');
							}
							else
							{
								$model->img_usuario = 0;
								$model->save();
							}    
							$this->redirect(array('view','id'=>$model->id_usuario));
                                
				$this->redirect(array('admin'));
                        }
                    
                    
			else{ 
                            if($pass != md5($model->pass_usuario) ){
			
//                        $model->attributes=$_POST['Usuarios'];
//                            $model->pass_usuario = md5($model->pass_usuario);
                               $model->pass_usuario = md5($pass2); 
                                
                            if($model->save())
//				$this->redirect(array($model->id_usuario));
                                $this->redirect(array('admin'));
		
                        }
                        else{
                            
                            if($pass == md5($pass2)){
                                
                                  $model->pass_usuario = $pass;
//                                $model->attributes=$_POST['Usuarios'];
                            if($model->save())
				$this->redirect(array('admin'));
                                
                            }
                            
                        }
                        
                        
                            }
                        
                    
                    
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
//			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
                    $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Usuarios');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

        public function actionFaltas()
	{
		$this->render('faltas');
	}
        
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Usuarios('search');
		$model->unsetAttributes();  // clear any default values
                
//                $mPDF1 = Yii::app()->ePdf->mpdf();
//                $mPDF1->WriteHTML("<h1>Hola mundo</h1>");
//                $mPDF1->Output();
                
		if(isset($_GET['Usuarios']))
			$model->attributes=$_GET['Usuarios'];
                
		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Usuarios::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='usuarios-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
