<?php 
$con=mysqli_connect("localhost","root","","tablafutbol");

$equipoLocal = (int)$_POST['cbxequiposlocales'];
$equipoVisita = (int)$_POST['cbxequiposvisitantes'];
$golesLocal = (int)$_POST['txtgoleslocales'];
$golesVisita = (int)$_POST['txtgolesvisitantes'];

$ganoLocal = 0;
$empatoLocal = 0;
$perdioLocal = 0;
$puntosLocal = 0;

$ganoVisita = 0;
$empatoVisita = 0;
$perdioVisita = 0;
$puntosVisita = 0;

if ($golesLocal > $golesVisita) {
	$ganoLocal = 1;
	$perdioVisita = 1;
	$puntosLocal = 3;
} elseif ($golesLocal < $golesVisita) {
	$ganoVisita = 1;
	$perdioLocal = 1;
	$puntosVisita = 3;
} else {
	$empatoLocal = 1;
	$empatoVisita = 1;
	$puntosLocal = 1;
	$puntosVisita = 1;
}

$sentenciaLocal = "UPDATE posiciones set partidosJugados = partidosJugados + 1, 
					partidosGanados = partidosGanados + ".$ganoLocal.",
					partidosEmpatados = partidosEmpatados + ".$empatoLocal.",
					partidosPerdidos = partidosPerdidos + ".$perdioLocal.",
					golesFavor = golesFavor + ".$golesLocal.",
					golesContra = golesContra + ".$golesVisita.",
					diferenciaGoles = diferenciaGoles + ".$golesLocal." - ".$golesVisita.",
					acumulapuntos = acumulapuntos + ".$puntosLocal."
					 where idequipo= ".$equipoLocal."  ";

$sentenciaVisita = "UPDATE posiciones set partidosJugados = partidosJugados + 1, 
					 partidosGanados = partidosGanados + ".$ganoVisita.",
					 partidosEmpatados = partidosEmpatados + ".$empatoVisita.",
					 partidosPerdidos = partidosPerdidos + ".$perdioVisita.",
					 golesFavor = golesFavor + ".$golesVisita.",
					 golesContra = golesContra + ".$golesLocal.",
					 diferenciaGoles = diferenciaGoles + ".$golesVisita." - ".$golesLocal.", 
					 acumulapuntos = acumulapuntos + ".$puntosVisita." 
					  where idequipo= ".$equipoVisita."  ";


$con->query($sentenciaLocal);
$con->query($sentenciaVisita);
$con->close();
?>
<script type="text/javascript">
	top.location.href="index.html";
</script>