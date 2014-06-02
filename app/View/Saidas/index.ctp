<div class="saidas index">
	<h2><?php echo __('Saidas'); ?></h2>
	<div class="right"><?php echo $this->Html->link(__('Adicionar Saida'), array('controller' => 'saidas', 'action' => 'add')); ?></div>
	<table cellpadding="0" cellspacing="0" class="table table-hover table-striped" >
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('despesas_id'); ?></th>
			<th><?php echo $this->Paginator->sort('forma_pagamentos_id'); ?></th>
			<th><?php echo $this->Paginator->sort('franquias_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cedentes_id'); ?></th>
			<th><?php echo $this->Paginator->sort('data_emissao'); ?></th>
			<th><?php echo $this->Paginator->sort('data_vencimento'); ?></th>
			<th><?php echo $this->Paginator->sort('data_pagamento'); ?></th>
			<th><?php echo $this->Paginator->sort('recido'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($saidas as $saida): ?>
		<tr
	title="<?php echo  $saida['Status']['descricao'] ?>"
	<?php if($saida['Status']['descricao'] == 'Pago'){echo 'class="success"';}
		  elseif ($saida['Status']['descricao'] == 'Atrasado'){ echo 'class="danger"';}
		  elseif ($saida['Status']['descricao'] == 'Prester a Vencer'){ echo 'class="warning"';}
	?>
	
	>
		<td><?php echo h($saida['Saida']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($saida['Status']['descricao'], array('controller' => 'status', 'action' => 'view', $saida['Status']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($saida['Despesa']['descricao'], array('controller' => 'despesas', 'action' => 'view', $saida['Despesa']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($saida['FormaPagamento']['descricao'], array('controller' => 'forma_pagamentos', 'action' => 'view', $saida['FormaPagamento']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($saida['Franquia']['nome'], array('controller' => 'franquias', 'action' => 'view', $saida['Franquia']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($saida['Cedente']['nome'], array('controller' => 'cedentes', 'action' => 'view', $saida['Cedente']['id'])); ?>
		</td>
		<td><?php echo h($saida['Saida']['data_emissao']); ?>&nbsp;</td>
		<td><?php echo $saida['Saida']['data_vencimento'] ?CakeTime::format($saida['Saida']['data_vencimento'], '%d-%m-%Y'):"" ?>&nbsp;</td>
		<td><?php echo $saida['Saida']['data_pagamento'] ?CakeTime::format($saida['Saida']['data_pagamento'], '%d-%m-%Y'):"" ?>&nbsp;</td>
		<td><?php echo h($saida['Saida']['recido']); ?>&nbsp;</td>
		<td><?php echo h($saida['Saida']['descricao']); ?>&nbsp;</td>
		<td><?php echo $this->Number->currency($saida['Saida']['valor'], 'BRL'); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $saida['Saida']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $saida['Saida']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $saida['Saida']['id']), null, __('Are you sure you want to delete # %s?', $saida['Saida']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	if($this->Paginator->numbers()){
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count} total, começando no registro {:start}, terminado em {:end}')
	));
	?>	</p>
	<div class="pagination">
	<?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('próximo') . ' >', array(), null, array('class' => 'next disabled'));
	}
	?>
	</div>
</div>
