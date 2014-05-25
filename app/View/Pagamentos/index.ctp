<div class="pagamentos index">
	<h2><?php echo __('Entradas'); ?></h2>
	<div class="right"><?php echo $this->Html->link(__('Adicionar Entradas'), array('controller' => 'entradas', 'action' => 'add')); ?></div>
	<table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('entradas_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('data_emissao'); ?></th>
			<th><?php echo $this->Paginator->sort('data_vencimento'); ?></th>
			<th><?php echo $this->Paginator->sort('data_pagamento'); ?></th>
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th class="actions"><?php echo __('Açoes'); ?></th>
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
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $pagamento['Pagamento']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $pagamento['Pagamento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $pagamento['Pagamento']['id']), null, __('Tem certeza de que deseja excluir # %s?', $pagamento['Pagamento']['id'])); ?>
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
