<div class="despesas index">
	<h2><?php echo __('Despesas'); ?></h2>
	<div class="right"><?php echo $this->Html->link(__('Adicionar Despesa'), array('controller' => 'despesas', 'action' => 'add')); ?></div>
	<table cellpadding="0" cellspacing="0"  class="table table-hover table-striped" >
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($despesas as $despesa): ?>
	<tr>
		<td><?php echo h($despesa['Despesa']['id']); ?>&nbsp;</td>
		<td><?php echo h($despesa['Despesa']['descricao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $despesa['Despesa']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $despesa['Despesa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $despesa['Despesa']['id']), null, __('Tem certeza de que deseja excluir # %s?', $despesa['Despesa']['id'])); ?>
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