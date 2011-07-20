<?php
$this->breadcrumbs=array(
	'Processos'=>array('processo/gerenciar'),
	$model->pro_id=>array('processo/visualizar/' . $model->pro_id),
	'Financeiro',
);
?>

<h1>Financeiro do Processo #<?php echo $model->pro_id; ?></h1>
<h4>Cliente: <?php echo $model->processo->cliente->cli_nome;?></h4>

<div align="right">
	<?php 
		if (Yii::app()->user->getState('funcao') == '2' || Yii::app()->user->getState('funcao') == '3')
			echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl. '/images/novo.jpg'),Yii::app()->request->baseUrl . '/processo/novoboleto/processo/'. $model->pro_id); 
	?>
</div>
<?php 
	if (Yii::app()->user->getState('funcao') == '1')
		$acao = 'CHtml::link(
							CHtml::image(Yii::app()->request->baseUrl. "/images/pagar.png", "Pagar com PagSeguro", 
								array("title" => "Pagar com PagSeguro")
							), 
							CHtml::encode("../../pagar/$data->bol_codigo")
						)';
	else
		$acao = 'CHtml::link(
							CHtml::image(Yii::app()->request->baseUrl. "/images/pagar.png", "Pagar com PagSeguro", 
								array("title" => "Pagar com PagSeguro")
							), 
							CHtml::encode("../../pagar/$data->bol_codigo")
						). 
				CHtml::link(
							CHtml::image(Yii::app()->request->baseUrl. "/images/excluir.png", "Excluir Boleto", 
								array("title" => "Excluir Boleto")
							), 
							CHtml::encode("../../pagar/$data->bol_codigo")
						)';	
?>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'boleto-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'bol_valor',
		'bol_vencimento',
		'bol_situacao',
		array(
			'name' => 'acoes',
			'type' => 'raw',
			'value' => $acao,
			'htmlOptions'=>array('align'=>'center'),
		),
	),
)); 
?>
