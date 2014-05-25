<div class="contas index">
	<h2><?php echo __('Contas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('agencia'); ?></th>
			<th><?php echo $this->Paginator->sort('conta'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($contas as $conta): ?>
	<tr>
		<td><?php echo h($conta['Conta']['id']); ?>&nbsp;</td>
		<td><?php echo h($conta['Conta']['nome']); ?>&nbsp;</td>
		<td><?php echo h($conta['Conta']['agencia']); ?>&nbsp;</td>
		<td><?php echo h($conta['Conta']['conta']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $conta['Conta']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $conta['Conta']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $conta['Conta']['id']), null, __('Are you sure you want to delete # %s?', $conta['Conta']['id'])); ?>
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