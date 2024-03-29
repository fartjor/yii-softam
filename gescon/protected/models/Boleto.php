<?php

/**
 * This is the model class for table "boleto".
 *
 * The followings are the available columns in table 'boleto':
 * @property integer $bol_codigo
 * @property string $bol_valor
 * @property string $bol_vencimento
 * @property string $bol_transacao
 * @property string $bol_situacao
 * @property integer $pro_id
 */
class Boleto extends CActiveRecord
{
	public $qtde, $data, $acoes;
	/**
	 * Returns the static model of the specified AR class.
	 * @return Boleto the static model class
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
		return 'boleto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bol_codigo, bol_valor, bol_vencimento, bol_situacao, bol_tipo, data', 'required'),
			array('bol_codigo, pro_id', 'numerical', 'integerOnly'=>true),
			array('bol_valor', 'length', 'max'=>13),
			array('bol_transacao', 'length', 'max'=>20),
			array('bol_situacao', 'length', 'max'=>45),
			array('data', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('bol_codigo, bol_valor, bol_vencimento, bol_transacao, bol_situacao, pro_id', 'safe', 'on'=>'search'),
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
			'processo' => array(self::BELONGS_TO, 'Processo', 'pro_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'bol_codigo' => 'Bol Codigo',
			'bol_valor' => 'Valor da Cobrança',
			'bol_vencimento' => 'Data do Vencimento Original',
			'bol_transacao' => 'Bol Transacao',
			'bol_situacao' => 'Situação',
			'pro_id' => 'Código do Processo',
			'bol_tipo' => 'Tipo de Cobrança',
			'qtde' => 'Quantidade de Parcelas',
			'data' => 'Data do Vencimento',
			'acoes' => 'Ações'
		);
	}
	
	public function getTipoText()
    {
    	$options=$this->tipoOptions;
        return $options[$this->tipo];
    }
    
	public function getTipoOptions()
    {
        return array(
            'E'=>'Entrada',
            'M'=>'Mensais',

        );
    }
    
    public function types(){
    	return array('qtde' => 'int');
    }
    
	public function beforeValidate(){
		$this->bol_valor = $this->tiraMoeda($this->bol_valor);	
		$this->bol_vencimento = $this->dataMysql($this->bol_vencimento);
		//$this->bol_vencimento = '2011-06-21';
		
		$this->bol_transacao = '';
		
		//echo '<br />Valor: ' . $this->bol_valor;
		//echo '<br />Vencimento: ' . $this->bol_vencimento;
		//echo '<br />Data: ' . $this->data;
		//echo '<br />Situa��o: ' . $this->bol_situacao;
		//echo '<br />Processo: ' . $this->pro_id;
		//echo '<br />Tipo: ' . $this->bol_tipo;
		
		return parent::beforeValidate();
	}
	
	public function afterFind(){
		$this->bol_vencimento = $this->dataBR($this->bol_vencimento);
		
		return parent::afterFind();
	}
    
	public function tiraMoeda($valor){
		$valor = substr($valor, 3);
		$pontos = '.';
		$virgula = ',';
		$valor = str_replace($pontos, "", $valor);
		$valor = str_replace($virgula, ".", $valor);
		return $valor;
	}
	
	public function Moeda($valor){
		return 'R$ '. number_format($valor, 2, ',' , '.');
	}
	
	public function dataBR($data){
		return implode("/",array_reverse(explode("-",$data)));	
	}
	
	public function dataMysql($data){
		return implode("-",array_reverse(explode("/",$data)));	
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

		$criteria->compare('bol_codigo',$this->bol_codigo);

		$criteria->compare('bol_valor',$this->bol_valor,true);

		$criteria->compare('bol_vencimento',$this->bol_vencimento,true);

		$criteria->compare('bol_transacao',$this->bol_transacao,true);

		$criteria->compare('bol_situacao',$this->bol_situacao,true);

		$criteria->compare('pro_id',$this->pro_id);

		return new CActiveDataProvider('Boleto', array(
			'criteria'=>$criteria,
		));
	}
}