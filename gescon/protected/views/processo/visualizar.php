<?php
$this->breadcrumbs=array(
	'Processos'=>array('gerenciar'),
	$model->pro_id,
);

?>

<h1>Visualizando Processo #<?php echo $model->pro_id; ?></h1>
<div>
	<a href="<?php echo Yii::app()->request->baseUrl; ?>/acao_processo/gerenciar/processo/<?php echo $model->pro_id;?>">Ações</a>
	<a href="<?php echo Yii::app()->request->baseUrl; ?>/boleto/gerenciar/processo/<?php echo $model->pro_id;?>">Financeiro</a>
</div>

<?php 
	if (isset($model->pro_data_modificacao))
		$data_modificacao = date('d/m/Y H:i:s', strtotime($model->pro_data_modificacao));
	else
		$data_modificacao = '';
	$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pro_id',
		'pro_numero',
		'pro_obs',
		array(
			'name' => 'Cliente',
			'value' => $model->cliente->cli_nome,
		),
		array(
			'name' => 'Tipo de Processo',
			'value' => $model->tipo_processo->tpr_nome,
		),
		'pro_car_placa',
		'pro_car_renavan',
		'pro_car_chaci',
		'pro_car_ano',
		'pro_car_modelo',
		'pro_car_marca',
		'pro_car_valor',
		'pro_car_qtde_prestacoes',
		'pro_car_valor_parcela',
		array(
			'name' => 'Situação',
			'value' => $model->getSituacaoText()	
		),
		array(
			'name' => 'Data de Cadastro',
			'value' => date('d/m/Y H:i:s', strtotime($model->pro_data_ingresso))
		),
		array(
			'name' => 'Data de Modifica&ccedil;&atilde;o',
			'value' => $data_modificacao,
		),
		
	),
)); ?>
