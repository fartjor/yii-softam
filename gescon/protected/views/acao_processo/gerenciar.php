<?php

	if (!Yii::app()->user->getState('funcao') == '1'){
		$this->breadcrumbs=array(
			'Processos'=>array('processo/gerenciar'),
			$model->pro_id=>array('processo/visualizar/' . $model->pro_id),
			'Ação de Processos',
		);
	}
	else{
		$this->breadcrumbs=array(
			'Meus Processos'=>array('processo/gerenciarcliente'),
			$model->pro_id=>array('processo/visualizar/' . $model->pro_id),
			'Ação de Processos',
		);
	}
?>
<h1>Ações do Processo #<?php echo $model->pro_id;?></h1>
<div align="right">
	<?php 
		if (Yii::app()->user->getState('funcao') == '2' || Yii::app()->user->getState('funcao') == '3')
			echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl. '/images/novo.jpg'),Yii::app()->request->baseUrl . '/processo/novaacao/processo/'. $model->pro_id); 
	?>
</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'acao-processo-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		array(
			'name' => 'Tipo de Ação',
			'value' => '$data->getTipoText()'
		),
		array(
			'name' => 'Tipo de Ação Anterior',
			'value' => '$data->getTipoAnteriorText()'
		),
		'usu_id',
		'aca_obs',
		array(
			'name' => 'Data da Ação',
			'value' => '$data->getData()'
		),
	),
)); ?>

