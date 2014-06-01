$(function(){
	$('#EntradaFormaPagamentosId').change(function(){
		
		if($('#EntradaValorTotal').val().length > 0){
			var url = '../formaPagamentos/listarPagamentos/'+$(this).val()+'/'+$('#EntradaValorTotal').val();
			$("#parcelas").load(url);
		}	
	});	
});