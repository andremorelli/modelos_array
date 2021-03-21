<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Tabuleiro de Xadrez</title>
	</head>

	<body>	
		<?php


		//Array multidimencionais (Matrizes)
		$tabuleiro[8]['a'] = 'torre preto';
		$tabuleiro[8]['b'] = 'cavalo preto';
		$tabuleiro[8]['c'] = 'bispo preto';
		$tabuleiro[8]['d'] = 'rainha preto';
		$tabuleiro[8]['e'] = 'rei preto';
		$tabuleiro[8]['f'] = 'bispo preto';
		$tabuleiro[8]['g'] = 'cavalo preto';
		$tabuleiro[8]['h'] = 'torre preto';


		$tabuleiro[7]['a'] = 'peão preto';
		$tabuleiro[7]['b'] = 'peão preto';
		$tabuleiro[7]['c'] = 'peão preto';
		$tabuleiro[7]['d'] = 'peão preto';
		$tabuleiro[7]['e'] = 'peão preto';
		$tabuleiro[7]['f'] = 'peão preto';
		$tabuleiro[7]['g'] = 'peão preto';
		$tabuleiro[7]['h'] = 'peão preto';

		$tabuleiro[1]['a'] = 'torre branco';
		$tabuleiro[1]['b'] = 'cavalo branco';
		$tabuleiro[1]['c'] = 'bispo branco';
		$tabuleiro[1]['d'] = 'rainha branco';
		$tabuleiro[1]['e'] = 'rei branco';
		$tabuleiro[1]['f'] = 'bispo branco';
		$tabuleiro[1]['g'] = 'cavalo branco';
		$tabuleiro[1]['h'] = 'torre branco';

		$tabuleiro[7]['a'] = 'peão branco';
		$tabuleiro[7]['b'] = 'peão branco';
		$tabuleiro[7]['c'] = 'peão branco';
		$tabuleiro[7]['d'] = 'peão branco';
		$tabuleiro[7]['e'] = 'peão branco';
		$tabuleiro[7]['f'] = 'peão branco';
		$tabuleiro[7]['g'] = 'peão branco';
		$tabuleiro[7]['h'] = 'peão branco';

		var_dump($tabuleiro);

		echo "<br/>";

		echo $tabuleiro[8]['d'];

		echo "<br/>";

		echo $tabuleiro[1]['e'];


		
		?>

	</body>
</html>