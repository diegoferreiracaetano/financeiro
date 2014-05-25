<div class="pagamentos form">
<?php echo $this->Form->create('Pagamento',array(
	'inputDefaults' => array(
		'div' => 'col-md-3',
		'wrapInput' => false,
		'class' => 'form-control'
	),
	'class' => 'well'
)); ?>
	<fieldset>
		<legend><?php echo __('Pagamentos'); ?></legend>
		<div class="form-group">
			<div class="row">
			<?php
				foreach ($formaPagamentos as $formaPagamento){ ?>
					<div class="col-md-3">
				    <label for="EntradaQuantidadeParcelas">Descrição</label>
				    <input name="data[Pagamento][descricao][]" class="form-control" value="<?php echo  $formaPagamento['descricao'] ?>">
				    </div>	
				    <div class="col-md-3">
				    <label for="EntradaQuantidadeParcelas">Data Emissão</label>
				    <input name="data[Pagamento][data_emissao][]" class="form-control" type="date" value="<?php echo $formaPagamento['data_emissao'] ?>">
				    </div>
				    <div class="col-md-3">
				    <label for="EntradaQuantidadeParcelas">Data Vencimento</label>
				    <input name="data[Pagamento][data_vencimento][]" class="form-control" type="date" value="<?php echo $formaPagamento['data_vencimento'] ?>">
				    </div>
				    <div class="col-md-3">
				    <label for="EntradaQuantidadeParcelas">Valor</label>
				    <input name="data[Pagamento][valor][]" class="form-control" type="number" value="<?php echo  $formaPagamento['valor'] ?>">
				    </div>			
			<?php 	
				}
			?>
			</div>
		</div>	
	</fieldset>
</div>
