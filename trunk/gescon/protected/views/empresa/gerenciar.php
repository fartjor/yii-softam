<?php
$this->breadcrumbs=array(
	'Empresas'=>array('gerenciar'),
	'Gerenciar',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('empresa-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar Empresas</h1>

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
	'id'=>'empresa-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'emp_nome',
		'emp_cnpj',
		'emp_email',
		'emp_cpf_socio_majoritario',
		'emp_nome_socio_majoritario',
		'emp_fone1',
		'emp_cidade',
		'emp_uf',
		array(
			'name' => 'Situação',
			'value' => '$data->getSituacaoText()',
		),
		/*
		'emp_id',
		'emp_data_ingresso',
		'emp_site',
		'emp_fone2',
		'emp_endereco',
		'emp_cep',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
