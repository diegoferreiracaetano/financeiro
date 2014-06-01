<div class="franquias form">
<?php echo $this->Form->create('Franquia',array(
	'inputDefaults' => array(
		'div' => 'form-group',
		'wrapInput' => false,
		'class' => 'form-control'
	),
	'class' => 'well'
)); ?>
	<fieldset>
		<legend><?php echo __('Edit Franquia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('clientes_id');
		echo $this->Form->input('nome');
		echo $this->Form->input('endereco');
		echo $this->Form->input('numero');
		echo $this->Form->input('bairro');
		echo $this->Form->input('cidade');
		echo $this->Form->input('uf');
		echo $this->Form->input('contato');
		echo $this->Form->input('telefone');
		echo $this->Form->submit('Salvar', array(
			'div' => 'form-group',
			'class' => 'btn btn-primary'
		)); ?>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>
