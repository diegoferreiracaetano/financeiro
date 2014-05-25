<?php
$_pluralIrregular = array(
 'conta' => 'contas',
 'alemao' => 'alemaes'
);
 
$_uninflected = array('atlas', 'lapis', 'onibus', 'pires', 'virus', '.*x', 'status');
 
Inflector::rules('plural', array(
'rules' => array(
'/^(.*)ao$/i' => '\1oes',
'/^(.*)(r|s|z)$/i' => 'despesas',
'/^(.*)(a|e|o|u)l$/i' => '\1\2is',
'/^(.*)il$/i' => '\1is',
'/^(.*)(m|n)$/i' => 'saida',
'/^(.*)$/i' => '\1s'
),
'uninflected' => $_uninflected,
'irregular' => $_pluralIrregular
), true);