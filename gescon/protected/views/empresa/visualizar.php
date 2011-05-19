<?php
$this->breadcrumbs=array(
	'Empresas'=>array('gerenciar'),
	$model->emp_id,
);

?>

<h1>Visualizando Empresa #<?php echo $model->emp_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'emp_id',
		'emp_nome',
		'emp_cnpj',
		'emp_data_ingresso',
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
