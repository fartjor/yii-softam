<?php

/**
 * This is the model class for table "endereco".
 *
 * The followings are the available columns in table 'endereco':
 * @property integer $end_id
 * @property string $end_pais
 * @property string $end_estado
 * @property string $end_cidade
 * @property string $end_bairro
 * @property string $end_rua
 * @property string $end_numero
 * @property string $end_imovel
 */
class Endereco extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Endereco the static model class
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
		return 'endereco';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('end_id, end_pais, end_estado, end_cidade, end_bairro, end_rua, end_numero', 'required'),
			array('end_id', 'numerical', 'integerOnly'=>true),
			array('end_pais, end_estado, end_cidade, end_bairro, end_rua, end_imovel', 'length', 'max'=>255),
			array('end_numero', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('end_id, end_pais, end_estado, end_cidade, end_bairro, end_rua, end_numero, end_imovel', 'safe', 'on'=>'search'),
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
			'empresas' => array(self::HAS_MANY, 'Empresa', 'end_id'),
			'filials' => array(self::HAS_MANY, 'Filial', 'end_id'),
			'funcionarios' => array(self::HAS_MANY, 'Funcionario', 'end_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'end_id' => 'End',
			'end_pais' => 'End Pais',
			'end_estado' => 'End Estado',
			'end_cidade' => 'End Cidade',
			'end_bairro' => 'End Bairro',
			'end_rua' => 'End Rua',
			'end_numero' => 'End Numero',
			'end_imovel' => 'End Imovel',
		);
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

		$criteria->compare('end_id',$this->end_id);

		$criteria->compare('end_pais',$this->end_pais,true);

		$criteria->compare('end_estado',$this->end_estado,true);

		$criteria->compare('end_cidade',$this->end_cidade,true);

		$criteria->compare('end_bairro',$this->end_bairro,true);

		$criteria->compare('end_rua',$this->end_rua,true);

		$criteria->compare('end_numero',$this->end_numero,true);

		$criteria->compare('end_imovel',$this->end_imovel,true);

		return new CActiveDataProvider('Endereco', array(
			'criteria'=>$criteria,
		));
	}
}