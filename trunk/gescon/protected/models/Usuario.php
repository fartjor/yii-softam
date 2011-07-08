<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $usu_id
 * @property string $usu_nome
 * @property string $usu_senha
 * @property string $usu_email
 * @property string $usu_login
 * @property integer $fun_id
 */
class Usuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Usuario the static model class
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
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usu_nome, usu_senha, usu_email, usu_login, fun_id', 'required'),
			array('fun_id', 'numerical', 'integerOnly'=>true),
			array('usu_nome, usu_senha, usu_login', 'length', 'max'=>80),
			array('usu_email', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('usu_id, usu_nome, usu_senha, usu_email, usu_login, fun_id', 'safe', 'on'=>'search'),
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
			'fun' => array(self::BELONGS_TO, 'Funcao', 'fun_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'usu_id' => 'Usu',
			'usu_nome' => 'Usu Nome',
			'usu_senha' => 'Usu Senha',
			'usu_email' => 'Usu Email',
			'usu_login' => 'Usu Login',
			'fun_id' => 'Fun',
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

		$criteria->compare('usu_id',$this->usu_id);

		$criteria->compare('usu_nome',$this->usu_nome,true);

		$criteria->compare('usu_senha',$this->usu_senha,true);

		$criteria->compare('usu_email',$this->usu_email,true);

		$criteria->compare('usu_login',$this->usu_login,true);

		$criteria->compare('fun_id',$this->fun_id);

		return new CActiveDataProvider('Usuario', array(
			'criteria'=>$criteria,
		));
	}
}