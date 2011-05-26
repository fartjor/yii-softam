<?php

/**
 * This is the model class for table "filial".
 *
 * The followings are the available columns in table 'filial':
 * @property integer $fil_id
 * @property string $fil_cnpj
 * @property string $fil_nome
 * @property string $fil_data_ingresso
 * @property string $fil_site
 * @property string $fil_email
 * @property string $fil_cpf_representante
 * @property string $fil_ativo
 * @property string $fil_obs
 * @property string $fil_data_modificacao
 * @property string $fil_data_desligamento
 * @property integer $emp_id
 * @property string $fil_fone1
 * @property string $fil_fone2
 * @property string $fil_uf
 * @property string $fil_cidade
 * @property string $fil_endereco
 * @property string $fil_cep
 */
class Filial extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Filial the static model class
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
		return 'filial';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fil_cnpj, fil_nome, fil_data_ingresso, fil_ativo, emp_id, fil_fone1, fil_uf, fil_cidade, fil_endereco', 'required'),
			array('fil_id, emp_id', 'numerical', 'integerOnly'=>true),
			array('fil_cnpj', 'length', 'max'=>18),
			array('fil_nome, fil_site, fil_email, fil_obs', 'length', 'max'=>255),
			array('fil_cpf_representante', 'length', 'max'=>14),
			array('fil_ativo', 'length', 'max'=>1),
			array('fil_fone1, fil_fone2', 'length', 'max'=>13),
			array('fil_uf', 'length', 'max'=>2),
			array('fil_cidade', 'length', 'max'=>60),
			array('fil_endereco', 'length', 'max'=>220),
			array('fil_cep', 'length', 'max'=>9),
			array('fil_data_modificacao, fil_data_desligamento', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('fil_id, fil_cnpj, fil_nome, fil_data_ingresso, fil_site, fil_email, fil_cpf_representante, fil_ativo, fil_obs, fil_data_modificacao, fil_data_desligamento, emp_id, fil_fone1, fil_fone2, fil_uf, fil_cidade, fil_endereco, fil_cep', 'safe', 'on'=>'search'),
			array('fil_cnpj', 'ext.validadores.cnpj'),
			array('fil_cpf_representante', 'ext.validadores.cpf'),
			array('fil_email', 'email'),
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
			'empresa' => array(self::BELONGS_TO, 'Empresa', 'emp_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'fil_id' => 'Código',
			'fil_cnpj' => 'CNPJ',
			'fil_nome' => 'Razão Social',
			'fil_data_ingresso' => 'Data do Cadastro',
			'fil_site' => 'Site',
			'fil_email' => 'E-mail',
			'fil_cpf_representante' => 'CPF do Representante',
			'fil_ativo' => 'Situação',
			'fil_obs' => 'Observação',
			'fil_data_modificacao' => 'Data de Modificação',
			'fil_data_desligamento' => 'Data de Desligamento',
			'emp_id' => 'Empresa',
			'fil_fone1' => 'Telefone 1',
			'fil_fone2' => 'Telefone 2',
			'fil_uf' => 'UF',
			'fil_cidade' => 'Cidade',
			'fil_endereco' => 'Endereço',
			'fil_cep' => 'CEP',
		);
	}
	public function getAtivoText()
    {
    	$options=$this->AtivoOptions;
        return $options[$this->fil_ativo];
    }
	public function getAtivoOptions()
    {
        return array(
            'A'=>'Ativo',
            'I'=>'Inativo',
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

		$criteria->compare('fil_id',$this->fil_id);

		$criteria->compare('fil_cnpj',$this->fil_cnpj,true);

		$criteria->compare('fil_nome',$this->fil_nome,true);

		$criteria->compare('fil_data_ingresso',$this->fil_data_ingresso,true);

		$criteria->compare('fil_site',$this->fil_site,true);

		$criteria->compare('fil_email',$this->fil_email,true);

		$criteria->compare('fil_cpf_representante',$this->fil_cpf_representante,true);

		$criteria->compare('fil_ativo',$this->fil_ativo,true);

		$criteria->compare('fil_obs',$this->fil_obs,true);

		$criteria->compare('fil_data_modificacao',$this->fil_data_modificacao,true);

		$criteria->compare('fil_data_desligamento',$this->fil_data_desligamento,true);

		$criteria->compare('emp_id',$this->emp_id);

		$criteria->compare('fil_fone1',$this->fil_fone1,true);

		$criteria->compare('fil_fone2',$this->fil_fone2,true);

		$criteria->compare('fil_uf',$this->fil_uf,true);

		$criteria->compare('fil_cidade',$this->fil_cidade,true);

		$criteria->compare('fil_endereco',$this->fil_endereco,true);

		$criteria->compare('fil_cep',$this->fil_cep,true);

		return new CActiveDataProvider('Filial', array(
			'criteria'=>$criteria,
		));
	}
}