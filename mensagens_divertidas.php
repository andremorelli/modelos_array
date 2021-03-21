<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Mensagens divertidas</title>
	</head>

	<body>
		
		<?php

			//int
			$valor_inteiro = 1 * 4;
			echo $valor_inteiro;

			echo "<br/>";				

			$valor_inteiro = $valor_inteiro * 2;
			echo $valor_inteiro;	

			echo "<br/>";

			//float
			$valor_fracionado = 10.7;
			echo $valor_fracionado;

			echo "<br/>";

			//boolean
			$estado = true; // false
			echo $estado;

			echo "<br/>";

			//strings
			$texto = 'Curso de php -'  . $valor_inteiro;
			echo $texto;

			echo "<br/>";

			$texto = "Curso de php -   $valor_inteiro";
			echo $texto;

			echo "<br/>";


			//Arrays (Forma de montagem)
			//$mensagens_divertidas[1] = 'Estou fazendo as contas aqui e este mês não tem jeito, vou ter que gnhar na loteria ';
			//$mensagens_divertidas[2] = 'As 2 coisas que as mulheres mais gostam de ouvir: Eu te amo, 50% de desconto';
			//$mensagens_divertidas[3] = 'Cara feia para mim é espelho';
			//$mensagens_divertidas[4] = 'Estou tão carente que o churrasqueiro chega e diz: "Coração?';
			//$mensagens_divertidas[5] = 'O casamento é um relacionamento a dois, no qual uma das pessoas esta sempre certa.';	

			$teste = 'teste com variável';



			//Segunda forma de montar um array
			$mensagens_divertidas = array(
				1 => 25,
				2 => true,
				3 => $teste,// aqui o array foi preenchido com uma variável já declarada anteriormente.
				4 => -7.15,
				5 => 'O casamento é um relacionamento a dois, no qual uma das pessoas esta sempre certa. ',
			);


			//Formas de imprenssão de arrays
			var_dump($mensagens_divertidas);

			echo "<br/>";

			print_r($mensagens_divertidas);

			echo "<br/>";
			//imoressão de array por índices
			echo $mensagens_divertidas[3];


		?>

	</body>
</html>