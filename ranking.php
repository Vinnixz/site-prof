<!DOCTYPE html>
<html>
<head>
    <title>Sorteador de Séries</title>
</head>
<body>
    <h1>Sorteador de Séries</h1>

    <form method="post" action="">a
        <label for="genero">Escolha o Gênero:</label>
        <select name="genero" id="genero">
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
        "terror" => [
            "Bolota do php",
            "Bolota sem pizza",
            // Adicione mais séries de terror aqui
        ],
        "comedia" => [
            "Série de Comédia 1",
            "Série de Comédia 2",
            // Adicione mais séries de comédia aqui
        ],
        "romance" => [
            "Série de Romance 1",
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
        $serieSorteada = $series[$generoSelecionado][array_rand($series[$generoSelecionado])];
        echo "<p>Recomendamos a série de $generoSelecionado: <strong>$serieSorteada</strong></p>";
    }
    ?>
</body>
</html>
