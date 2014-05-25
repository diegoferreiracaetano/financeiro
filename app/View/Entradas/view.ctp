<div class="entradas view">
<h2><?php echo __('Entrada'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($entrada['Entrada']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Franquia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($entrada['Franquia']['id'], array('controller' => 'franquias', 'action' => 'view', $entrada['Franquia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Forma Pagamentos Id'); ?></dt>
		<dd>
			<?php echo h($entrada['Entrada']['forma_pagamentos_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Conta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($entrada['Conta']['id'], array('controller' => 'contas', 'action' => 'view', $entrada['Conta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($entrada['Entrada']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor Total'); ?></dt>
		<dd>
			<?php echo h($entrada['Entrada']['valor_total']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
