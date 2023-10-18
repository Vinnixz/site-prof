<!DOCTYPE html>
<html>
<head>
    <title>Contato</title>
  <link rel="stylesheet" type="text/css" href="contato.css">
</head>
<body>
    <header>
        <h1>Entre em Contato</h1>
    </header>

    <section>
        <h2>Informações de Contato</h2>
        <p>Você pode entrar em contato conosco preenchendo o formulário abaixo:</p>
    </section>

    <section>
        <h2>Formulário de Contato</h2>
        <form method="POST" action="processa_formulario.php">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="4" required></textarea><br>

            <input type="submit" value="Enviar">
        </form>
    </section>

    <footer>
        <p>Você também pode nos enviar um e-mail diretamente em marvcosta04@gmail.com.</p>
    </footer>
</body>
</html>