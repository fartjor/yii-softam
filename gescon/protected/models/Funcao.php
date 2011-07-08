<?php

/**
 * This is the model class for table "funcao".
 *
 * The followings are the available columns in table 'funcao':
 * @property integer $fun_id
 * @property string $fun_nome
 */
class Funcao extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Funcao the static model class
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
		return 'funcao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fun_nome', 'required'),
			array('fun_nome', 'length', 'max'=>80),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('fun_id, fun_nome', 'safe', 'on'=>'search'),
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
			'usuarios' => array(self::HAS_MANY, 'Usuario', 'fun_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'fun_id' => 'Fun',
			'fun_nome' => 'Fun Nome',
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

		$criteria->compare('fun_id',$this->fun_id);

		$criteria->compare('fun_nome',$this->fun_nome,true);

		return new CActiveDataProvider('Funcao', array(
			'criteria'=>$criteria,
		));
	}
}