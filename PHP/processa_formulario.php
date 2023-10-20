<!DOCTYPE html>
<html>
<head>
    <title>Processamento do Formulário</title>
  <link rel="stylesheet" type="text/css" href="../css/processa_formulario.css">
</head>
<!DOCTYPE html>
<html>
<head>
    <title>Processamento do Formulário</title>
</head>
<body>
    <header>
        <h1>Processamento do Formulário</h1>
      <a href="javascript:history.back()" class="btn-voltar">Voltar</a>
    </header>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $mensagem = $_POST["mensagem"];

        // Aqui você pode adicionar o código para enviar o email real se necessário.
        // Neste exemplo, estamos apenas simulando o envio do email.

        // Simule o envio do email (neste exemplo, não é realmente enviado)
        $enviado = true;

        if ($enviado) {
            echo "<section>";
            echo "<h2>Email Enviado</h2>";
            echo "<p>O email foi enviado com sucesso para nossa equipe.</p>";
            echo "</section>";

            // Aguarde alguns segundos e redirecione de volta para a página de contato
            header("refresh:5;url=contato.php");
        } else {
            echo "<section>";
            echo "<h2>Falha no Envio</h2>";
            echo "<p>Ocorreu um erro ao enviar o email. Por favor, tente novamente mais tarde.</p>";
            echo "</section>";
        }
    } else {
        echo "<section>";
        echo "<p>Nenhum dado foi submetido.</p>";
        echo "</section>";
    }
    ?>

    <footer>
        <p>Para voltar à página principal, <a href="index.php">clique aqui</a>.</p>
    </footer>
</body>
</html>
