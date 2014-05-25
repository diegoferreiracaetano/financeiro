$(function(){
	$('#EntradaFormaPagamentosId').change(function(){
		
		if($('#EntradaValorTotal').val().length > 0){
			var url = '../formaPagamentos/listarPagamentos/'+$(this).val()+'/'+$('#EntradaValorTotal').val();
			$("#parcelas").load(url);
		}
		/*alert($(this).val());
		if($('#EntradaValorTotal').val().length > 0){
			
			var conteudo ='<h3>Pagamentos</h3>';
			conteudo += '<div class="form-group">';
			conteudo +='<div class="row">';
			conteudo += '<div class="col-md-3">';
		    conteudo += '<label for="EntradaQuantidadeParcelas">Descrição</label>';
		    conteudo += '<input name="data[Entrada][quantidade_parcelas]" class="form-control" type="number" id="EntradaQuantidadeParcelas">';
		    conteudo += '</div>';
		    conteudo +='<div class="col-md-3">';
		    conteudo += '<label for="EntradaQuantidadeParcelas">Data Emissão</label>';
			conteudo += '<input name="data[Entrada][quantidade_parcelas]" class="form-control" type="number" id="EntradaQuantidadeParcelas">';
			conteudo += '</div>';
			conteudo +='<div class="col-md-3">';
		    conteudo += '<label for="EntradaQuantidadeParcelas">Data Vencimento</label>';
			conteudo += '<input name="data[Entrada][quantidade_parcelas]" class="form-control" type="number" id="EntradaQuantidadeParcelas">';
			conteudo += '</div>';
			conteudo +='<div class="col-md-3">';
		    conteudo += '<label for="EntradaQuantidadeParcelas">Valor</label>';
			conteudo += '<input name="data[Entrada][quantidade_parcelas]" class="form-control" type="number" id="EntradaQuantidadeParcelas">';
			conteudo += '</div>';
			conteudo += '</div>';
			conteudo += '</div>';
			$('#parcelas').html(conteudo);	
		}*/	
	});	
});