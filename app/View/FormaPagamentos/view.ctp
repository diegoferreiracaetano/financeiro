<div class="formaPagamentos view">
<h2><?php echo __('Forma Pagamento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($formaPagamento['FormaPagamento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($formaPagamento['FormaPagamento']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantidade Parcelas'); ?></dt>
		<dd>
			<?php echo h($formaPagamento['FormaPagamento']['quantidade_parcelas']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
