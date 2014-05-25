<div class="contas form">
<?php echo $this->Form->create('Conta', array(
	'inputDefaults' => array(
		'div' => 'form-group',
		'wrapInput' => false,
		'class' => 'form-control'
	),
	'class' => 'well'
)); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Conta'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('agencia');
		echo $this->Form->input('conta');
		echo $this->Form->submit('Salvar', array(
			'div' => 'form-group',
			'class' => 'btn btn-primary'
		)); ?>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>