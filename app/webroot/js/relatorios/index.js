$(function () {
	 var json =  $.ajax({url: "relatorios/gerarGrafico", dataType:"json", async: false}).responseJSON;
	 
        $('#grafico').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Faturamento Por Contas'
            },
            credits: {
                enabled: false
            },
           xAxis: {
                categories: json.legenda
            },
            series: json.dados
        });
    });
    
