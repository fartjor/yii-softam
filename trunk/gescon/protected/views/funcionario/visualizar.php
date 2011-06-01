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
		'fun_sexo',
		'fun_estado_civil',
		'fun_funcao',
		'fun_email',
		'fun_data_modificacao',
		'fun_data_desligamento',
		'car_id',
		'emp_id',
		'fun_fone1',
		'fun_fone2',
		'fun_endereco',
		'fun_cidade',
		'fun_uf',
		'fun_cep',
		'fun_obs',
	),
)); ?>
