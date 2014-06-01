<div class="pagamentos index">
	<h2><?php echo __('Entradas'); ?></h2>
	<?php
echo $this->Search->create('teste', array(
	'inputDefaults' => array(
		'div' => 'form-group',
		'wrapInput' => false,
		'class' => 'form-control'
	),
	'class' => 'well'
));
echo '<div class="form-group"><div class="row">';
echo $this->Search->selectFields('filter1',
        array(
            'Pagamento.id'       => __('ID', true),
            'Franquia.nome'     => __('Franquia', true),
            'Entrada.descricao' => __('Entrada', true),
         	'Status.descricao' => __('Status', true),
        ),
        array(
            'class' => 'select-box form-control','div'=>'col-md-3','label'=>'Campos'
        )
    );
echo $this->Search->selectOperators('filter1',
        array(
            'LIKE' => __('contendo', true),
            '='    => __('igual', true),
        ),
        array(
            'class' => 'select-box form-control','div'=>'col-md-3','label'=>'Tipo de Pesquisa'
        )
    );
echo $this->Search->input('filter1',array('label'=>'Pesquisa','div' => 'col-md-3'));
echo $this->Search->submit('Pesquisar', array(
			'style' =>'margin-top:25px',
			'class' => 'btn btn-primary',
			'div' => 'col-md-3'
		)); 
echo '</div></div>';		
		
	?>

	<div class="right">
	<div class="botoesPagamentos">
		<?php echo $this->Html->link(__('Adicionar Entradas'), array('controller' => 'entradas', 'action' => 'add'));?>
		<span>
		<?php echo $this->Html->link(
							$this->Html->image('excel.png', array('alt' => 'Exportar para excel', 'border' => '0','width'=>'30px')),
							array('action' => 'excel'),
							array('target' => '', 'escape' => false)
						);
		?>
		</span>
	</div>
	</div>
	
	<table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fraquia_id'); ?></th>
			<th><?php echo $this->Paginator->sort('entradas_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('data_emissao'); ?></th>
			<th><?php echo $this->Paginator->sort('data_vencimento'); ?></th>
			<th><?php echo $this->Paginator->sort('data_pagamento'); ?></th>
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th class="actions"><?php echo __('Açoes'); ?></th>
	</tr>
	<?php foreach ($pagamentos as $pagamento): ?>
	<tr
	title="<?php echo  $pagamento['Status']['descricao'] ?>"
	<?php if($pagamento['Status']['descricao'] == 'Pago'){echo 'class="success"';}
		  elseif ($pagamento['Status']['descricao'] == 'Atrasado'){ echo 'class="danger"';}
		  elseif ($pagamento['Status']['descricao'] == 'Prester a Vencer'){ echo 'class="warning"';}
	?>
	
	>
		<td><?php echo h($pagamento['Pagamento']['id']); ?>&nbsp;</td>
		<td><?php echo h($pagamento['Franquia']['nome']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pagamento['Entrada']['id']  .' - '.$pagamento['Entrada']['descricao'], array('controller' => 'entradas', 'action' => 'view', $pagamento['Entrada']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pagamento['Status']['descricao'], array('controller' => 'status', 'action' => 'view', $pagamento['Status']['id'])); ?>
		</td>
		<td><?php echo h($pagamento['Pagamento']['descricao']); ?>&nbsp;</td>
		<td><?php echo $pagamento['Pagamento']['data_emissao'] ?CakeTime::format($pagamento['Pagamento']['data_emissao'], '%d-%m-%Y'):"" ?>&nbsp;</td>
		<td><?php echo $pagamento['Pagamento']['data_vencimento'] ?CakeTime::format($pagamento['Pagamento']['data_emissao'], '%d-%m-%Y'):"" ?>&nbsp;</td>
		<td><?php echo $pagamento['Pagamento']['data_pagamento'] ?CakeTime::format($pagamento['Pagamento']['data_pagamento'], '%d-%m-%Y'):""?>&nbsp;</td>
		<td><?php echo  $this->Number->currency($pagamento['Pagamento']['valor'], 'BRL'); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $pagamento['Pagamento']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $pagamento['Pagamento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $pagamento['Pagamento']['id']), null, __('Tem certeza de que deseja excluir # %s?', $pagamento['Pagamento']['id'])); ?>
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
