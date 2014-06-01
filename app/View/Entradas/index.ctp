<div class="entradas index">
	<h2><?php echo __('Entradas'); ?></h2>
	<div class="right"><?php echo $this->Html->link(__('Adicionar Entrada'), array('controller' => 'entradas', 'action' => 'add')); ?></div>
	<table cellpadding="0" cellspacing="0" class="table table-hover table-striped" >
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('franquias_id'); ?></th>
			<th><?php echo $this->Paginator->sort('forma_pagamentos_id'); ?></th>
			<th><?php echo $this->Paginator->sort('contas_id'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('valor_total'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($entradas as $entrada): ?>
	<tr>
		<td><?php echo h($entrada['Entrada']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($entrada['Franquia']['id'], array('controller' => 'franquias', 'action' => 'view', $entrada['Franquia']['id'])); ?>
		</td>
		<td><?php echo h($entrada['Entrada']['forma_pagamentos_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($entrada['Conta']['id'], array('controller' => 'contas', 'action' => 'view', $entrada['Conta']['id'])); ?>
		</td>
		<td><?php echo h($entrada['Entrada']['descricao']); ?>&nbsp;</td>
		<td><?php echo  $this->Number->currency($entrada['Entrada']['valor_total'], 'BRL'); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $entrada['Entrada']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $entrada['Entrada']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $entrada['Entrada']['id']), null, __('Tem certeza de que deseja excluir # %s?', $entrada['Entrada']['id'])); ?>
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