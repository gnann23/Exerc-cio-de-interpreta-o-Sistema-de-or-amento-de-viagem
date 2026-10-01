<?php

function formatarMoeda($valor) {
    return 'R$ ' . number_format((float) $valor, 2, ',', '.');
}

$destino = $destino ?? "Não informado";
$qtdViajantes = $qtdViajantes ?? 0;
$qtdDias = $qtdDias ?? 0;
$totalPassagens = $totalPassagens ?? 0;
$totalHospedagem = $totalHospedagem ?? 0;
$totalAlimentacao = $totalAlimentacao ?? 0;
$totalTransporte = $totalTransporte ?? 0;
$totalPasseios = $totalPasseios ?? 0;
$totalViagem = $totalViagem ?? 0;
$vlrPorViajante = $vlrPorViajante ?? 0;

echo "Destino: {$destino}\n";
echo "Passageiros: {$qtdViajantes} pessoa(s) | Duração: {$qtdDias} dia(s)\n";
echo "--------------------------------------------------\n";
echo "DETALHAMENTO DOS CUSTOS:\n";
echo "- Passagens Aéreas/Rodoviárias : " . formatarMoeda($totalPassagens) . "\n";
echo "- Hospedagem                   : " . formatarMoeda($totalHospedagem) . "\n";
echo "- Alimentação                  : " . formatarMoeda($totalAlimentacao) . "\n";
echo "- Transporte Local             : " . formatarMoeda($totalTransporte) . "\n";
echo "- Passeios Turísticos          : " . formatarMoeda($totalPasseios) . "\n";
echo "--------------------------------------------------\n";
echo "VALOR TOTAL ESTIMADO            : " . formatarMoeda($totalViagem) . "\n";
echo "CUSTO MÉDIO POR VIAJANTE        : " . formatarMoeda($vlrPorViajante) . "\n";
echo "==================================================\n";
echo "     Obrigado por escolher a Senac Tour!          \n";
echo "==================================================\n";
?>
