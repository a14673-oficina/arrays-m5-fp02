<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Resultados</title>
</head>
<body>
    <?php
        $item1 = $_POST["item1"];
        $item2 = $_POST["item2"];
        $item3 = $_POST["item3"];
        $item4 = $_POST["item4"];
        $item5 = $_POST["item5"];

        echo "<h4>Lista de Compras.</h4>";
        echo "<ul>";
        $lista = array($item1, $item2, $item3, $item4, $item5);
        foreach($lista as $compras){
            echo "<li>$compras</li>";
        }
        echo "</ul>";

    
        $turma = ["Ana" => 16, "João" => 17, "Maria" => 18, "Kévin" => 19, "Carlos" => 20];

        echo "<h2>Tabela da Turma</h2>";
        echo "<table border='2' width='150px'>";
            echo "<tr>";
            echo "<th>Nome</th>";
            echo "<th>Idade</th>";
            echo "</tr>";

            foreach($turma as $nome => $idade){
            echo "<tr>";
            echo "<td>" . $nome . "</td>";
            echo "<td>" . $idade . "</td>";
            echo "</tr>";
            }
        echo "</table>";
        
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];
        $nota4 = $_POST["nota4"];
        $nota5 = $_POST["nota5"];

        echo "<h4>Lista de Notas.</h4>";
        echo "<ul>";
        $notas = array($nota1, $nota2, $nota3, $nota4, $nota5);

        
        $notafinal = array_sum($notas) / count($notas);

        
        foreach($notas as $nota_individual){
            echo "<li>Nota: " . $nota_individual . "</li>";
        }
        echo "</ul>";

       
        if($notafinal < 10){
            $resultado = "Reprovado";
        }elseif($notafinal <= 13){ 
            $resultado = "Satisfaz";
        }elseif($notafinal <= 17){
            $resultado = "Bom";
        }elseif($notafinal <= 20){
            $resultado = "Excelente";
        }else{
            $resultado = "Inválido";
        }

        echo "<p>A sua nota é " . number_format($notafinal, 2) . ", classificação: $resultado.</p>";

       
        echo "<h2>Resultado em Tabela</h2>";

        echo "<table border='2' width='150px'>";
        echo "<tr>";
        echo "<th>Média</th>";
        echo "<th>Resultado</th>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . number_format($notafinal, 2) . "</td>";
        echo "<td>" . $resultado . "</td>";
        echo "</tr>";
        echo "</table>";

    ?>
</body>
</html>