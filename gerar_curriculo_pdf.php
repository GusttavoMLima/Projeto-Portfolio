<?php
/**
 * Script para gerar PDF do currículo
 * 
 * IMPORTANTE: Este script requer a biblioteca TCPDF ou FPDF instalada.
 * Alternativa: Use o arquivo curriculo.html e converta manualmente para PDF
 * usando "Imprimir > Salvar como PDF" no navegador.
 */

// Se você tiver TCPDF instalado, descomente e configure abaixo:
/*
require_once('tcpdf/tcpdf.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetCreator('Gustavo Marques de Lima');
$pdf->SetAuthor('Gustavo Marques de Lima');
$pdf->SetTitle('Currículo - Gustavo Marques de Lima');

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

$pdf->AddPage();

// Adicione o conteúdo do currículo aqui
$html = file_get_contents('curriculo.html');
$pdf->writeHTML($html, true, false, true, false, '');

$pdf->Output('curriculo.pdf', 'D');
*/

// Alternativa simples: redireciona para o HTML que pode ser salvo como PDF
header('Location: curriculo.html');
exit;
?>

