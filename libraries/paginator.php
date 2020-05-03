<?php

/**
* $actual = página actual
* $numero = numero de registros existentes
* $base = URL base
*/

function paginator($actual,$registros,$base,$nxpag='10'){

	$sig = $actual + 1;
	$ant = $actual - 1;
	
	$numero = ceil($registros / $nxpag);

    echo '<ul class="pagination justify-content-center">';
	echo "\n";
	if($actual <= 1){
		echo '<li class="page-item disabled"><a href="javascript:;" class="page-link">&laquo;</a></li>';
		echo "\n";
	} else {
		echo '<li class="page-item"><a href="'.$base.$ant.'/" class="page-link">&laquo;</a></li>';
		echo "\n";
	}

	if($actual < 4){

		// Si la página actual es menor que 4, visualizo de esta manera

		for($i=1;$i<6;$i++){

			if($actual == $i){
				echo '<li class="page-item active"><a href="javascript:;" class="page-link">'.$i.'</a></li>';
				echo "\n";
			} else {
				if($i <= $numero){
					if($i<$actual){
						echo '<li class="page-item"><a href="'.$base.$i.'/" class="page-link">'.$i.'</a></li>';
						echo "\n";
					} else {
						echo '<li class="page-item"><a href="'.$base.$i.'/" class="page-link">'.$i.'</a></li>';
						echo "\n";
					}
				}
			}

		}

	} else {

		// Si la p�gina es la 4 o mayor, se muestra de esta manera

		// Si es la penúltima página
		if($actual==$numero-1){

			$ii = $actual - 3;
			$nn = $actual + 1;
			$n = $nn + 1;

		}
		// Si es la última página
		elseif($actual==$numero){

			$ii = $actual - 4;
			$nn = $actual;
			$n = $nn + 1;

		}
		// Si no es ni la última o penúltima página
		else {

			$ii = $actual - 2;
			$nn = $actual + 2;
			$n = $nn + 1;

		}

		for($i=$ii;$i<$n;$i++){
			
			if($actual == $i){
				echo '<li class="page-item active"><a href="javascript:;" class="page-link">'.$i.'</a></li>';
				echo "\n";
			} else {
				if($i <= $numero){
					echo '<li class="page-item"><a href="'.$base.$i.'/" class="page-link">'.$i.'</a></li>';
					echo "\n";
				}
			}

		}

	}

	if($actual == $numero){
		echo '<li class="page-item disabled"><a href="javascript:;" class="page-link">&raquo;</a></li>';
	} else {
		echo '<li class="page-item"><a href="'.$base.$sig.'/" class="page-link">&raquo;</a></li>';
		echo "\n";
	}
	echo '</ul>';

}

?>