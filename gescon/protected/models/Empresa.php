<?php

/**
 * This is the model class for table "empresa".
 *
 * The followings are the available columns in table 'empresa':
 * @property integer $emp_id
 * @property string $emp_nome
 * @property string $emp_cnpj
 * @property string $emp_data_ingresso
 * @property string $emp_site
 * @property string $emp_email
 * @property string $emp_cpf_socio_majoritario
 * @property string $emp_fone1
 * @property string $emp_fone2
 * @property string $emp_uf
 * @property string $emp_cidade
 * @property string $emp_endereco
 * @property string $emp_cep
 */
class Empresa extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Empresa the static model class
	 */
	public $email;
	
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
			array('emp_nome, emp_cnpj, emp_data_ingresso, emp_fone1, emp_uf, emp_cidade, emp_endereco', 'required'),
			array('emp_nome, emp_site, emp_email', 'length', 'max'=>255),
			array('emp_cnpj', 'length', 'max'=>18),
			array('emp_cpf_socio_majoritario', 'length', 'max'=>14),
			array('emp_fone1, emp_fone2', 'length', 'max'=>13),
			array('emp_uf', 'length', 'max'=>2),
			array('emp_cidade', 'length', 'max'=>60),
			array('emp_endereco', 'length', 'max'=>200),
			array('emp_cep', 'length', 'max'=>9),
			array('emp_situacao, emp_nome_socio_majoritario', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('emp_id, emp_nome, emp_cnpj, emp_data_ingresso, emp_site, emp_email, emp_cpf_socio_majoritario, emp_fone1, emp_fone2, emp_uf, emp_cidade, emp_endereco, emp_cep, emp_nome_socio_majoritario', 'safe', 'on'=>'search'),
			array('emp_email', 'email'),
			array('emp_cpf_socio_majoritario', 'ext.validadores.cpf'),
			array('emp_cnpj', 'ext.validadores.cnpj'),
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
			'emp_id' => 'Código',
			'emp_nome' => 'Razão Social',
			'emp_cnpj' => 'CNPJ',
			'emp_data_ingresso' => 'Data de Cadastro',
			'emp_site' => 'Site',
			'emp_email' => 'Email',
			'emp_cpf_socio_majoritario' => 'CPF do Sócio Majoritário',
			'emp_fone1' => 'Telefone 1',
			'emp_fone2' => 'Telefone 2',
			'emp_uf' => 'UF',
			'emp_cidade' => 'Cidade',
			'emp_endereco' => 'Endereço',
			'emp_cep' => 'CEP',
			'emp_situacao' => 'Situação',
			'emp_nome_socio_majoritario' => 'Nome do Sócio Majoritário',
		);
	}	
	public function scopes(){
		return array(
    		'ativos'=>array(
          		'condition'=>'emp_situacao = "A"',
    		),
			'inativos'=>array(
          		'condition'=>'emp_situacao = "I"',
    		),
		);	
	}
	
	public function getSituacaoText()
    {
    	$options=$this->situacaoOptions;
        return $options[$this->emp_situacao];
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

		$criteria->compare('emp_id',$this->emp_id);

		$criteria->compare('emp_nome',$this->emp_nome,true);

		$criteria->compare('emp_cnpj',$this->emp_cnpj,true);

		$criteria->compare('emp_data_ingresso',$this->emp_data_ingresso,true);

		$criteria->compare('emp_site',$this->emp_site,true);

		$criteria->compare('emp_email',$this->emp_email,true);

		$criteria->compare('emp_cpf_socio_majoritario',$this->emp_cpf_socio_majoritario,true);

		$criteria->compare('emp_fone1',$this->emp_fone1,true);

		$criteria->compare('emp_fone2',$this->emp_fone2,true);

		$criteria->compare('emp_uf',$this->emp_uf,true);

		$criteria->compare('emp_cidade',$this->emp_cidade,true);

		$criteria->compare('emp_endereco',$this->emp_endereco,true);


		$criteria->compare('emp_cep',$this->emp_cep,true);
		
		$criteria->compare('emp_situacao',$this->emp_situacao,true);

		$criteria->compare('emp_cep',$this->emp_cep,true);
		
		$criteria->compare('emp_situacao',$this->emp_situacao,true);
		
		$criteria->compare('emp_nome_socio_majoritario',$this->emp_nome_socio_majoritario,true);

		return new CActiveDataProvider('Empresa', array(
			'criteria'=>$criteria,
		));
	}

 
	
}