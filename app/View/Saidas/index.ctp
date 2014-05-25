<div class="saidas index">
	<h2><?php echo __('Saidas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('despesas_id'); ?></th>
			<th><?php echo $this->Paginator->sort('forma_pagamentos_id'); ?></th>
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
	<tr>
		<td><?php echo h($saida['Saida']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($saida['Status']['id'], array('controller' => 'status', 'action' => 'view', $saida['Status']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($saida['Despesa']['descricao'], array('controller' => 'despesas', 'action' => 'view', $saida['Despesa']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($saida['FormaPagamento']['descricao'], array('controller' => 'despesas', 'action' => 'view', $saida['FormaPagamento']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($saida['Cedente']['nome'], array('controller' => 'despesas', 'action' => 'view', $saida['Cedente']['id'])); ?>
		</td>
		<td><?php echo h($saida['Saida']['data_emissao']); ?>&nbsp;</td>
		<td><?php echo h($saida['Saida']['data_vencimento']); ?>&nbsp;</td>
		<td><?php echo h($saida['Saida']['data_pagamento']); ?>&nbsp;</td>
		<td><?php echo h($saida['Saida']['recido']); ?>&nbsp;</td>
		<td><?php echo h($saida['Saida']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($saida['Saida']['valor']); ?>&nbsp;</td>
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
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
