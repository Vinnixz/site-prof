<!DOCTYPE html>
<html>
<head>
    <title>Página Inicial</title>
    <style>
        body {
            display: flex;
            flex-direction: column; 
            justify-content: center; 
            align-items: center; 
            height: 100vh;
            margin: 0;
            background-color: black;
        }

        .netflix {
            width: 600px;
            height: 400px;
        }

        #start-button {
            padding: 32px 64px;
            font-size: 32px;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #e10b17; 
            transition: background-color 0.3s;
        }

    </style>
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

            if (strlen($senha) < 3) {
                echo "A senha deve ter pelo menos 3 caracteres.";
            } elseif ($senha != $confirmarSenha) {
                echo "As senhas não coincidem. Por favor, tente novamente.";
            } else {
                if (!$idadeConfirmada) {
                    echo "Você precisa confirmar que tem 18 anos ou mais para continuar.";
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
