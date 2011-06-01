<?php
$this->breadcrumbs=array(
	'Clientes'=>array('gerenciar'),
	'Gerenciar',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('cliente-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar Clientes</h1>

<p>
Você pode usar os operadores (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) para otimizar suas pesquisas.
</p>
<div align="right">
	<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl. '/images/pesquisar.jpg'),'#',array('class'=>'search-button')); ?>	<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl. '/images/novo.jpg'),'novo'); ?></div>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cliente-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'cli_id',
		'cli_cpf',
		'cli_data_cadastro',
		'cli_numero_cliente',
		'cli_nome',
		'cli_sexo',
		/*
		'cli_estado_civil',
		'cli_profissao',
		'cli_email',
		'cli_conhecimento',
		'cli_obs',
		'cli_data_modificacao',
		'cli_data_desligamento',
		'cli_fone1',
		'cli_fone2',
		'cli_endereco',
		'cli_cidade',
		'cli_uf',
		'cli_cep',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
