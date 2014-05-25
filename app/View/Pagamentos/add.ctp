<div class="pagamentos form">
<?php echo $this->Form->create('Pagamento'); 

?>
	<fieldset>
		<legend><?php echo __('Add Pagamento'); ?></legend>
	<?php
		echo $this->Form->input('entradas_id');
		echo $this->Form->input('status_id',array('options'=>$status,'empty'=>true));
		echo $this->Form->input('descricao');
		echo $this->Form->input('data_emissao');
		echo $this->Form->input('data_vencimento');
		echo $this->Form->input('data_pagamento',array('empty'=>true));
		echo $this->Form->input('valor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
