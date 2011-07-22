<?php

class BoletoController extends Controller
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
				'actions'=>array('gerenciar','delete', 'pagar','index','visualizar','view', 'receber','novo','atualizar'),
				'expression'=>"Yii::app()->user->getState('funcao') == '3' || Yii::app()->user->getState('funcao') == '2'",
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('gerenciar','pagar'),
				'expression'=>"Yii::app()->user->getState('funcao') == '1'",
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
		$model=new Boleto;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Boleto']))
		{
			$model->attributes=$_POST['Boleto'];
			if($model->save())
				$this->redirect(array('visualizar','id'=>$model->bol_codigo));
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

		if(isset($_POST['Boleto']))
		{
			$model->attributes=$_POST['Boleto'];
			if($model->save())
				$this->redirect(array('visualizar','id'=>$model->bol_codigo));
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
				$this->redirect(array('gerenciar'));
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
		$model=new Boleto('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Boleto']))
			$model->attributes=$_GET['Boleto'];
			$model->pro_id = $_GET["processo"];
			
		$cliente = Cliente::model()->findByAttributes(array('usu_id' => Yii::app()->user->getState('id')));
		if ((Yii::app()->user->getState('funcao') == 1))
			if ($model->processo->cli_id == $cliente->cli_id)
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
	
	public function actionPagar($id){
		$model = Boleto::model()->findByPk($id);
		
		if ($model){
		if ((Yii::app()->user->getState('funcao') == 1))
			if ($model->processo->cli_id == Yii::app()->user->getState('id'))
				$this->render('pagar',array(
					'model'=>$model,
				));
			else{
			}
		else{
			$this->render('pagar',array(
				'model'=>$model,
			));
		}
		}
	}
	
	public function actionReceber(){
		$retorno_site = 'pagseguro_compraconcluida.html';  // Site para onde o usu�rio vai ser redirecionado ao termino do pagamento
		$retorno_token = '6A723FC087EC41BEB3821466690E4936'; // Token gerado pelo PagSeguro

		//$retorno_host = 'localhost'; // Local da base de dados MySql
		//$retorno_database = 'softe301_gescon'; // Nome da base de dados MySql
		//$retorno_usuario = 'softe301_gescon'; // Usuario com acesso a base de dados MySql
		//$retorno_senha = '!Jair1104';  // Senha de acesso a base de dados MySql
		
		header('Content-Type: text/html; charset=ISO-8859-1');

		/* Edite este arquivo e insira suas configura��es */

		/* N�o � necess�rio alterar nada desta linha para baixo */

		define('TOKEN', $retorno_token);


		if (count($_POST) > 0) {
	
			$npi = new PagSeguroNpi();
			$result = $npi->notificationPost();
	
			$transacaoID = isset($_POST['TransacaoID']) ? $_POST['TransacaoID'] : '';
	
			if ($result == "VERIFICADO") {
	
				// Recebendo Dados
				$VendedorEmail  = $_POST['VendedorEmail'];
				$TransacaoID = $_POST['TransacaoID'];
				$Referencia = $_POST['Referencia'];
				$Extras = MoedaBR($_POST['Extras']);
				$TipoFrete = $_POST['TipoFrete'];
				$ValorFrete = MoedaBR($_POST['ValorFrete']);
				$DataTransacao = ConverterData($_POST['DataTransacao']);
				$Anotacao = $_POST['Anotacao'];
				$TipoPagamento = $_POST['TipoPagamento'];
				$StatusTransacao = $_POST['StatusTransacao'];

				$CliNome = $_POST['CliNome'];
				$CliEmail = $_POST['CliEmail'];
				$CliEndereco = $_POST['CliEndereco'];
				$CliNumero = $_POST['CliNumero'];
				$CliComplemento = $_POST['CliComplemento'];
				$CliBairro = $_POST['CliBairro'];
				$CliCidade = $_POST['CliCidade'];
				$CliEstado = $_POST['CliEstado'];
				$CliCEP = $_POST['CliCEP'];
				$CliTelefone = $_POST['CliTelefone'];

				$NumItens = $_POST['NumItens'];
	
				for($i=1;$i<=$NumItens;$i++) {
				
					$ProdID = $_POST["ProdID_{$i}"];
					$ProdDescricao = $_POST["ProdDescricao_{$i}"];
					$ProdValor = MoedaBR($_POST["ProdValor_{$i}"]);
					$ProdQuantidade = $_POST["ProdQuantidade_{$i}"];
					$ProdFrete = MoedaBR($_POST["ProdFrete_{$i}"]);
				
					$model = Boleto::model()->findByPk($ProdID);
					$model->bol_situacao = $StatusTransacao;
					$model->save();
					
				}

			} 
			else {
				Header("Location: $retorno_site"); exit();
			}
		
		
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
				$this->_model=Boleto::model()->findbyPk($_GET['id']);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='boleto-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

class PagSeguroNpi {
	
	private $timeout = 20; // Timeout em segundos
	
	public function notificationPost() {
		$postdata = 'Comando=validar&Token='.TOKEN;
		foreach ($_POST as $key => $value) {
			$valued    = $this->clearStr($value);
			$postdata .= "&$key=$valued";
		}
		return $this->verify($postdata);
	}
	
	private function clearStr($str) {
		if (!get_magic_quotes_gpc()) {
			$str = addslashes($str);
		}
		return $str;
	}
	
	private function verify($data) {
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, "https://pagseguro.uol.com.br/pagseguro-ws/checkout/NPI.jhtml");
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_TIMEOUT, $this->timeout);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$result = trim(curl_exec($curl));
		curl_close($curl);
		return $result;
	}

}

function MoedaBR($valor) {
	$valor = str_replace('.','',$valor);
	$valor = str_replace(',','.',$valor);
	return $valor;
}

function ConverterData($data) {
	$data = explode(' ', $data);
	$hora = $data[1]; $data = $data[0];
	$data = explode('/', $data);
	$data = $data[2].'-'.$data[1].'-'.$data[0].' ';		
	return $data.$hora;
}

?>