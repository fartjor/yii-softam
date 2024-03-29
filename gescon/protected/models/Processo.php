<?php

/**
 * This is the model class for table "processo".
 *
 * The followings are the available columns in table 'processo':
 * @property integer $pro_id
 * @property double $pro_numero
 * @property string $pro_data_ingresso
 * @property string $pro_obs
 * @property string $pro_data_modificacao
 * @property string $pro_data_desativacao
 * @property integer $cli_id
 * @property integer $tpr_id
 */
class Processo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Processo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'processo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pro_data_ingresso, cli_id, tpr_id, pro_car_placa, 
				   pro_car_renavan, pro_car_ano, pro_car_modelo, pro_car_marca, pro_car_valor
				   pro_car_qtde_prestacoes, pro_car_valor_parcela,pro_car_qtde_prestacoes_pagas,pro_car_chaci,
			pro_car_entrada, pro_car_mensalidade, pro_car_valor_juizo, pro_car_economia', 'required'),
			array('cli_id, tpr_id', 'numerical', 'integerOnly'=>true),
			array('pro_numero', 'numerical'),
			array('pro_obs', 'length', 'max'=>255),
			array('pro_data_modificacao, pro_data_desativacao, pro_car_qtde_prestacoes, pro_car_qtde_prestacoes_pagas, pro_car_valor_parcela,
			pro_car_entrada, pro_car_mensalidade, pro_car_valor_juizo, pro_car_economia', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pro_id, pro_numero, pro_data_ingresso, pro_obs, pro_data_modificacao, pro_data_desativacao, cli_id, tpr_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'cliente' => array(self::BELONGS_TO, 'Cliente', 'cli_id'),
			'tipo_processo' => array(self::BELONGS_TO, 'Tipo_processo', 'tpr_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pro_id' => 'Código',
			'pro_numero' => 'Número',
			'pro_data_ingresso' => 'Data de Cadastro',
			'pro_obs' => 'Observação',
			'pro_data_modificacao' => 'Data de Modificação',
			'pro_data_desativacao' => 'Data de Desativação',
			'cli_id' => 'Cliente',
			'tpr_id' => 'Tipo de Processo',
			'pro_car_placa' => 'Placa do Veículo',
			'pro_car_renavan' => 'Renavan',
			'pro_car_ano' => 'Ano',
			'pro_car_modelo' => 'Modelo do Veículo',
			'pro_car_marca' => 'Marca do Veículo',
			'pro_car_valor' => 'Valor Financiado',
			'pro_car_qtde_prestacoes' => 'Quantidade de Prestações',
			'pro_car_qtde_prestacoes_pagas' => 'Quantidade de Prestações pagas',
			'pro_car_valor_parcela' => 'Valor da Parcela',
			'pro_car_entrada' => 'Honorários de Entrada',
			'pro_car_mensalidade' => 'Honorário Mensalidade',
			'pro_car_valor_juizo' => 'Valor da Parcela em Juízo',
			'pro_car_economia' => 'Previsão de Economia',
			'pro_car_chaci' => 'Chaci',
			'pro_situacao' => 'Situação'
		);
	}
	
	public function getSituacaoText()
    {
    	$options=$this->situacaoOptions;
        return $options[$this->pro_situacao];
    }
	public function getSituacaoOptions()
    {
        return array(
            'I'=>'Iniciado',
            'A'=>'Aberto',
        	'C'=>'Cancelado',
        	'E'=>'Em Processo',
        	'F'=>'Fechado',
     	);
    }
	
	public function beforeValidate(){
		$this->pro_car_valor = $this->tiraMoeda($this->pro_car_valor);
		$this->pro_car_valor_parcela = $this->tiraMoeda($this->pro_car_valor_parcela);
		$this->pro_car_entrada = $this->tiraMoeda($this->pro_car_entrada);
		$this->pro_car_valor_juizo = $this->tiraMoeda($this->pro_car_valor_juizo);
		$this->pro_car_mensalidade = $this->tiraMoeda($this->pro_car_mensalidade);
		$this->pro_car_economia = $this->tiraMoeda($this->pro_car_economia);
		
		return parent::beforeValidate();
	}
	
	public function tiraMoeda($valor){
		$valor = substr($valor, 3);
		$pontos = '.';
		$virgula = ',';
		$valor = str_replace($pontos, "", $valor);
		$valor = str_replace($virgula, ".", $valor);
		return $valor;
	}
	
	public function dataMysql($data){
		return implode("-",array_reverse(explode("/",$data)));	
	}
	
	public function Moeda($valor){
		return 'R$ '. number_format($valor, 2, ',' , '.');
	}
	
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('pro_id',$this->pro_id);

		$criteria->compare('pro_numero',$this->pro_numero);

		$criteria->compare('pro_data_ingresso',$this->pro_data_ingresso,true);

		$criteria->compare('pro_obs',$this->pro_obs,true);

		$criteria->compare('pro_data_modificacao',$this->pro_data_modificacao,true);

		$criteria->compare('pro_data_desativacao',$this->pro_data_desativacao,true);

		$criteria->compare('cli_id',$this->cli_id);

		$criteria->compare('tpr_id',$this->tpr_id);


		return new CActiveDataProvider('Processo', array(
			'criteria'=>$criteria,
		));
	}
}