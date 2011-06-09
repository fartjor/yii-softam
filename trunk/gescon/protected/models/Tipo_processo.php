<?php

/**
 * This is the model class for table "tipo_processo".
 *
 * The followings are the available columns in table 'tipo_processo':
 * @property integer $tpr_id
 * @property double $tpr_numero
 * @property string $tpr_nome
 * @property string $tpr_area_atuacao
 * @property string $tpr_data_ingresso
 * @property string $tpr_obs
 * @property string $tpr_data_modificacao
 * @property string $tpr_data_desativacao
 */
class Tipo_processo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Tipo_processo the static model class
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
		return 'tipo_processo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tpr_nome, tpr_area_atuacao, tpr_data_ingresso', 'required'),
			array('tpr_nome, tpr_area_atuacao', 'length', 'max'=>100),
			array('tpr_obs', 'length', 'max'=>255),
			array('tpr_data_modificacao tpr_situacao', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('tpr_id, tpr_nome, tpr_area_atuacao, tpr_data_ingresso, tpr_obs, tpr_data_modificacao, tpr_situacao', 'safe', 'on'=>'search'),
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
			'processos' => array(self::HAS_MANY, 'Processo', 'tpr_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tpr_id' => 'Código',
			'tpr_nome' => 'Nome',
			'tpr_area_atuacao' => 'Área de Atuacao',
			'tpr_data_ingresso' => 'Data de Cadastro',
			'tpr_obs' => 'Observação',
			'tpr_data_modificacao' => 'Data de Modificação',
			'tpr_situacao' => 'Situação'
		);
	}
	
	public function getSituacaoText()
    {
    	$options=$this->situacaoOptions;
        return $options[$this->tpr_situacao];
    }
	public function getSituacaoOptions()
    {
        return array(
            'A'=>'Ativa',
            'I'=>'Inativa',
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

		$criteria->compare('tpr_id',$this->tpr_id);

		$criteria->compare('tpr_nome',$this->tpr_nome,true);

		$criteria->compare('tpr_area_atuacao',$this->tpr_area_atuacao,true);

		$criteria->compare('tpr_data_ingresso',$this->tpr_data_ingresso,true);

		$criteria->compare('tpr_obs',$this->tpr_obs,true);

		$criteria->compare('tpr_data_modificacao',$this->tpr_data_modificacao,true);
		$criteria->compare('tpr_situacao',$this->tpr_situacao,true);

		return new CActiveDataProvider('Tipo_processo', array(
			'criteria'=>$criteria,
		));
	}
}