<div class="cedentes form">
<?php echo $this->Form->create('Cedente'); ?>
	<fieldset>
		<legend><?php echo __('Add Cedente'); ?></legend>
	<?php
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>