<?php
// Função para verificar aceitação do desafio 1
function verificarAceitacao($nome, $sexo, $idade)
{
   if ($sexo == "masculino" && $idade == 18) {
      return $nome . " Alistamento obrigatório";
   } else {
      return $nome . " Facultativo, Dispensado ou Prestado";
   }
}

// Função para ordenar números do desafio 2
function ordenarNumeros($num1, $num2, $num3)
{
   $numeros = [$num1, $num2, $num3];
   sort($numeros);
   return implode(",", $numeros);
}

// Função para calcular média do desafio 3
function calcularMediaAluno($nota1, $nota2, $nota3)
{
   $notas = [$nota1, $nota2, $nota3];
   $media = array_sum($notas) / count($notas);
   $saida = ""; // Começa vazia
   foreach ($notas as $i => $valor) {
      $saida .= "A Nota " . ($i + 1) . " foi: {$valor} <br>";
   }
   if ($media >= 6) {
      $saida .= "<strong>" . round($media, 2) . " é a media das notas aluno que foi APROVADO </strong>";
   } else {
      $saida .= "<strong>" . round($media, 2) . " é a media das notas aluno que foi REPROVADO </strong>";
   }
   return $saida;
}
?>