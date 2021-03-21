<?php

$noticias = array();

$noticias[1]['titulos'] = 'titulos da noticia 1';
$noticias[1]['Conteudo'] = 'Conteudo dessa noticia 1';

$noticias[2]['titulos'] = 'titulos da noticia 2 ';
$noticias[2]['Conteudo'] = 'Conteudo dessa noticia 2';

$noticias[3]['titulos'] = 'titulos da noticia 3';
$noticias[3]['Conteudo'] = 'Conteudo dessa noticia 3';

//var_dump($noticias);

//while
/*$idx = 1;
while ($idx <= 3) {
	echo $noticias[$idx]['titulos'];
	echo "<br/>";
	echo $noticias[$idx]['Conteudo'];
	echo "<br/>";

	$idx = $idx + 1;
}
*/

//do while
/*$idx = 1;

do{
	echo $noticias[$idx]['titulos'];
	echo "<br/>";
	echo $noticias[$idx]['Conteudo'];
	echo "<br/>";

    $idx = $idx + 1;
} while($idx <= 3);
*/



for ($idx = 1; $idx <= 3 ; $idx = $idx + 1) { 
	echo $noticias[$idx]['titulos'];
	echo "<br/>";
	echo $noticias[$idx]['Conteudo'];
	echo "<br/>";
	

}



?>