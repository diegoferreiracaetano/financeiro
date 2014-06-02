<div class="saidas form">
<?php echo $this->Form->create('Saida', array(
	'inputDefaults' => array(
		'div' => 'form-group',
		'wrapInput' => false,
		'class' => 'form-control'
	),
	'class' => 'well'
)); ?>
	<fieldset>
		<legend><?php echo __('Editar Saida'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('despesas_id');
		echo $this->Form->input('forma_pagamentos_id');
		echo $this->Form->input('franquias_id',array('empty'=>true));
		echo $this->Form->input('cedentes_id',array('empty'=>true));
		echo $this->Form->input('recido');
		echo $this->Form->input('descricao');
		echo $this->Form->input('valor');
		echo '<div class="form-group"><div class="row">';
		echo $this->Form->input('data_emissao',array('div'=>'col-md-4', 'type' => 'date'));
		echo $this->Form->input('data_vencimento',array('div'=>'col-md-4', 'type' => 'date'));
		echo $this->Form->input('data_pagamento',array('empty'=>true,'div'=>'col-md-4', 'type' => 'date'));
		echo '</div></div>';
		echo $this->Form->submit('Salvar', array(
			'div' => 'form-group',
			'class' => 'btn btn-primary'
		)); ?>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>
