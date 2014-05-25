<div class="cedentes form">
<?php echo $this->Form->create('Cedente',array(
	'inputDefaults' => array(
		'div' => 'form-group',
		'wrapInput' => false,
		'class' => 'form-control'
	),
	'class' => 'well'
)); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Cedente'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->submit('Salvar', array(
			'div' => 'form-group',
			'class' => 'btn btn-primary'
		)); ?>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>