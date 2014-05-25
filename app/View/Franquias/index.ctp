<div class="franquias index">
	<h2><?php echo __('Franquias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('clientes_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('endereco'); ?></th>
			<th><?php echo $this->Paginator->sort('numero'); ?></th>
			<th><?php echo $this->Paginator->sort('bairro'); ?></th>
			<th><?php echo $this->Paginator->sort('cidade'); ?></th>
			<th><?php echo $this->Paginator->sort('uf'); ?></th>
			<th><?php echo $this->Paginator->sort('contato'); ?></th>
			<th><?php echo $this->Paginator->sort('telefone'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($franquias as $franquia): ?>
	<tr>
		<td><?php echo h($franquia['Franquia']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($franquia['Cliente']['nome'], array('controller' => 'clientes', 'action' => 'view', $franquia['Cliente']['id'])); ?>
		</td>
		<td><?php echo h($franquia['Franquia']['nome']); ?>&nbsp;</td>
		<td><?php echo h($franquia['Franquia']['endereco']); ?>&nbsp;</td>
		<td><?php echo h($franquia['Franquia']['numero']); ?>&nbsp;</td>
		<td><?php echo h($franquia['Franquia']['bairro']); ?>&nbsp;</td>
		<td><?php echo h($franquia['Franquia']['cidade']); ?>&nbsp;</td>
		<td><?php echo h($franquia['Franquia']['uf']); ?>&nbsp;</td>
		<td><?php echo h($franquia['Franquia']['contato']); ?>&nbsp;</td>
		<td><?php echo h($franquia['Franquia']['telefone']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $franquia['Franquia']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $franquia['Franquia']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $franquia['Franquia']['id']), null, __('Are you sure you want to delete # %s?', $franquia['Franquia']['id'])); ?>
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
