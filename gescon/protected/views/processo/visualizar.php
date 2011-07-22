<?php Yii::app()->clientScript->registerScript('jquery',CClientScript::POS_READY);?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl. '/js/price.js' ?>"></script>
<?php
	if (!(Yii::app()->user->getState('funcao') == '1')){
		$this->breadcrumbs=array(
			'Processos'=>array('gerenciar'),
			$model->pro_id,
		);
	}
	else{
		$this->breadcrumbs=array(
			'Meus Processos'=>array('gerenciarcliente'),
			$model->pro_id,
		);	
	}

?>

<h1>Visualizando Processo #<?php echo $model->pro_id; ?></h1>
<div align="right">
	<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl. '/images/acoes.jpg'),array('acao_processo/gerenciar/processo/' . $model->pro_id)); ?>
	<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl. '/images/financeiro.jpg'),array('boleto/gerenciar/processo/' . $model->pro_id)); ?>
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
		array('type' => 'raw','name'  => 'pro_car_valor','value'  => '<div id="pro_car_valor">' . $model->Moeda($model->pro_car_valor) . '</div>', 'id' => 'pro_car_valor'),
		'pro_car_qtde_prestacoes',
		'pro_car_qtde_prestacoes_pagas',
		array('name' => 'pro_car_valor_juizo', 'value' => $model->Moeda($model->pro_car_valor_juizo)),
		array('name' => 'pro_car_entrada', 'value' => $model->Moeda($model->pro_car_entrada)),
		array('name' => 'pro_car_mensalidade', 'value' => $model->Moeda($model->pro_car_mensalidade)),
		array('name' => 'pro_car_economia', 'value' => $model->Moeda($model->pro_car_economia)),
		array(
			'name' => 'pro_situacao',
			'value' => $model->getSituacaoText()	
		),
		array(
			'name' => 'Data de Cadastro',
			'value' => date('d/m/Y H:i:s', strtotime($model->pro_data_ingresso))
		),
		array(
			'name' => 'pro_data_modificacao',
			'value' => $data_modificacao,
		),
		
	),
)); ?>
<script>
$('#pro_car_valor').priceFormat({
    prefix: 'R$ ',
    centsSeparator: ',',
    thousandsSeparator: '.'
});
</script>	