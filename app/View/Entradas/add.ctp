<div class="entradas form">
<?php echo $this->Form->create('Entrada'); ?>
	<fieldset>
		<legend><?php echo __('Add Entrada'); ?></legend>
	<?php
		echo $this->Form->input('franquias_id');
		echo $this->Form->input('contas_id');
		echo $this->Form->input('descricao');
		echo $this->Form->input('valor_total');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>