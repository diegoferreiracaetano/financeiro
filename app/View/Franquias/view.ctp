<div class="franquias view">
<h2><?php echo __('Franquia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($franquia['Franquia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clientes'); ?></dt>
		<dd>
			<?php echo $this->Html->link($franquia['Cliente']['nome'], array('controller' => 'clientes', 'action' => 'view', $franquia['Cliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($franquia['Franquia']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endereco'); ?></dt>
		<dd>
			<?php echo h($franquia['Franquia']['endereco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($franquia['Franquia']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bairro'); ?></dt>
		<dd>
			<?php echo h($franquia['Franquia']['bairro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade'); ?></dt>
		<dd>
			<?php echo h($franquia['Franquia']['cidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uf'); ?></dt>
		<dd>
			<?php echo h($franquia['Franquia']['uf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contato'); ?></dt>
		<dd>
			<?php echo h($franquia['Franquia']['contato']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone'); ?></dt>
		<dd>
			<?php echo h($franquia['Franquia']['telefone']); ?>
			&nbsp;
		</dd>
	</dl>
</div>