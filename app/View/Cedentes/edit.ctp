<div class="cedentes form">
<?php echo $this->Form->create('Cedente'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cedente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>