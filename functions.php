<?php 

//funçaõ de união
function uniao($a, $b){
	$uniao = array_unique(array_merge($a, $b));
	$contarU = count($uniao);
	$u = implode(',', $uniao);

	echo "<h4>a união dos conjuntos A e B é: { $u }.<br />A união retornou $contarU elemento(s)</h4><br /><br />";
}

//função intersecção
function inter($a, $b){
	$inter = array_intersect($a, $b);
	$contarI = count($inter);
	$i = implode(',', $inter);

	if($contarI == 0){
		echo "<h4>Não existe intersecção pois este é um conjunto disjunto!</h4>";
	}else{
		echo "<h4>A inte dos conjuntos A e B é { $i }.<br />A inter retornou: $contarI elemento(s)</h4><br /><br />";
	}
}

//função de subtração
function subtr($a, $b){
	$subtr = array_diff($a, $b);
	$contarS = count($subtr);
	$s = implode(',', $subtr);

	echo "<h4>a subtração de A - B é: { $s }<br />A subtração retornou: $contarS elemento(s)</h4><br /><br />";
}

//função complementar
function comp($a, $b){
	$comp = array_diff($b, $a);
	$contarC = count($comp);
	$c = implode(',', $comp);

	echo "<h4>a complementar de B - A é: { $c }<br />A subtração retornou: $contarC elemento(s)</h4><br /><br />";
}

//função de combinação
function comb($a, $b, $totalC){
	echo "<h4>A combinação dos elementos A e B é: </h4><br />";
	foreach ($a as $eA) {
		foreach ($b as $eB) {
			echo "{ $eA  -> $eB }<br />";
		}
	}
	echo "<br /><h4>A quantidade de combinações obtidas foi: $totalC</h4>";
}

?>
