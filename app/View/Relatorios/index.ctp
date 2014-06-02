<?php echo $this->Html->script(array('relatorios/index.js','highcharts/highcharts.js','highcharts/modules/exporting.js'));?>
<div class="saidas index">
	<h2><?php echo __('Fluxo de Caixa'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-hover table-striped" >
	<tr>
		<th colspan="2">Total Geral</th>
	</tr>
	<tr>
		<th>Total na Conta Corrente</th>
		<td><strong><?php echo  $this->Number->currency( $entradas['total'], 'BRL');?></strong></td>
	</tr>
	<tr>
		<th colspan="2">Saidas</th>
	</tr>
	<tr>
		<th>Total de Despesas</th>
		<td><strong><?php echo  $this->Number->currency($saidas['total'], 'BRL');?></strong></td>
	</tr>
	<tr>
		<th colspan="2">Saldos</th>
	</tr>
	<tr>	
		<th>Total de Entradas - Total de Saidas</th>
		<td><strong><?php echo  $this->Number->currency(array_sum($entradas)-array_sum($saidas), 'BRL');?></strong></td>
	</tr>
	<tr>
		<th colspan="2">Faturamento por Conta</th>
	</tr>
	<?php foreach ($faturamentos as $faturamento):?>
		<tr>	
			<th colspan="2" style="text-align:center"><h5><?php echo $faturamento['CLIENTE']?></h5></th>
		</tr>
		<?php foreach ($faturamento as $key => $dados): ?>
		<tr>	
			<th><?php echo $key ?></th>
			<td><?php echo $dados ?></td>
		</tr>
	<?php endforeach;endforeach; ?>
	</table>
	<div id="grafico"></div>
</div>
