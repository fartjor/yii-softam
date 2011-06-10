<?php

/**
 * This is the model class for table "cliente".
 *
 * The followings are the available columns in table 'cliente':
 * @property integer $cli_id
 * @property string $cli_cpf
 * @property string $cli_data_cadastro
 * @property integer $cli_numero_cliente
 * @property string $cli_nome
 * @property string $cli_sexo
 * @property string $cli_estado_civil
 * @property string $cli_profissao
 * @property string $cli_email
 * @property string $cli_conhecimento
 * @property string $cli_obs
 * @property string $cli_data_modificacao
 * @property string $cli_data_desligamento
 * @property string $cli_fone1
 * @property string $cli_fone2
 * @property string $cli_endereco
 * @property string $cli_cidade
 * @property string $cli_uf
 * @property string $cli_cep
 */
class Cliente extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Cliente the static model class
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
		return 'cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cli_cpf, cli_data_cadastro, cli_numero_cliente, cli_nome, cli_sexo, cli_estado_civil, cli_profissao, cli_fone1, cli_endereco, cli_cidade, cli_uf', 'required'),
			array('cli_numero_cliente', 'numerical', 'integerOnly'=>true),
			array('cli_cpf', 'length', 'max'=>14),
			array('cli_nome, cli_profissao', 'length', 'max'=>100),
			array('cli_sexo, cli_estado_civil', 'length', 'max'=>1),
			array('cli_email, cli_obs', 'length', 'max'=>255),
			array('cli_conhecimento', 'length', 'max'=>45),
			array('cli_fone1, cli_fone2', 'length', 'max'=>13),
			array('cli_endereco', 'length', 'max'=>120),
			array('cli_cidade', 'length', 'max'=>60),
			array('cli_uf', 'length', 'max'=>2),
			array('cli_cep', 'length', 'max'=>9),
			array('cli_data_modificacao, cli_data_desligamento', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cli_id, cli_cpf, cli_data_cadastro, cli_numero_cliente, cli_nome, cli_sexo, cli_estado_civil, cli_profissao, cli_email, cli_conhecimento, cli_obs, cli_data_modificacao, cli_data_desligamento, cli_fone1, cli_fone2, cli_endereco, cli_cidade, cli_uf, cli_cep', 'safe', 'on'=>'search'),
			array('cli_cpf', 'ext.validadores.cpf'),
			array('cli_email', 'email'),
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
			'filial_clientes' => array(self::HAS_MANY, 'FilialCliente', 'cli_id'),
			'processos' => array(self::HAS_MANY, 'Processo', 'cli_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cli_id' => 'Código',
			'cli_cpf' => 'CPF',
			'cli_data_cadastro' => 'Data de Cadastro',
			'cli_numero_cliente' => 'Numero do Cliente',
			'cli_nome' => 'Nome',
			'cli_sexo' => 'Sexo',
			'cli_estado_civil' => 'Estado Civil',
			'cli_profissao' => 'Profissão',
			'cli_email' => 'Email',
			'cli_conhecimento' => 'Conhecimento',
			'cli_obs' => 'Obs',
			'cli_data_modificacao' => 'Data de Modificação',
			'cli_data_desligamento' => 'Data de Desligamento',
			'cli_fone1' => 'Telefone 1',
			'cli_fone2' => 'Telefone 2',
			'cli_endereco' => 'Endereço',
			'cli_cidade' => 'Cidade',
			'cli_uf' => 'UF',
			'cli_cep' => 'CEP',
		);
	}

	public function getSexoText()
    {
    	$options=$this->SexoOptions;
        return $options[$this->cli_sexo];
    }
	public function getSexoOptions()
    {
        return array(
            'M'=>'Masculino',
            'F'=>'Feminino',
     	);
     }
	public function getEstadoText()
    {
    	$options=$this->EstadoOptions;
        return $options[$this->cli_estado_civil];
    }
	public function getEstadoOptions()
    {
        return array(
            'S'=>'Solteiro',
            'C'=>'Casado',
        	'D'=>'Divorciado',
        	'V'=>'Viúvo',
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
		$criteria->compare('cli_id',$this->cli_id);
		$criteria->compare('cli_cpf',$this->cli_cpf,true);
		$criteria->compare('cli_data_cadastro',$this->cli_data_cadastro,true);
		$criteria->compare('cli_nome',$this->cli_nome,true);
		$criteria->compare('cli_sexo',$this->cli_sexo,true);
		$criteria->compare('cli_estado_civil',$this->cli_estado_civil,true);
		$criteria->compare('cli_profissao',$this->cli_profissao,true);
		$criteria->compare('cli_email',$this->cli_email,true);
		$criteria->compare('cli_conhecimento',$this->cli_conhecimento,true);
		$criteria->compare('cli_obs',$this->cli_obs,true);
		$criteria->compare('cli_data_modificacao',$this->cli_data_modificacao,true);
		$criteria->compare('cli_fone1',$this->cli_fone1,true);
		$criteria->compare('cli_fone2',$this->cli_fone2,true);
		$criteria->compare('cli_endereco',$this->cli_endereco,true);
		$criteria->compare('cli_cidade',$this->cli_cidade,true);
		$criteria->compare('cli_uf',$this->cli_uf,true);
		$criteria->compare('cli_cep',$this->cli_cep,true);
		return new CActiveDataProvider('Cliente', array(
			'criteria'=>$criteria,
		));
	}
}