<?php 
$array_grafico = array();
foreach ($dados as $keys => $values) {
	foreach ($values as $key => $value) {
			//$array_grafico[$keys]['name'][$key] = $key;
			if($key == 'CLIENTE')
				$array_dados['legenda'][] = $value;
			else
				$array_grafico[$key][] = (int)$value;
	}

}
$i = 0;
foreach ($array_grafico as $key => $value) {
	$array_dados['dados'][$i]['name'] = $key;
	$array_dados['dados'][$i]['data']= $value;
	$i++;
}

echo json_encode($array_dados);

?>