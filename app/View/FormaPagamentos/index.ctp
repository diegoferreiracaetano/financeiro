<div class="formaPagamentos index">
	<h2><?php echo __('Forma Pagamentos'); ?></h2>
	<div class="right"><?php echo $this->Html->link(__('Adicionar Formas Pagamentos'), array('controller' => 'formaPagamentos', 'action' => 'add')); ?></div>
	<table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('Quantidade de parcelas'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($formaPagamentos as $formaPagamento): ?>
	<tr>
		<td><?php echo h($formaPagamento['FormaPagamento']['id']); ?>&nbsp;</td>
		<td><?php echo h($formaPagamento['FormaPagamento']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($formaPagamento['FormaPagamento']['quantidade_parcelas']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $formaPagamento['FormaPagamento']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $formaPagamento['FormaPagamento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $formaPagamento['FormaPagamento']['id']), null, __('Tem certeza de que deseja excluir # %s?', $formaPagamento['FormaPagamento']['id'])); ?>
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

