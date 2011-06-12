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
			array('pro_data_ingresso, cli_id, tpr_id pro_car_placa, 
				   pro_car_renavan, pro_car_ano, pro_car_modelo, pro_car_marca, pro_car_valor
				   pro_car_qtde_prestacoes, pro_car_valor_parcela, pro_car_chaci', 'required'),
			array('cli_id, tpr_id', 'numerical', 'integerOnly'=>true),
			array('pro_numero', 'numerical'),
			array('pro_obs', 'length', 'max'=>255),
			array('pro_data_modificacao, pro_data_desativacao', 'safe'),
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
			'cli' => array(self::BELONGS_TO, 'Cliente', 'cli_id'),
			'tpr' => array(self::BELONGS_TO, 'TipoProcesso', 'tpr_id'),
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
			'pro_car_valor' => 'Valor do Veículo',
			'pro_car_qtde_prestacoes' => 'Quantidade de Parcelas pagas',
			'pro_car_valor_parcela' => 'Valor da Parcela',
			'pro_car_chaci' => 'Chaci',
		);
	}
	
	public function beforeValidate(){
		$patterns = array();
		$patterns[0] = '/R/';
		$patterns[1] = '/./';
		$patterns[2] = '/,/';
		$replacements = array(); 
		$replacements[2] = 'rs';
		$replacements[1] = 'dot';
		$replacements[0] = 'virgula';
		$this->pro_car_valor = preg_replace($patterns, $replacements, $this->pro_car_valor);
		return parent::beforeValidate();
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