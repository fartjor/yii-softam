<?php
$this->breadcrumbs=array(
	'Filiais'=>array('gerenciar'),
	'Gerenciar',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('filial-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar Filiais</h1>

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
	'id'=>'filial-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'fil_cnpj',
		'fil_nome',
		array(
			'name' => 'Matriz',
			'value' => '$data->empresa->emp_nome'
		),
		'fil_email',
		'fil_cpf_representante',
		'fil_nome_representante',
		'fil_fone1',
		'fil_cidade',
		'fil_uf',
		array(
			'name' => 'fil_ativo',
			'value' => '$data->getAtivoText()',
		),
		/*
		'fil_site',
		'fil_id',
		'fil_data_ingresso',
		
		'fil_ativo',
		'fil_obs',
		'fil_data_modificacao',
		'fil_data_desligamento',
		'emp_id',
		
		'fil_fone2',
		
		
		'fil_endereco',
		'fil_cep',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
