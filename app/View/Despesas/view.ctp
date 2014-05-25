<div class="despesas view">
<h2><?php echo __('Despesa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($despesa['Despesa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($despesa['Despesa']['descricao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
