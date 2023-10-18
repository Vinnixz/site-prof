<!DOCTYPE html>
<html>
<head>
    <title>Sorteador de Séries</title>
    <link rel="stylesheet" type="text/css" href="ranking.css">
</head>
<body>
    <h1>Sorteador de Séries</h1>

    <form method="post" action="">
        <select name="genero" id="genero">
            <option value="">Selecione um Gênero</option>
            <option value="terror">Terror</option>
            <option value="comedia">Comédia</option>
            <option value="romance">Romance</option>
            <option value="humor">Humor</option>
            <option value="anime">Anime</option>
        </select>

        <button type="submit" name="sortear">Sortear uma Série</button>
    </form>

    <?php
    // Matriz de séries por gênero
    $series = [
        "" => [
            "Por favor selecione um gênero",
        ],
        "terror" => [
            "The Haunting of Hill House",
            "American Horror Story",
            "Stranger Things",
            "Bates Motel",
            "The Witcher",
            // Adicione mais séries de terror aqui
        ],
        "comedia" => [
            "Brooklyn Nine-Nine <br><br> <img src='brooklyn.jpeg'>",
            //"The Marvelous Mrs. Maisel",
            //"Parks and Recreation",
            //"The Office",
            //"Friends",
            // Adicione mais séries de comédia aqui
        ],
        "romance" => [
            "Outlander",
            "Série de Romance 2",
            // Adicione mais séries de romance aqui
        ],
        "humor" => [
            "Série de Humor 1",
            "Série de Humor 2",
            // Adicione mais séries de humor aqui
        ],
        "anime" => [
            "Série de Anime 1",
            "Série de Anime 2",
            // Adicione mais séries de anime aqui
        ]
    ];

    if (isset($_POST['sortear'])) {
        $generoSelecionado = $_POST['genero'];

        if ($generoSelecionado === "") {
            echo "<p>Por favor, selecione um gênero antes de sortear.</p>";
        } else {
            $serieSorteada = $series[$generoSelecionado][array_rand($series[$generoSelecionado])];
            echo "<p>Recomendamos a série de $generoSelecionado: <strong>$serieSorteada</strong></p>";
        }
    }
    ?>
      <footer>
          <p>Para voltar à página principal, <a href="index.php">clique aqui</a>.</p>
      </footer>
</body>
</html>
