<?php
$this->breadcrumbs=array(
	'Processos'=>array('gerenciar'),
	'Gerenciar',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('processo-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar Processos</h1>

<p>
Você pode usar os operadores (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) para otimizar suas pesquisas.
</p>
<div align="right">
	<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl. '/images/pesquisar.jpg'),'#',array('class'=>'search-button')); ?>	
	<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl. '/images/novo.jpg'),'novo'); ?></div>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'processo-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'pro_numero',
		array(
			'name' => 'cli_id',
			'value'=> '$data->cliente->cli_nome'
		),
		array(
			'name' => 'tpr_id',
			'value'=> '$data->tipo_processo->tpr_nome'
		),
		'pro_data_ingresso',
		'pro_obs',
		array(
			'name' => 'pro_situacao',
			'value' => '$data->getSituacaoText()',
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
