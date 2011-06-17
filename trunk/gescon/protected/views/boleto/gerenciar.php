<?php
$this->breadcrumbs=array(
	'Boletos'=>array('gerenciar'),
	'Gerenciar',
);
?>

<h1>Gerenciar Boletos</h1>

<p>
Você pode usar os operadores (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) para otimizar suas pesquisas.
</p>
<div align="right">
	<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl. '/images/novo.jpg'),Yii::app()->request->baseUrl . '/processo/novoboleto/processo/'. $model->pro_id); ?></div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'boleto-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'bol_codigo',
		'bol_valor',
		'bol_vencimento',
		'bol_transacao',
		'bol_situacao',
		'pro_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>