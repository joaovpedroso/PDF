<?php
	require_once('vendor/autoload.php');
	use Dompdf\Dompdf;
	$pdf= new Dompdf();
	
	$nome = $_POST["nome"];
	$sobrenome = $_POST["sobrenome"];
	$papel = $_POST["papel"];

	$html = "
	<div style='background: black; color: red;'>
		<p style='font-size: 30px'>Nome: $nome - Sobrenome $sobrenome</p>
	</div>";
	
	$pdf->loadHtml($html);
	$pdf->setPaper($papel, 'landscape');
	$pdf->render();
	$pdf->stream();

?>