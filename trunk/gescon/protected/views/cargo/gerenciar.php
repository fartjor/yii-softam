<?php
$this->breadcrumbs=array(
	'Cargos'=>array('gerenciar'),
	'Gerenciar',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('cargo-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar Cargos</h1>

<p>
Voc� pode usar os operadores (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
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
	'id'=>'cargo-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'car_nome',
		'car_obs',
		array(
			'name' => 'Situação',
			'value' => '$data->getAtivoText()'
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
