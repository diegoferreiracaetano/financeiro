<div class="pagamentos view">
<h2><?php echo __('Pagamento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pagamento['Pagamento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entradas'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pagamento['Entrada']['descricao'], array('controller' => 'despesas', 'action' => 'view', $pagamento['Entrada']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pagamento['Status']['descricao'], array('controller' => 'status', 'action' => 'view', $pagamento['Status']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($pagamento['Pagamento']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Emissao'); ?></dt>
		<dd>
			<?php echo h($pagamento['Pagamento']['data_emissao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Vencimento'); ?></dt>
		<dd>
			<?php echo h($pagamento['Pagamento']['data_vencimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Pagamento'); ?></dt>
		<dd>
			<?php echo h($pagamento['Pagamento']['data_pagamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($pagamento['Pagamento']['valor']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
