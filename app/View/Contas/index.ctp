<div class="contas index">
	<h2><?php echo __('Contas'); ?></h2>
	<div class="right"><?php echo $this->Html->link(__('Adicionar Contas'), array('controller' => 'contas', 'action' => 'add')); ?></div>
	<table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('agencia'); ?></th>
			<th><?php echo $this->Paginator->sort('conta'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($contas as $conta): ?>
	<tr>
		<td><?php echo h($conta['Conta']['id']); ?>&nbsp;</td>
		<td><?php echo h($conta['Conta']['nome']); ?>&nbsp;</td>
		<td><?php echo h($conta['Conta']['agencia']); ?>&nbsp;</td>
		<td><?php echo h($conta['Conta']['conta']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $conta['Conta']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $conta['Conta']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $conta['Conta']['id']), null, __('Tem certeza de que deseja excluir # %s?', $conta['Conta']['id'])); ?>
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
