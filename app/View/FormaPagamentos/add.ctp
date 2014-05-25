<div class="formaPagamentos form">
<?php echo $this->Form->create('FormaPagamento'); ?>
	<fieldset>
		<legend><?php echo __('Add Forma Pagamento'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>