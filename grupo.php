<!DOCTYPE html>
<html>
<head>
    <title>Trabalho em grupo</title>
    <link rel="stylesheet" type="text/css" href="css/grupo.css">
</head>
<body>
    <header>
        <h1>Grupo de Trabalho</h1>
      <a href="javascript:history.back()" class="btn-voltar">Voltar</a>
    </header>

    <section>
        <h2>Sobre o Grupo</h2>
        <p>O nosso grupo é composto por iniciantes no mundo da programação e todo esse site foi criado e pensado pelos membros mencionados abaixo. Fizemos com dedicação e esperamos que você curta.</p>
    </section>

    <div class="container">
        <section class="projetos">
            <h2><a href="projetos.php">Projetos</a></h2>
            <p>Para saber mais sobre o nosso projeto.</p>
            <ul>
                <li class="projeto" onclick="redirecionarParaTrabalho()"> Site criado para conteúdo universitário.</li>
            </ul>
        </section>

        <section class="membros">
            <h2><a href="membros.php">Membros</a></h2>
            <p>Para saber mais sobre nossos membros.</p>
            <ul>
                <li class="membro" onclick="redirecionarParaMembros()">Marcos Vinicius Dias Costa</li>
                <li class="membro" onclick="redirecionarParaMembros()">Fellipe De Oliveira Aragao</li>
                <li class="membro" onclick="redirecionarParaMembros()">Matheus Alcântara Dos Santos</li>
                <li class="membro" onclick="redirecionarParaMembros()">Maria Eduarda Souza De Albuquerque</li>
            </ul>
        </section>
    </div>

    <footer>
        <p>Para entrar em contato com o nosso grupo de trabalho, <a class="aqui" href="contato.php">clique aqui</a> ou envie um e-mail para marvcosta04@gmail.com.</p>
    </footer>
</body>
</html>