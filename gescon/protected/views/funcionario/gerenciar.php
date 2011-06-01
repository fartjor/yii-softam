<?php
$this->breadcrumbs=array(
	'Funcionarios'=>array('gerenciar'),
	'Gerenciar',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('funcionario-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar Funcionarios</h1>

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
	'id'=>'funcionario-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'fun_id',
		'fun_cpf',
		'fun_data_cadastro',
		'fun_numero_funcionario',
		'fun_nome',
		'fun_sexo',
		/*
		'fun_estado_civil',
		'fun_funcao',
		'fun_email',
		'fun_estado',
		'fun_obs',
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
