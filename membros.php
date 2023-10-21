<!DOCTYPE html>
<html>
<head>
    <title>Membros do Grupo</title>
    <link rel="stylesheet" type="text/css" href="css/membros.css">
  
</head>
<body>
    <header>
        <h1>Membros do Grupo</h1>
      <a href="javascript:history.back()" class="btn-voltar">Voltar</a>
    </header>

    <section>
        <h2>Conheça Nossa Equipe</h2>
        <p>Nosso grupo é composto por membros talentosos e diversificados, cada um contribuindo com suas habilidades e conhecimentos. Abaixo, você encontrará informações sobre cada membro da nossa equipe.</p>
    </section>

    <section>
        <h2>Equipe de Trabalho</h2>
        <ul>
            <?php
            // Defina uma matriz com informações sobre os membros da equipe
            $equipe = array(
                array("Marcos Vinicius Dias Costa", "RA: 1734941631", "desenvolvedor web experiente com forte conhecimento em PHP, HTML, CSS e JavaScript. Ele desempenha um papel fundamental na criação e manutenção de nossos sites."),
                array("Fellipe De Oliveira Aragao", "RA:1735826428", "designer gráfico criativo e talentoso. Suas habilidades de design são essenciais na criação de interfaces de usuário atraentes e experiências de usuário excepcionais."),
                array("Matheus Alcântara Dos Santos" , "RA:1735504374","gerente de projeto experiente. Ele lidera nossas equipes com eficiência, garantindo que os projetos sejam entregues dentro do prazo e dentro do orçamento."),
<<<<<<< HEAD:membros.php
                array("Maria Eduarda Souza De Albuquerque", "RA: 35495448","analista de dados com experiência em análisar e interpretar dados estatísticos. Ele trabalha com técnicas de mineração de dados, análise de dados e gerenciamento de banco de dados.")
=======
                array("Maria Eduarda Souza De Albuquerque", "RA: 35495448","analista de dados com experiência em análisar e interpretar dados estatísticos. Ela trabalha com técnicas de mineração de dados, análise de dados e gerenciamento de banco de dados.")
>>>>>>> af17a75 (RA):PHP/membros.php
            );

            // Loop para exibir informações da equipe
            foreach ($equipe as $membro) {
                echo "<li>";
                echo "<h3>" . $membro[0] . "</br>". $membro [1] ."</h3>";
                echo "<p>" . $membro[2] . "</p>";
                echo "</li>";
            }
            ?>
        </ul>
    </section>
<footer>
        <p>Para voltar à página principal, <a href="index.php">clique aqui</a>.</p>
    </footer>
</body>
</html>