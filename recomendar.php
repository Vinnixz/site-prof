<!DOCTYPE html>
<html>
<head>
    <title>Recomendar Séries</title>
  <link rel="stylesheet" type="text/css" href="css/sorte.css">
</head>
<body>
    <h1>Recomendar Série</h1>

    <form method="post" action="">
        <select name="genero" id="genero">
            <option value="">Selecione um Gênero</option>
            <option value="terror">Terror</option>
            <option value="comédia">Comédia</option>
            <option value="ação">Ação</option>
            <option value="suspense">Suspense</option>
            <option value="anime">Anime</option>
        </select>

        <button type="submit" name="sortear">Recomendar</button>
    </form>

    <?php

    $series = [
        "" => [
            "Por favor selecione um gênero",
        ],
        "terror" => [
            "It: A coisa House<br><br> <img src='imagem/it.jpg'>", 
            "American Horror Story <br><br> <img src='imagem/american.jpg'>",
            "Stranger Things<br><br> <img src='imagem/strangers.jpg'>",
            "Pânico 6 <br><br> <img src='imagem/panico.jpg'>",
            "The Witcher <br><br> <img src='imagem/thewitcher.jpg'>",
        ],
        "comédia" => [
            "Brooklyn Nine-Nine <br><br> <img src='imagem/brooklyn3.jpg'>",
            "The Marvelous Mrs. Maisel <br><br> <img src='imagem/marvelous.jpg'>",
            "Seinfeld <br><br> <img src='imagem/seinfeld.jpg'>",
            "The Office <br><br> <img src='imagem/theoffice.jpg'>",
            "Friends <br><br> <img src='imagem/friends.jpg'>",
        ],
        "ação" => [
            "Perdido em Marte <br><br> <img src='imagem/perdido.jpg'>",
            "Mad Max Estrada da Fúria <br><br> <img src='imagem/Mad.jpg'>",
            "Velozes e furiosos 9 <br><br> <img src='imagem/velozes.jpg'>",
            "Pantera Negra <br><br> <img src='imagem/pantera.jpg'>",
            "John Wick <br><br> <img src='imagem/johnwick.jpg'>",
        ],
        "suspense" => [
            "Ilha do medo <br><br> <img src='imagem/island.jpg'>",
            "Agente Infiltrado <br><br> <img src='imagem/infiltrado.jpg'>",
            "Guerra dos Mundos <br><br> <img src='imagem/guerra.jpg'>",
            "Amnésia <br><br> <img src='imagem/amnesia.jpg'>",
            "Marcados para Morrer <br><br> <img src='imagem/marcados.jpg'>" 
        ],
        "anime" => [
            "One Piece <br><br> <img src='imagem/onepiece.jpg'>",
            "Death Note <br><br> <img src='imagem/deathnote.jpg'>",
            "Jujutsu Kaisen <br><br> <img src='imagem/jujutsokaisen.jpg'>",
            "Cowboy Bebop <br><br> <img src='imagem/cowboy.jpg'>",
            "JoJo's Bizarre Adventure <br><br> <img src='imagem/jojo.jpg'>",
        ]
    ];

    if (isset($_POST['sortear'])) {
        $generoSelecionado = $_POST['genero'];

        if ($generoSelecionado === "") {
            echo "<p class='resposta'>Por favor, selecione um gênero antes de sortear.</p>";
        } else {
            $serieSorteada = $series[$generoSelecionado][array_rand($series[$generoSelecionado])];
            echo "<p class='resposta'>Recomendamos a série de $generoSelecionado: <strong>$serieSorteada</strong></p>";
        }
    }
    
    ?> 
      <footer>
          <p class="conhecer">Para conhecer os criadores, <a href="grupo.php" style="color: white; text-decoration: none;">clique aqui</a>.</p>
      </footer>
</body>
</html>
