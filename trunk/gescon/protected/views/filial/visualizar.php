<?php
$this->breadcrumbs=array(
	'Filiais'=>array('gerenciar'),
	$model->fil_id,
);

?>

<h1>Visualizando Filial #<?php echo $model->fil_id; ?></h1>

<?php 
	if (isset($model->fil_data_modificacao))
		$data_modificacao = date('d/m/Y H:i:s', strtotime($model->fil_data_modificacao));
	else
		$data_modificacao = '';
	if (isset($model->fil_data_desligamento))
		$data_desligamento = date('d/m/Y H:i:s', strtotime($model->fil_data_desligamento));
	else
		$data_desligamento = '';
	$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fil_id',
		'fil_cnpj',
		'fil_nome',
		'fil_site',
		'fil_email',
		'fil_cpf_representante',
		'fil_nome_representante',
		'fil_obs',
		array(
			'name' => 'Empresa',
			'value' => $model->empresa->emp_nome
		),
		'fil_fone1',
		'fil_fone2',
		'fil_uf',
		'fil_cidade',
		'fil_endereco',
		'fil_cep',
		'fil_ativo',
		array(
			'name' => 'Data de Cadastro',
			'value' => date('d/m/Y H:i:s', strtotime($model->fil_data_ingresso))
		),
		array(
			'name' => 'Data de Modifica&ccedil;&atilde;o',
			'value' => $data_modificacao,
		),
		array(
			'name' => 'Data de desligamento',
			'value' => $data_desligamento,
		),
	),
)); ?>
