
<?php

class ProcessoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';

	/**
	 * @var CActiveRecord the currently loaded data model instance.
	 */
	private $_model;

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
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
				'actions'=>array('index','visualizar','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('novo','atualizar'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('gerenciar','delete','boleto','novaacao'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 */
	public function actionVisualizar()
	{
		$this->render('visualizar',array(
			'model'=>$this->loadModel(),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionNovo()
	{
		$model=new Processo;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Processo']))
		{
			$model->attributes=$_POST['Processo'];
			$model->pro_data_ingresso = date('Y-m-d');
			$model->pro_situacao = 'I';
			
			if($model->save()){
				$acao = new Acao_processo;
				$acao->aca_tipo = 'I';
				$acao->usu_id = 1;
				$acao->aca_obs = 'O processo foi iniciado';
				$acao->pro_id = $model->pro_id;
				$acao->aca_data = date('Y-m-d H:i:s');
				print_r($acao->attributes);
				$acao->save();
				$this->redirect(array('visualizar','id'=>$model->pro_id));
			}
		}

		$this->render('novo',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionAtualizar()
	{
		$model=$this->loadModel();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Processo']))
		{
			$model->attributes=$_POST['Processo'];
			if($model->save())
				$this->redirect(array('visualizar','id'=>$model->pro_id));
		}

		$this->render('atualizar',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 */
	public function actionDelete()
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel()->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(array('index'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$this->redirect(array('gerenciar'));
	}

	/**
	 * Manages all models.
	 */
	public function actionGerenciar()
	{
		$model=new Processo('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Processo']))
			$model->attributes=$_GET['Processo'];

		$this->render('gerenciar',array(
			'model'=>$model,
		));
	}
	
	public function actionBoleto(){
		
		$this->render('boleto',array(

		));	
	}
	
	public function actionNovaacao($processo){
		$model=new Acao_processo;
		
		if(isset($_POST['Acao_processo']))
		{
			$mprocesso = Processo::model()->findByPk($processo);
			
			$model->attributes=$_POST['Acao_processo'];
			$model->pro_id = $processo;
			$model->aca_tipo_anterior = $mprocesso->pro_situacao;
			$model->usu_id = 1;
			$model->aca_data = date('Y-m-d H:i:s');
						
			if($model->save()){
				$mprocesso->pro_situacao = $model->aca_tipo;
				$mprocesso->save();
				$this->redirect(array('../acao_processo/gerenciar','processo'=>$processo));
			}
		}
		$this->render('novaacao',array(
			'model'=>$model,
			'processo' => $processo,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 */
	public function loadModel()
	{
		if($this->_model===null)
		{
			if(isset($_GET['id']))
				$this->_model=Processo::model()->findbyPk($_GET['id']);
			if($this->_model===null)
				throw new CHttpException(404,'The requested page does not exist.');
		}
		return $this->_model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='processo-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}