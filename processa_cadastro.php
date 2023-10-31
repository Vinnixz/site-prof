<!DOCTYPE html>
<html>
<head>
    <title>Página Inicial</title>
  <link rel="stylesheet" type="text/css" href="css/processa_cadastro.css">
  
</head>
<body>
    <img class="netflix" src="imagem/netflix.jpg" alt="LOGO NETFLIX">
    <div class="message-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $confirmarSenha = $_POST["confirmar-senha"];
            $idadeConfirmada = isset($_POST["idade-confirmada"]);
            $genero = $_POST["genero"];

          if ($email != 'site@trabalho.com') {
              echo "Email não cadastro na base. Por favor, volte e tente novamente";
          } elseif ($senha != 'senha123') {
              echo "A senha está incorreta. Por favor, volte e tente novamente.";
          } else {
              if (!$idadeConfirmada) {
                  echo "Você precisa confirmar que tem 18 anos ou mais para continuar. Por favor, volte e tente novamente.";
              } else {
                  echo '<form method="post" action="recomendar.php">
                      <button id="start-button" type="submit">Start</button>
                      </form>';
                }
            }
        }
        ?>
    </div>
</body>
</html>
