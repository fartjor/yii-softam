<?php
$this->breadcrumbs=array(
	'Funcionarios'=>array('gerenciar'),
	$model->fun_id,
);

?>

<h1>Visualizando Funcionario #<?php echo $model->fun_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fun_id',
		'fun_cpf',
		'fun_data_cadastro',
		'fun_numero_funcionario',
		'fun_nome',
		array(
			'name' => 'Sexo',
			'value' => $model->getSexoText()	
		),
		array(
			'name' => 'Estado Civil',
			'value' => $model->getEstadoText()	
		),
		'fun_funcao',
		'fun_email',
		'fun_data_modificacao',
		'fun_data_desligamento',
		array(
			'name' => 'Filial',
			'value' => $model->filial->fil_nome,	
		),
		array(
			'name' => 'Cargo',
			'value' => $model->cargo->car_nome,	
		),
		'fun_fone1',
		'fun_fone2',
		'fun_endereco',
		'fun_cidade',
		'fun_uf',
		'fun_cep',
		'fun_obs',
	),
)); ?>
