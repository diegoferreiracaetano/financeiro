<div class="contas form">
<?php echo $this->Form->create('Conta'); ?>
	<fieldset>
		<legend><?php echo __('Edit Conta'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('agencia');
		echo $this->Form->input('conta');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>