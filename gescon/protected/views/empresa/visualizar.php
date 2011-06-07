<?php
$this->breadcrumbs=array(
	'Empresas'=>array('gerenciar'),
	$model->emp_id,
);

?>

<h1>Visualizando Empresa #<?php echo $model->emp_id; ?></h1>

<?php 
	if (isset($model->emp_data_modificacao))
		$data_modificacao = date('d/m/Y H:i:s', strtotime($model->emp_data_modificacao));
	else
		$data_modificacao = '';
	if (isset($model->emp_data_desligamento))
		$data_desligamento = date('d/m/Y H:i:s', strtotime($model->emp_data_desligamento));
	else
		$data_desligamento = '';		
	$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'emp_id',
		'emp_nome',
		'emp_cnpj',
		'emp_site',
		'emp_email',
		'emp_cpf_socio_majoritario',
		'emp_nome_socio_majoritario',
		'emp_fone1',
		'emp_fone2',
		'emp_uf',
		'emp_cidade',
		'emp_endereco',
		'emp_cep',
		array(
			'name' => 'Situa&ccedil;&atilde;o',
			'value' => $model->getSituacaoText(),
		),
		array(
			'name' => 'Data de Cadastro',
			'value' => date('d/m/Y H:i:s', strtotime($model->emp_data_ingresso))
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
