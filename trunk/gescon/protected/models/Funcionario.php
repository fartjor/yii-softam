<?php

/**
 * This is the model class for table "funcionario".
 *
 * The followings are the available columns in table 'funcionario':
 * @property integer $fun_id
 * @property string $fun_cpf
 * @property string $fun_data_cadastro
 * @property integer $fun_numero_funcionario
 * @property string $fun_nome
 * @property string $fun_sexo
 * @property string $fun_estado_civil
 * @property string $fun_funcao
 * @property string $fun_email
 * @property string $fun_estado
 * @property string $fun_obs
 * @property string $fun_data_modificacao
 * @property string $fun_data_desligamento
 * @property integer $car_id
 * @property integer $emp_id
 * @property string $fun_fone1
 * @property string $fun_fone2
 * @property string $fun_endereco
 * @property string $fun_cidade
 * @property string $fun_uf
 * @property string $fun_cep
 */
class Funcionario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Funcionario the static model class
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
		return 'funcionario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fun_cpf, fun_data_cadastro, fun_numero_funcionario, fun_nome, fun_sexo, fun_estado_civil, fun_funcao, fun_email, car_id, fun_fone1, fun_endereco, fun_cidade, fun_uf, fil_id', 'required'),
			array('fun_id, fun_numero_funcionario, car_id', 'numerical', 'integerOnly'=>true),
			array('fun_cpf', 'length', 'max'=>14),
			array('fun_nome', 'length', 'max'=>100),
			array('fun_sexo, fun_estado_civil, fun_estado', 'length', 'max'=>1),
			array('fun_funcao', 'length', 'max'=>45),
			array('fun_email, fun_obs', 'length', 'max'=>255),
			array('fun_fone1, fun_fone2', 'length', 'max'=>13),
			array('fun_endereco', 'length', 'max'=>120),
			array('fun_cidade', 'length', 'max'=>50),
			array('fun_uf', 'length', 'max'=>2),
			array('fun_cep', 'length', 'max'=>9),
			array('fun_data_modificacao, fun_data_desligamento', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('fun_id, fun_cpf, fun_data_cadastro, fun_numero_funcionario, fun_nome, fun_sexo, fun_estado_civil, fun_funcao, fun_email, fun_estado, fun_obs, fun_data_modificacao, fun_data_desligamento, car_id, fun_fone1, fun_fone2, fun_endereco, fun_cidade, fun_uf, fun_cep', 'safe', 'on'=>'search'),
			array('fun_cpf', 'ext.validadores.cpf'),
			array('fun_email', 'email'),
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
			'cargo' => array(self::BELONGS_TO, 'Cargo', 'car_id'),
			'filial' => array(self::BELONGS_TO, 'Filial', 'fil_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'fun_id' => 'Código',
			'fun_cpf' => 'CPF',
			'fun_data_cadastro' => 'Data de Cadastro',
			'fun_numero_funcionario' => 'Número do Funcionário',
			'fun_nome' => 'Nome',
			'fun_sexo' => 'Sexo',
			'fun_estado_civil' => 'Estado Civil',
			'fun_funcao' => 'Função',
			'fun_email' => 'Email',
			'fun_obs' => 'Observação',
			'fun_data_modificacao' => 'Data de Modificação',
			'fun_data_desligamento' => 'Data de Desligamento',
			'car_id' => 'Cargo',
			'fil_id' => 'Filial',
			'fun_fone1' => 'Telefone 1',
			'fun_fone2' => 'Telefone 2',
			'fun_endereco' => 'Endereço',
			'fun_cidade' => 'Cidade',
			'fun_uf' => 'UF',
			'fun_cep' => 'CEP',
		);
	}

	public function getSexoText()
    {
    	$options=$this->SexoOptions;
        return $options[$this->fun_sexo];
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
        return $options[$this->fun_estado_civil];
    }
	public function getEstadoOptions()
    {
        return array(
            'S'=>'Solteiro',
            'C'=>'Casado',
        	'D'=>'Divorciado',
        	'V'=>'Vi�vo',
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
		$criteria->compare('fun_cpf',$this->fun_cpf,true);
		$criteria->compare('fun_data_cadastro',$this->fun_data_cadastro,true);
		$criteria->compare('fun_numero_funcionario',$this->fun_numero_funcionario);
		$criteria->compare('fun_nome',$this->fun_nome,true);
		$criteria->compare('fun_sexo',$this->fun_sexo,true);
		$criteria->compare('fun_estado_civil',$this->fun_estado_civil,true);
		$criteria->compare('fun_funcao',$this->fun_funcao,true);
		$criteria->compare('fun_email',$this->fun_email,true);
		$criteria->compare('fun_obs',$this->fun_obs,true);
		$criteria->compare('fun_data_modificacao',$this->fun_data_modificacao,true);
		$criteria->compare('fun_data_desligamento',$this->fun_data_desligamento,true);
		$criteria->compare('car_id',$this->car_id);
		$criteria->compare('fun_fone1',$this->fun_fone1,true);
		$criteria->compare('fun_fone2',$this->fun_fone2,true);
		$criteria->compare('fun_endereco',$this->fun_endereco,true);
		$criteria->compare('fun_cidade',$this->fun_cidade,true);
		$criteria->compare('fun_uf',$this->fun_uf,true);
		$criteria->compare('fun_cep',$this->fun_cep,true);
		return new CActiveDataProvider('Funcionario', array(
			'criteria'=>$criteria,
		));
	}
}