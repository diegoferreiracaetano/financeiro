<div class="pagamentos index">
	<h2><?php echo __('Pagamentos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('entradas_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('data_emissao'); ?></th>
			<th><?php echo $this->Paginator->sort('data_vencimento'); ?></th>
			<th><?php echo $this->Paginator->sort('data_pagamento'); ?></th>
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pagamentos as $pagamento): ?>
	<tr>
		<td><?php echo h($pagamento['Pagamento']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pagamento['Entrada']['id']  .' - '.$pagamento['Entrada']['descricao'], array('controller' => 'entradas', 'action' => 'view', $pagamento['Entrada']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pagamento['Status']['descricao'], array('controller' => 'status', 'action' => 'view', $pagamento['Status']['id'])); ?>
		</td>
		<td><?php echo h($pagamento['Pagamento']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($pagamento['Pagamento']['data_emissao']); ?>&nbsp;</td>
		<td><?php echo h($pagamento['Pagamento']['data_vencimento']); ?>&nbsp;</td>
		<td><?php echo h($pagamento['Pagamento']['data_pagamento']); ?>&nbsp;</td>
		<td><?php echo h($pagamento['Pagamento']['valor']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pagamento['Pagamento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pagamento['Pagamento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pagamento['Pagamento']['id']), null, __('Are you sure you want to delete # %s?', $pagamento['Pagamento']['id'])); ?>
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
