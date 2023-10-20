<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking de Séries de TV</title>
    <style>
        
        h1 {
            color: red; 
        }

       
        .ranking {
            color: black; 
        }

    
        header {
            background-color: black; 
            padding: 10px; 
        }

        
        footer {
            background-color: black; 
            padding: 10px; 
            text-align: center; 
        }
    </style>
</head>
<body>
  <form method="POST" action="start.php">
  <button type="submit" class="btn-voltar">Voltar</button>
  </form>
    <header>
    <h1>Ranking de Séries de TV</h1>
    </header>
        <h2>Ranking</h2>
        <p>O ranking foi criado por criticos renomados da industria do cinema, o ranking e totalmente imparcial</p>
    <?php
        
        $series = array(
            'Brooklyn Nine Nine' => 5,
            'The Last Of Us' => 4.3,
            'One Piece: A Série' => 4.2,
            'O Agente Noturno' => 4.2
        );

        
        arsort($series);

        echo '<div class="ranking">';
        $posicao = 1;
        foreach ($series as $serie => $classificacao) {
            echo $posicao . ". " . $serie . " - Classificação: " . $classificacao . "<br>";
            $posicao++;
        }
        echo '</div>';
    ?>

    <footer>
        <p>Rodapé - Direitos Reservados &copy; 2023</p>
    </footer>
</body>
</html>
