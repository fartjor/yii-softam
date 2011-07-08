<?php

class EmpresaController extends Controller
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
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('gerenciar','delete','index','visualizar','view','carregarfiliais','novo','atualizar'),
				'expression'=>"Yii::app()->user->getState('funcao') == '3' || Yii::app()->user->getState('funcao') == '2'",
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
		$model = $this->loadModel();
		//$filiais = $model->filials->findAll();
		//$filiais = implode(',', $filiais);
		$this->render('visualizar',array(
			'model'=>$model,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionNovo()
	{
		$model=new Empresa;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Empresa']))
		{
			$model->attributes=$_POST['Empresa'];
			$model->emp_data_ingresso = date('Y-m-d H:i');
			$model->emp_cpf_socio_majoritario = $this->formatCPF($model->emp_cpf_socio_majoritario);
			print_r($model->emp_cpf_socio_majoritario);
			if($model->save())
				$this->redirect(array('visualizar','id'=>$model->emp_id));
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

		if(isset($_POST['Empresa']))
		{

			$model->attributes=$_POST['Empresa'];
			
			if ($model->emp_situacao == 'I')
				$model->emp_data_desativacao = date('Y-m-d H:i:s');
			else
				$model->emp_data_modificacao = date('Y-m-d H:i:s');
			if($model->save())
				$this->redirect(array('visualizar','id'=>$model->emp_id));
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
			try{
				// we only allow deletion via POST request
				$this->loadModel()->delete();
				// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
				if(!isset($_GET['ajax']))
					$this->redirect(array('index'));
			}catch(Exception $e){
				$mensagem = 'Erro ao excluir a empresa';
				$this->render('/site/erro',array('mensagem' => $mensagem));
			}
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
		$model=new Empresa('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Empresa']))
			$model->attributes=$_GET['Empresa'];

		$this->render('gerenciar',array(
			'model'=>$model,
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
				$this->_model=Empresa::model()->findbyPk($_GET['id']);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='empresa-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	protected function formatCPF($cpf){
		$cpf = substr($cpf, 0, 3) . substr($cpf, 4, 3) . substr($cpf, 8, 3) . substr($cpf, 12, 2);
		return $cpf;
	}
	
	public function actionCarregarfiliais($empresa){
		if ($empresa == '')
			$empresa = '0';
		
		$criteria = new CDbCriteria();
		$criteria->order='fil_nome';
		$criteria->condition = 'emp_id = ' . $empresa;
		echo CHtml::tag('option',
                   array('value'=>''),CHtml::encode('Selecione uma Filial -->'),true);
		$data = Filial::model()->findAll($criteria);
 
    	$data = CHtml::listData($data,'fil_id','fil_nome');
    	foreach($data as $value=>$name)
    	{
        	echo CHtml::tag('option',
                   array('value'=>$value),CHtml::encode($name),true);
    	}	
	}
}
