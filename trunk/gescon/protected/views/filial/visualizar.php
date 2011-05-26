<?php
$this->breadcrumbs=array(
	'Filiais'=>array('gerenciar'),
	$model->fil_id,
);

?>

<h1>Visualizando Filial #<?php echo $model->fil_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fil_id',
		'fil_cnpj',
		'fil_nome',
		'fil_data_ingresso',
		'fil_site',
		'fil_email',
		'fil_cpf_representante',
		'fil_ativo',
		'fil_obs',
		'fil_data_modificacao',
		'fil_data_desligamento',
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
	),
)); ?>
