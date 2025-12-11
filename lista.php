<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    <?php
        //Variaveis item - Compras
        $item1 = $_POST["item1"];
        $item2 = $_POST["item2"];
        $item3 = $_POST["item3"];
        $item4 = $_POST["item4"];
        $item5 = $_POST["item5"];

        //Variaveis notas - Notas
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];
        $nota4 = $_POST["nota4"];
        $nota5 = $_POST["nota5"];

        //Codig - Compras
        echo "<h4>Lista de Compras.</h4>";
        echo "<ul>";
        $lista = array($item1, $item2, $item3, $item4, $item5);
        foreach($lista as $compras){
            echo "<li>$compras</li>";
        }
        echo "</ul>";

        $turma = ["Ana" => 16, "João" => 17, "Maria" => 18, "Kévin" => 19, "Carlos" => 20];

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
        
        //Codigo - Notas
        echo "<h4>Lista de Notas.</h4>";
        echo "<ul>";
        $notas = array($nota1, $nota2, $nota3, $nota4, $nota5);

        notafinal

        foreach($notas as $notasfinal){
            
        }

        if($notafinal < 10){
            $resultado = "Reprovado";
        }elseif($notafinal >= 10 && $tamanho <= 13){
            $resultado = "Satisfaz";
        }elseif($notafinal >= 14 && $notafinal <= 17){
            $resultado = "Bom";
        }elseif($notafinal >= 18 && $notafinal <= 20){
            $resultado = "Excelente";
        }else{
            $resultado = "Invalido";
        }

        echo "A sua nota é $notafinal, classificação: $resultado.";

        echo "<h1>Resultado em tabela</h1>";

        echo "<table border='2 width='150px'>";
        echo "<tr>";
        echo "<tr>Média</tr>";
        echo "<th>Resultado</th>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>" . $notafinal . "</td>";
        echo "<td>" . $resultado . "</td>";
        echo "</tr>";

    ?>
</body>
</html>