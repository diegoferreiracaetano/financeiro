<div class="pagamentos form">
<?php echo $this->Form->create('Pagamento',array(
	'inputDefaults' => array(
		'div' => 'form-group',
		'wrapInput' => false,
		'class' => 'form-control'
	),
	'class' => 'well'
)); ?>
	<fieldset>
		<legend><?php echo __('Edit Pagamento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('entradas_id');
		echo $this->Form->input('descricao');
		echo $this->Form->input('data_emissao');
		echo $this->Form->input('data_vencimento');
		echo $this->Form->input('data_pagamento',array('empty'=>true));
		echo $this->Form->input('valor');
		echo $this->Form->submit('Salvar', array(
			'div' => 'form-group',
			'class' => 'btn btn-primary'
		)); ?>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>