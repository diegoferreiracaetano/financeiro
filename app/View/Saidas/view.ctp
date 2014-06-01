<div class="saidas view">
<h2><?php echo __('Saida'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($saida['Saida']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Despesas'); ?></dt>
		<dd>
			<?php echo $this->Html->link($saida['Despesa']['id'], array('controller' => 'despesas', 'action' => 'view', $saida['Despesa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Forma Pagamentos'); ?></dt>
		<dd>
			<?php echo $this->Html->link($saida['FormaPagamento']['id'], array('controller' => 'forma_pagamentos', 'action' => 'view', $saida['FormaPagamento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cedentes'); ?></dt>
		<dd>
			<?php echo $this->Html->link($saida['Cedente']['id'], array('controller' => 'cedentes', 'action' => 'view', $saida['Cedente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Emissao'); ?></dt>
		<dd>
			<?php echo h($saida['Saida']['data_emissao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Vencimento'); ?></dt>
		<dd>
			<?php echo h($saida['Saida']['data_vencimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Pagamento'); ?></dt>
		<dd>
			<?php echo h($saida['Saida']['data_pagamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recido'); ?></dt>
		<dd>
			<?php echo h($saida['Saida']['recido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($saida['Saida']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($saida['Saida']['valor']); ?>
			&nbsp;
		</dd>
	</dl>
</div>