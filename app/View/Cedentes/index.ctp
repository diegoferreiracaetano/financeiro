<div class="cedentes index">
	<h2><?php echo __('Cedentes'); ?></h2>
	<div class="right"><?php echo $this->Html->link(__('Adicionar Cedentes'), array('controller' => 'cedentes', 'action' => 'add')); ?></div>
	<table cellpadding="0" cellspacing="0" class="table table-hover table-striped" >
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($cedentes as $cedente): ?>
	<tr>
		<td><?php echo h($cedente['Cedente']['id']); ?>&nbsp;</td>
		<td><?php echo h($cedente['Cedente']['nome']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visuallzar'), array('action' => 'view', $cedente['Cedente']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $cedente['Cedente']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $cedente['Cedente']['id']), null, __('Tem certeza de que deseja excluir # %s?', $cedente['Cedente']['id'])); ?>
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
