<?php 
	function Acoes($codigo){
		$model = Boleto::model()->findByPk($codigo);
		
		$pagamento = '';
		$tipos = array('Boleto Gerado', 'Aguardando Pagto', 'Iniciada');
		
		if (in_array($model->bol_situacao,$tipos))
			$pagamento = '<a href="' . Yii::app()->request->baseUrl . '/boleto/pagar/' . $codigo . '"><img src="' . Yii::app()->request->baseUrl . '/images/pagar.png" alt="Pagar com PagSeguro" title = "Pagar com PagSeguro" /></a>';

		if (Yii::app()->user->getState('funcao') == '1')
			$acao = $pagamento;
		else
			$acao = $pagamento . '<a class="delete" href="' . Yii::app()->request->baseUrl . '/delete/' . $codigo . '"><img src="' . Yii::app()->request->baseUrl . '/images/excluir.png" alt="Excluir" title = "Excluir" /></a>';	
		return $acao;
	}
?>

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

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'boleto-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		array('name' => 'bol_valor', 'value' => '$data->Moeda($data->bol_valor)'),
		'bol_vencimento',
		'bol_situacao',
		array(
			'name' => 'acoes',
			'type' => 'raw',
			'value' => 'Acoes($data->bol_codigo)',
			'htmlOptions'=>array('align'=>'center'),
		),
	),
)); 
?>

<script>
	$('#boleto-grid a.delete').live('click',function() {
		if(!confirm('Você deseja realmente excluir este registro?')) return false;
		var th=this;
		var afterDelete=function(){};
		$.fn.yiiGridView.update('boleto-grid', {
			type:'POST',
			url:$(this).attr('href'),
			success:function(data) {
				$.fn.yiiGridView.update('boleto-grid');
			afterDelete(th,true,data);
		},
		error:function() {
			afterDelete(th,false);
		}
	}); return false; 	}); 


</script>
