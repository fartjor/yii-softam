<?php

class Acao_processoController extends Controller
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
				'actions'=>array('gerenciar'),
				'expression'=>"Yii::app()->user->getState('funcao') == '3' || Yii::app()->user->getState('funcao') == '2' || Yii::app()->user->getState('funcao') == '1'",
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	public function actionGerenciar()
	{
		$model=new Acao_processo('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Acao_processo']))
			$model->attributes=$_GET['Acao_processo'];
			$model->pro_id = $_GET["processo"];

		if ((Yii::app()->user->getState('funcao') == 1))
			if ($model->processo->cli_id == Yii::app()->user->getState('id'))
				$this->render('gerenciar',array(
					'model'=>$model,
				));
			else{
			}
		else{
			$this->render('gerenciar',array(
				'model'=>$model,
			));
		}
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
				$this->_model=Acao_processo::model()->findbyPk($_GET['id']);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='acao-processo-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
