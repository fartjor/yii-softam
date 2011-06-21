<?php
	
	echo CHtml::beginForm('https://pagseguro.uol.com.br/security/webpagamentos/webpagto.aspx', '',array("target" => '_blank'));
		
		echo CHtml::hiddenField('tipo', 'CP');
		echo CHtml::hiddenField('moeda', 'BRL');
		echo CHtml::hiddenField('email_cobranca', 'wagnercdas@yahoo.com.br');
		
		echo CHtml::hiddenField('item_id_1', $model->bol_codigo);
		echo CHtml::hiddenField(CHtml::encode('item_descr_1'),CHtml::encode('Escritório de Advocacia'));
		echo CHtml::hiddenField('item_quant_1', 1);
		echo CHtml::hiddenField('item_valor_1', $model->bol_valor);
		
		echo CHtml::hiddenField('cliente_nome', $model->processo->cliente->cli_nome);
		echo CHtml::hiddenField('cliente_cep', $model->processo->cliente->cli_cep);
		echo CHtml::hiddenField('cliente_end', $model->processo->cliente->cli_endereco);
		echo CHtml::hiddenField('cliente_num', '999');
		//echo CHtml::hiddenField('cliente_compl', $model->processo->cliente->cli_complemento);
		echo CHtml::hiddenField('cliente_bairro', $model->processo->cliente->cli_bairro);
		echo CHtml::hiddenField('cliente_cidade', $model->processo->cliente->cli_cidade);
		echo CHtml::hiddenField('cliente_ddd', substr($model->processo->cliente->cli_fone1,1,2));
		echo CHtml::hiddenField('cliente_pais', 'Brasil');
		echo CHtml::hiddenField('cliente_uf', $model->processo->cliente->cli_uf);
		echo CHtml::hiddenField('cliente_tel', substr($model->processo->cliente->cli_fone1,4,4) . substr($model->processo->cliente->cli_fone1,9,4));
		echo CHtml::hiddenField('cliente_email', $model->processo->cliente->cli_email);
		
		echo CHtml::submitButton("Pagar");
	echo CHtml::endForm();
?>