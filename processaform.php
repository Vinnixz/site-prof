<!DOCTYPE html>
<html>
<head>
    <title>Processamento do Formulário</title>
</head>
<body>
    <header>
        <h1>Processamento do Formulário</h1>
    </header>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $mensagem = $_POST["mensagem"];

        // Simule o envio do email (neste exemplo, não é realmente enviado)
        // Aqui você pode adicionar o código para enviar o email real se necessário.

        // Exibir mensagem de sucesso
        echo "<section>";
        echo "<h2>Email Enviado</h2>";
        echo "<p>O email foi enviado com sucesso para nossa equipe.</p>";
        echo "</section>";

        // Aguarde alguns segundos e redirecione de volta para a página de contato
        header("refresh:5;url=contato.php");
    } else {
        echo "<section>";
        echo "<p>Nenhum dado foi submetido.</p>";
        echo "</section>";
    }
    ?>

    <footer>
        <p>Para voltar à página principal, <a href="grupo_de_trabalho.php">clique aqui</a>.</p>
    </footer>
</body>
</html>
