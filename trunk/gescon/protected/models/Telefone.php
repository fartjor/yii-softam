<?php

/**
 * This is the model class for table "telefone".
 *
 * The followings are the available columns in table 'telefone':
 * @property integer $tel_id
 * @property string $tel_fone1
 * @property string $tel_fone2
 * @property string $tel_fone3
 */
class Telefone extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Telefone the static model class
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
		return 'telefone';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tel_fone1, tel_fone2, tel_fone3', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('tel_id, tel_fone1, tel_fone2, tel_fone3', 'safe', 'on'=>'search'),
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
			'empresas' => array(self::HAS_MANY, 'Empresa', 'tel_id'),
			'filials' => array(self::HAS_MANY, 'Filial', 'tel_id'),
			'funcionarios' => array(self::HAS_MANY, 'Funcionario', 'tel_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tel_id' => 'Tel',
			'tel_fone1' => 'Tel Fone1',
			'tel_fone2' => 'Tel Fone2',
			'tel_fone3' => 'Tel Fone3',
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

		$criteria->compare('tel_id',$this->tel_id);

		$criteria->compare('tel_fone1',$this->tel_fone1,true);

		$criteria->compare('tel_fone2',$this->tel_fone2,true);

		$criteria->compare('tel_fone3',$this->tel_fone3,true);

		return new CActiveDataProvider('Telefone', array(
			'criteria'=>$criteria,
		));
	}
}