<div class="formaPagamentos form">
<?php echo $this->Form->create('FormaPagamento'); ?>
	<fieldset>
		<legend><?php echo __('Edit Forma Pagamento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>