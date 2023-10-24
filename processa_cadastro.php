<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/processa_cadastro.css">
    <title>Cadastro - Netflix</title>
</head>
<body>
  <div class="message-container">
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $email = $_POST["email"];
          $senha = $_POST["senha"];
          $confirmarSenha = $_POST["confirmar-senha"];
          $idadeConfirmada = isset($_POST["idade-confirmada"]);
          $genero = $_POST["genero"];

         if (strlen($senha) < 3) {
                echo "A senha deve ter pelo menos 3 caracteres.";
            } elseif ($senha != $confirmarSenha) {
                echo "As senhas não coincidem. Por favor, tente novamente.";
            } else {
                if (!$idadeConfirmada) {
                    echo "Você precisa confirmar que tem 18 anos ou mais para continuar.";
                } else {
                    header("Location: start.php");
                }
            }
        }
        ?>
  </div>
</body>
</html>
