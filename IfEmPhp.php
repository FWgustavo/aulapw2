<html>
    <head>
        <meta charset="UTF-8">
        <title>Atividade 2</title>
    </head>

    <body>
        <?php 
           $nome_funcionario = "Sergio";
           $sl = 500.00 ;

           //Salario atual

           if ($sl <= 500)
           {
            $total_reajuste = $sl * 1.15;
            echo "Total do salário de $nome é de: $total_reajuste";
           }
           if ($sl <= 1000)
           {
            $total_reajuste = $sl * 1.10;
            echo "Total do salário de $nome é de: $total_reajuste";
           }
           if ($sl > 1000)
           {
            $total_reajuste = $sl * 1.05;
            echo "Total do salário de $nome é de: $total_reajuste";
           }
        ?>
    </body>
</html>