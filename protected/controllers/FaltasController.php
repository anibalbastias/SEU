<?php

class FaltasController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
				'actions'=>array('index','view','autocomplete'),
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

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Faltas;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Faltas']))
		{
			$model->attributes=$_POST['Faltas'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_falta));
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Faltas']))
		{
			$model->attributes=$_POST['Faltas'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_falta));
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
                 $falta = Faltas::model()->findByPk($id);
        
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Faltas',array(
                        'sort'=>array('defaultOrder'=>'fecha_falta DESC',),
                    
                ));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Faltas('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Faltas']))
			$model->attributes=$_GET['Faltas'];

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
		$model=Faltas::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='faltas-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        public function actionAutocomplete()
        {
            if (isset($_GET['term'])) 
            {
                $criteria=new CDbCriteria;
                $criteria->alias = "usuarios";
                $criteria->condition = "usuarios.nom_usuario like '" . $_GET['term'] . "%'"." OR "."usuarios.apel1_usuario like '" . $_GET['term'] . "%'"." OR "."usuarios.apel2_usuario like '" . $_GET['term'] . "%';";

                $dataProvider = new CActiveDataProvider(get_class(Usuarios::model()), array(
                'criteria'=>$criteria,'pagination'=>false,
                ));
                $usuarios = $dataProvider->getData();

                $return_array = array();
                
                foreach($usuarios as $usuario)
                {
                    $return_array[] = array(
                    'label'=>$usuario->nom_usuario." ".$usuario->apel1_usuario." ".$usuario->apel2_usuario,
                    'value'=>$usuario->id_usuario,
                    'id'=>$usuario->id_usuario,
                    );
                }
                echo CJSON::encode($return_array);
            }            
        }
}
