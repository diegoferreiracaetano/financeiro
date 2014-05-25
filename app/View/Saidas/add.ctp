<div class="saidas form">
<?php echo $this->Form->create('Saida'); ?>
	<fieldset>
		<legend><?php echo __('Add Saida'); ?></legend>
	<?php
		echo $this->Form->input('status_id',array('options'=>$status,'empty'=>true));
		echo $this->Form->input('despesas_id',array('options'=>$despesas));
		echo $this->Form->input('forma_pagamentos_id',array('options'=>$forma_pagamentos));
		echo $this->Form->input('cedentes_id');
		echo $this->Form->input('data_emissao');
		echo $this->Form->input('data_vencimento');
		echo $this->Form->input('data_pagamento',array('empty'=>true));
		echo $this->Form->input('recido');
		echo $this->Form->input('descricao');
		echo $this->Form->input('valor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
