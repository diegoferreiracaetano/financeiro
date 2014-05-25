<div class="despesas form">
<?php echo $this->Form->create('Despesa'); ?>
	<fieldset>
		<legend><?php echo __('Add Despesa'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>