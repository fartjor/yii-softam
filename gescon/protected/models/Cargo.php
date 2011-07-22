<?php

/**
 * This is the model class for table "cargo".
 *
 * The followings are the available columns in table 'cargo':
 * @property integer $car_id
 * @property string $car_nome
 * @property string $car_data_ingresso
 * @property string $car_ativo
 * @property string $car_obs
 * @property string $car_data_modificacao
 */
class Cargo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Cargo the static model class
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
		return 'cargo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('car_nome, car_data_ingresso, car_ativo', 'required'),
			array('car_nome', 'length', 'max'=>100),
			array('car_ativo', 'length', 'max'=>1),
			array('car_obs', 'length', 'max'=>255),
			array('car_data_modificacao', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('car_id, car_nome, car_data_ingresso, car_ativo, car_obs, car_data_modificacao', 'safe', 'on'=>'search'),
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
			'funcionarios' => array(self::HAS_MANY, 'Funcionario', 'car_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'car_id' => 'Código',
			'car_nome' => 'Nome do Cargo',
			'car_data_ingresso' => 'Data do Cadastro',
			'car_ativo' => 'Situação',
			'car_obs' => 'Observação',
			'car_data_modificacao' => 'Data de Modificação',
		);
	}
	
	public function getAtivoText()
    {
    	$options=$this->AtivoOptions;
        return $options[$this->car_ativo];
    }
	public function getAtivoOptions()
    {
        return array(
            'A'=>'Ativo',
            'I'=>'Inativo',
     	);
     }
     
	public function scopes(){
		return array(
    		'ativos'=>array(
          		'condition'=>'car_ativo = "A"',
    		),
			'inativos'=>array(
          		'condition'=>'car_ativo = "I"',
    		),
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

		$criteria->compare('car_id',$this->car_id);

		$criteria->compare('car_nome',$this->car_nome,true);

		$criteria->compare('car_data_ingresso',$this->car_data_ingresso,true);

		$criteria->compare('car_ativo',$this->car_ativo,true);

		$criteria->compare('car_obs',$this->car_obs,true);

		$criteria->compare('car_data_modificacao',$this->car_data_modificacao,true);

		return new CActiveDataProvider('Cargo', array(
			'criteria'=>$criteria,
		));
	}
}