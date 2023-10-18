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
            <option value="suspense">Suspense</option>
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
            "It: A coisa House<br><br> <img src='it.jpg'>", 
            "American Horror Story <br><br> <img src='american.jpg'>",
            "Stranger Things<br><br> <img src='strangers.jpg'>",
            "Pânico 6 <br><br> <img src='panico.jpg'>",
            "The Witcher <br><br> <img src='thewitcher.jpg'>",
            // Adicione mais séries de terror aqui
        ],
        "comedia" => [
            "Brooklyn Nine-Nine <br><br> <img src='brooklyn3.jpg'>",
            "The Marvelous Mrs. Maisel <br><br> <img src='marvelous.jpg'>",
            "Seinfeld <br><br> <img src='seinfeld.jpg'>",
            "The Office <br><br> <img src='theoffice.jpg'>",
            "Friends <br><br> <img src='friends.jpg'>",
            // Adicione mais séries de comédia aqui
        ],
        "romance" => [
            "SexLife <br><br> <img src='sexlife.jpg'>",
            //"Bridgerton",
            //"Emily um Paris",
            //"Jane the Virgin",
            //"bates motelGirlmore Girls",
            // Adicione mais séries de romance aqui
        ],
        "humor" => [
            "Série de Humor 1",
            "Série de Humor 2",
            // Adicione mais séries de humor aqui
        ],
        "anime" => [
            "One Piece <br><br> <img src='onepiece.jpg'>",
            "Death Note <br><br> <img src='deathnote.jpg'>",
            "Jujutsu Kaisen <br><br> <img src='jujutsokaisen.jpg'>",
            "Cowboy Bebop <br><br> <img src='cowboy.jpg'>",
            "JoJo's Bizarre Adventure <br><br> <img src='jojo.jpg'>",
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
