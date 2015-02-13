<?php 
   $cores = array("Vermelho","Verde","Azul","Branco","Preto");

  print_r($cores);
  echo "<br/>";
   
   echo "Primeiro elemento".$cores[0]."<br/>";
   echo "Segundo elemento".$cores[1]."<br/>";
   echo "Terceiro elemento".$cores[2]."<br/>";

   foreach ($cores as $cor){
      echo $cor."<br/>";
   }

  
   $paises = array();
   $paises[0] = "Brasil";
   $paises[1] = "EUA";
   $paises[2]="Mexico";

   foreach ($paises as $pais) {
   	echo $pais."<br/>";
   }

   $pessoa = array();
   $pessoa["nome"]="Joâo";
   $pessoa["municipio"]="Teresina";
   $pessoa["bairro"]="Dirceu";

   echo $pessoa["nome"]."<br/>";
   echo $pessoa["municipio"]."<br/>";
   echo $pessoa["bairro"]."<br/>";

   print_r($pessoa);
 ?> 





