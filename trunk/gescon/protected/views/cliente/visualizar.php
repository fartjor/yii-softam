<?php
$this->breadcrumbs=array(
	'Clientes'=>array('gerenciar'),
	$model->cli_id,
);

?>

<h1>Visualizando Cliente #<?php echo $model->cli_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cli_id',
		'cli_cpf',
		'cli_data_cadastro',
		'cli_numero_cliente',
		'cli_nome',
		'cli_sexo',
		'cli_estado_civil',
		'cli_profissao',
		'cli_email',
		'cli_conhecimento',
		'cli_obs',
		'cli_data_modificacao',
		'cli_data_desligamento',
		'cli_fone1',
		'cli_fone2',
		'cli_endereco',
		'cli_cidade',
		'cli_uf',
		'cli_cep',
	),
)); ?>
