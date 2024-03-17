<?php 
 $sb = 2000;
 $alime = 500;
 $nf = 2;
 $vf = 100;
 $nh = 10;
 $vh = 20;
 $inss = 200;
 $irpf = 300;

 $sl = $sb + $alime + ($nf * $vf) + ($nh * $vh) - $inss - $irpf;

 echo "Salário bruto: $sb <br>";
 echo "Alimentação: $alime <br>";
 echo "Numero de filhos: $nf <br>";
 echo "Valor por filho: $vf <br>";
 echo "Número de horas: $nh <br>";
 echo "Valor por hora: $vh <br>";
 echo "Valor do INSS: $inss <br>";
 echo "Valor do IRPF: $irpf <br>";
 echo "Seu sálario líquido é: $sl";
?>