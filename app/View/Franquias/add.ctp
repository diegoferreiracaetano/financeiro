<div class="franquias form">
<?php echo $this->Form->create('Franquia'); ?>
	<fieldset>
		<legend><?php echo __('Add Franquia'); ?></legend>
	<?php
		echo $this->Form->input('clientes_id');
		echo $this->Form->input('nome');
		echo $this->Form->input('endereco');
		echo $this->Form->input('numero');
		echo $this->Form->input('bairro');
		echo $this->Form->input('cidade');
		echo $this->Form->input('uf');
		echo $this->Form->input('contato');
		echo $this->Form->input('telefone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>