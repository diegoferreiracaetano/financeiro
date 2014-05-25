<?php 
// create new empty worksheet and set default font
$this->PhpExcel->createWorksheet()->setDefaultFont('Calibri', 12);

// define table cells
$table = array(
    array('label' => __('User'), 'filter' => true),
    array('label' => __('Type'), 'filter' => true),
    array('label' => __('Date')),
    array('label' => __('Description'), 'width' => 50, 'wrap' => true),
    array('label' => __('Modified'))
);

// add heading with different font and bold text
$this->PhpExcel->addTableHeader($table, array('name' => 'Cambria', 'bold' => true));

// add data
foreach ($pagamentos as $pagamento) {
    $this->PhpExcel->addTableRow(array(
       $pagamento['Status']['descricao']
    ));
}

// close table and output
$this->PhpExcel->addTableFooter()->output();