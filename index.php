<!DOCTYPE html>
<html>
<head>
    <title>Sorteador de Séries</title>
  <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <h1>Sorteador de Séries</h1>

    <form method="post" action="">
        <select name="genero" id="genero">
            <option value="">Selecione um Gênero</option>
            <option value="terror">Terror</option>
            <option value="comedia">Comédia</option>
            <option value="acao">Ação</option>
            <option value="suspense">Suspense</option>
            <option value="anime">Anime</option>
        </select>

        <button type="submit" name="sortear">Sortear uma Série</button>
    </form>

    <?php
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
        ],
        "comedia" => [
            "Brooklyn Nine-Nine <br><br> <img src='brooklyn3.jpg'>",
            "The Marvelous Mrs. Maisel <br><br> <img src='marvelous.jpg'>",
            "Seinfeld <br><br> <img src='seinfeld.jpg'>",
            "The Office <br><br> <img src='theoffice.jpg'>",
            "Friends <br><br> <img src='friends.jpg'>",
        ],
        "acao" => [
            "Perdido em Marte <br><br> <img src='perdido.jpg'>",
            "Mad Max Estrada da Fúria <br><br> <img src='Mad.jpg'>",
            "Velozes e furiosos 9 <br><br> <img src='velozes.jpg'>",
            "Pantera Negra <br><br> <img src='pantera.jpg'>",
            "John Wick <br><br> <img src='johnwick.jpg'>",
        ],
        "suspense" => [
            "Ilha do medo <br><br> <img src='island.jpg'>",
            "Agente Infiltrado <br><br> <img src='infiltrado.jpg'>",
            "Guerra dos Mundos <br><br> <img src='guerra.jpg'>",
            "Amnésia <br><br> <img src='amnesia.jpg'>",
            "Marcados para Morrer <br><br> <img src='marcados.jpg'>" 
        ],
        "anime" => [
            "One Piece <br><br> <img src='onepiece.jpg'>",
            "Death Note <br><br> <img src='deathnote.jpg'>",
            "Jujutsu Kaisen <br><br> <img src='jujutsokaisen.jpg'>",
            "Cowboy Bebop <br><br> <img src='cowboy.jpg'>",
            "JoJo's Bizarre Adventure <br><br> <img src='jojo.jpg'>",
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
          <p class="conhecer">Para conhecer os criadores, <a href="grupo.php">clique aqui</a>.</p>
      </footer>
</body>
</html>
