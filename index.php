<?php include 'functions.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>Teoria dos conjuntos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="formulario">
		<form method="post">
			<p>Informe os elementos do conjunto A separados por vírgula!</p>
			<input type="text" name="conjuntoA" />
			<br />
			<p>Informe os elementos do conjunto B separados por vírgula!</p>
			<input type="text" name="conjuntoB" />
			<br /><br />
			<button name="enviar">Gerar Conjuntos</button>
			<br /><br />
		</form>
	</div>

	<div class="resultado">
		<?php
		if (isset($_POST['enviar'])) {
			$conjuntoA = $_POST['conjuntoA'];
			$conjuntoB = $_POST['conjuntoB'];

			$a = explode(',', $conjuntoA);
			$b = explode(',', $conjuntoB);

			$contarA = count($a);
			$contarB = count($b);
			$totalE = $contarA + $contarB;
			$totalC = $contarA*$contarB;

			echo "<h4><br />Conjunto A: { $conjuntoA }<br />Conjunto B: { $conjuntoB }<br />Total de elementos informados: $totalE<br /><br /></h4>";

			uniao($a, $b);
			inter($a, $b);
			subtr($a, $b);
			comp($a, $b);
			comb($a, $b, $totalC);
		}
		?>
	</div>

</body>
</html>