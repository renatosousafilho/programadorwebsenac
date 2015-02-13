<?php 
  // declarar numero1 com valor 10
  $numero1=10;
  $numero2=50;
  $soma=$numero1+$numero2;
  echo $soma; 
  $subtracao=$numero1-$numero2;
  echo "<br/>";
  echo $subtracao;  

  $produto = $numero1*$numero2;
  echo "<br/>";
  echo $produto;

  $divisao = $numero1 / $numero2;
  echo "<br/>";
  echo $divisao;

  $resto = $numero1 % $numero2;
  echo "<br/>";
  echo $resto;
  
  $condicao1=18>5;
  echo "<br/>";
  echo $condicao1;

  $condicao2=10<5;
  echo "<br/>";
  echo $condicao2;

  $condicao3=(10==5+5);
  echo "<br/>";
  echo $condicao3;

  $condicao4=(20!=40/2);
  echo "<br/>";
  echo $condicao4;

$logica1=$condicao1&&$condicao3;
echo "<br/>";
echo $logica1;
$logica2=$condicao1&&$condicao2;
echo "<br/>";
echo $logica2;
$logica3=$condicao1||$condicao2;
echo "<br/>";
echo $logica3;
$logica4=$condicao2||$condicao4;
echo "<br/>";
echo $logica4;

$valor1=true;
echo "<br/>";
echo $valor1;

$valor2=(!$valor1);
echo "<br/>";
echo $valor2;
?>