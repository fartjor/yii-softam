<?php

/**
 * This is the model class for table "empresa".
 *
 * The followings are the available columns in table 'empresa':
 * @property integer $emp_id
 * @property integer $end_id
 * @property string $emp_nome
 * @property string $emp_cnpj
 * @property string $emp_data_ingresso
 * @property string $emp_site
 * @property string $emp_email
 * @property string $emp_cpf_socio_majoritario
 * @property integer $tel_id
 */
class Empresa extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Empresa the static model class
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
		return 'empresa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('end_id, emp_nome, emp_cnpj, emp_data_ingresso, tel_id', 'required'),
			array('end_id, tel_id', 'numerical', 'integerOnly'=>true),
			array('emp_nome, emp_site, emp_email', 'length', 'max'=>255),
			array('emp_cnpj', 'length', 'max'=>14),
			array('emp_cpf_socio_majoritario', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('emp_id, end_id, emp_nome, emp_cnpj, emp_data_ingresso, emp_site, emp_email, emp_cpf_socio_majoritario, tel_id', 'safe', 'on'=>'search'),
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
			'end' => array(self::BELONGS_TO, 'Endereco', 'end_id'),
			'tel' => array(self::BELONGS_TO, 'Telefone', 'tel_id'),
			'filials' => array(self::HAS_MANY, 'Filial', 'emp_id'),
			'funcionarios' => array(self::HAS_MANY, 'Funcionario', 'emp_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'emp_id' => 'Emp',
			'end_id' => 'End',
			'emp_nome' => 'Emp Nome',
			'emp_cnpj' => 'Emp Cnpj',
			'emp_data_ingresso' => 'Emp Data Ingresso',
			'emp_site' => 'Emp Site',
			'emp_email' => 'Emp Email',
			'emp_cpf_socio_majoritario' => 'Emp Cpf Socio Majoritario',
			'tel_id' => 'Tel',
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

		$criteria->compare('emp_id',$this->emp_id);

		$criteria->compare('end_id',$this->end_id);

		$criteria->compare('emp_nome',$this->emp_nome,true);

		$criteria->compare('emp_cnpj',$this->emp_cnpj,true);

		$criteria->compare('emp_data_ingresso',$this->emp_data_ingresso,true);

		$criteria->compare('emp_site',$this->emp_site,true);

		$criteria->compare('emp_email',$this->emp_email,true);

		$criteria->compare('emp_cpf_socio_majoritario',$this->emp_cpf_socio_majoritario,true);

		$criteria->compare('tel_id',$this->tel_id);

		return new CActiveDataProvider('Empresa', array(
			'criteria'=>$criteria,
		));
	}
}