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
	$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'emp_id',
		'emp_nome',
		'emp_cnpj',
		array(
			'name' => 'Data de Cadastro',
			'value' => date('d/m/Y H:i:s', strtotime($model->emp_data_ingresso))
		),
		array(
			'name' => 'Data de Modifica&ccedil;&atilde;o',
			'value' => $data_modificacao,
		),
		'emp_site',
		'emp_email',
		'emp_cpf_socio_majoritario',
		'emp_fone1',
		'emp_fone2',
		'emp_uf',
		'emp_cidade',
		'emp_endereco',
		'emp_cep',
		
	),
)); ?>
