<?php

/**
 * This is the model class for table "acao_processo".
 *
 * The followings are the available columns in table 'acao_processo':
 * @property integer $aca_id
 * @property string $aca_tipo
 * @property integer $usu_id
 * @property string $aca_obs
 * @property integer $pro_id
 * @property string $acao_data
 */
class Acao_processo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Acao_processo the static model class
	 */
	public $data;
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'acao_processo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('aca_tipo, usu_id, aca_obs, pro_id, aca_data', 'required'),
			array('usu_id, pro_id', 'numerical', 'integerOnly'=>true),
			array('aca_tipo', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('aca_id, aca_tipo, usu_id, aca_obs, pro_id, aca_data', 'safe', 'on'=>'search'),
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
			'aca_id' => 'Aca',
			'aca_tipo' => 'Tipo de Ação',
			'usu_id' => 'Usuário',
			'aca_obs' => 'Observação',
			'pro_id' => 'Processo',
			'aca_data' => 'Data da Ação',
		);
	}
	
	public function getTipoText()
    {
    	$options=$this->tipoOptions;
        return $options[$this->aca_tipo];
    }
    
	public function getTipoAnteriorText()
    {
    	$options=$this->tipoOptions;
    	if ($this->aca_tipo_anterior <> '')
        	return $options[$this->aca_tipo_anterior];
        else
        	return 'Sem ação cadastrada!';
    }
    
	public function getTipoOptions()
    {
        return array(
            'I'=>'Iniciado',
            'A'=>'Aberto',
        	'C'=>'Cancelado',
        	'E'=>'Em Processo',
        	'F'=>'Fechado',
     	);
    }
    
    public function getData(){
    	return date('d/m/Y H:i:s', strtotime($this->aca_data));
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

		$criteria->compare('aca_id',$this->aca_id);

		$criteria->compare('aca_tipo',$this->aca_tipo,true);

		$criteria->compare('usu_id',$this->usu_id);

		$criteria->compare('aca_obs',$this->aca_obs,true);

		$criteria->compare('pro_id',$this->pro_id);

		$criteria->compare('aca_data',$this->aca_data,true);
		
		$criteria->order ='aca_data desc';

		return new CActiveDataProvider('Acao_processo', array(
			'criteria'=>$criteria,
		));
	}
}