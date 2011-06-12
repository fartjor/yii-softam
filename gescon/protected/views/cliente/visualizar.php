<?php
$this->breadcrumbs=array(
	'Clientes'=>array('gerenciar'),
	$model->cli_id,
);

?>

<h1>Visualizando Cliente #<?php echo $model->cli_id; ?></h1>

<?php 
	if (isset($model->cli_data_modificacao))
		$data_modificacao = date('d/m/Y H:i:s', strtotime($model->cli_data_modificacao));
	else
		$data_modificacao = '';
	$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cli_id',
		'cli_cpf',
		'cli_nome',
		'cli_sexo',
		'cli_estado_civil',
		'cli_profissao',
		'cli_email',
		'cli_conhecimento',
		'cli_fone1',
		'cli_fone2',
		'cli_endereco',
		'cli_cidade',
		'cli_uf',
		'cli_cep',
		'cli_obs',
		array(
			'name' => 'Situação',
			'value' => $model->getSituacaoText(),
		),
		array(
			'name' => 'Data de Cadastro',
			'value' => date('d/m/Y H:i:s', strtotime($model->cli_data_cadastro))
		),
		'cli_data_modificacao',
	),
)); ?>
