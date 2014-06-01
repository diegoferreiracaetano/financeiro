<div class="entradas form">
<?php 

echo $this->Html->script('entradas/add.js');

echo $this->Form->create('Entrada', array(
	'inputDefaults' => array(
		'div' => 'form-group',
		'wrapInput' => false,
		'class' => 'form-control'
	),
	'class' => 'well'
)); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Entrada'); ?></legend>
	<?php
		echo $this->Form->input('franquias_id');
		echo $this->Form->input('contas_id');
		echo $this->Form->input('descricao');
		echo $this->Form->input('valor_total');
		echo $this->Form->input('forma_pagamentos_id',array('options'=>$forma_pagamentos));
		echo '<div id="parcelas"></div>';
		echo $this->Form->submit('Salvar', array(
			'div' => 'form-group',
			'class' => 'btn btn-primary'
		)); ?>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>