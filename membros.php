<!DOCTYPE html>
<html>
<head>
    <title>Membros do Grupo</title>
    <link rel="stylesheet" type="text/css" href="css/membros.css">
  
</head>
<body>
    <header>
      
        <h1>Membros do Grupo</h1>
      <form method="POST" action="grupo.php">
      <button type="submit" class="btn-voltar">Voltar</button>
      </form>
    </header>
    </header>
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
                array("Marcos Vinicius Dias Costa", "RA:1734941631", "desenvolvedor web experiente com forte conhecimento em PHP, HTML, CSS e JavaScript. Ele desempenha um papel fundamental na criação e manutenção de nossos sites."),
                array("Fellipe De Oliveira Aragao", "RA:1735826428", "designer gráfico criativo e talentoso. Suas habilidades de design são essenciais na criação de interfaces de usuário atraentes e experiências de usuário excepcionais."),
                array("Matheus Alcântara Dos Santos" , "RA:1735504374","gerente de projeto experiente. Ele lidera nossas equipes com eficiência, garantindo que os projetos sejam entregues dentro do prazo e dentro do orçamento."),

                array("Maria Eduarda Souza De Albuquerque", "RA:35495448","analista de dados com experiência em análisar e interpretar dados estatísticos. Ele trabalha com técnicas de mineração de dados, análise de dados e gerenciamento de banco de dados.")
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
  <div class="container">
    <section class="Documentaçao Sobre HTML e CSS">
        <h2>Documentaçao Sobre HTML e CSS</a></h2>
        <p>colocaremos tudo relacionado a HTML e CSS</p>
        <ul>
            <li class="projeto" onclick="redirecionarParaTrabalho()"> Seletores CSS: <br>

              body: Define estilos gerais para o corpo da página.<br>header: Estiliza o cabeçalho da página.<br>h1: Estiliza os títulos de nível 1.<br>
            section: Estiliza seções da página.<br>
            ul: Define estilos para listas não ordenadas.<br>
            li: Estiliza itens de lista.<br>
            ul li h3: Estiliza títulos de nível 3 dentro dos itens de lista.<br>
            form: Estiliza formulários na página.<br>
            form label: Estiliza etiquetas dentro de formulários.<br>
            form input[type="text"], <br>form input[type="email"],<br> form input[type="password"], form select,<br> form input[type="number"], form <br>input[type="checkbox"]: Estiliza campos de entrada em formulários.<br>
            form button: Estiliza botões em formulários.<br>
            a: Estiliza links.<br>
            a:hover: Estiliza links em estado de hover.<br>
            .btn-voltar: Estiliza um botão de voltar.<br>
            Propriedades CSS:<br>

            Fonte (font-family): Define a fonte do texto.<br>
            Cor de fundo (background-color): Define a cor de fundo de elementos.<br>
            Cor do texto (color): Define a cor do texto.<br>
            Alinhamento de texto (text-align): Define o alinhamento do texto.<br>
            Preenchimento (padding): Define espaçamento interno.<br>
            Margem (margin): Define espaçamento externo.<br>
            Borda (border): Define a borda de elementos.<br>
            Imagem de fundo (background-image): Define uma imagem de fundo.<br>
            Repetição de imagem de fundo (background-repeat): Define como a imagem de fundo deve ser repetida.<br>
            Largura (width): Define a largura de elementos.<br>
            Borda arredondada (border-radius): Define cantos arredondados de elementos.<br>
            Decoração de texto (text-decoration): Define a decoração de texto.<br>
            Transição (transition): Define transições de propriedades CSS.<br>
            Float (float): Define o posicionamento de elementos flutuantes.<br>
            Sombra (box-shadow): Define sombras para elementos.<br>
            Cor de sombra (box-shadow): Define a cor da sombra.<br>
            Outros detalhes:<br>

            Importação de fonte da web (@import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap')).<br>
            Uso de unidades de medida, como px, %, vh.<br>
            Uso de valores para propriedades, como cores em formato hexadecimal, URLs de imagem e valores de fonte.<br><br><br><br><br> Seletores HTML:<br><br><br><br>

              !DOCTYPE html: Declarando o tipo de documento como HTML5.<br>
              html: Abertura da tag HTML.<br>
              head: Início da seção de metadados da página.<br>
              title: Define o título da página exibido na aba do navegador.<br>
              link: Importa uma folha de estilo externa para estilizar a página.<br>
              body: Início da seção de conteúdo visível da página.<br>
              header: Contém o cabeçalho da página, incluindo o título "Entre em Contato".<br>
              section: Exibe informações gerais sobre como entrar em contato com a equipe.<br>
              section: Apresenta um formulário de contato com campos para nome, e-mail e mensagem.<br>
              footer: Apresenta informações adicionais de contato.<br>
              div class="container": Contém duas seções, uma para listar projetos e outra para listar membros da equipe.<br>
              div class="login-container": Contém um formulário de cadastro com campos para e-mail, senha, confirmação de senha, declaração de idade e seleção de gênero.<br>
              footer: Não há informações de contato nesta página.<br>
              h1: Título "Recomendar Série".<br>
              form: Permite ao usuário selecionar um gênero de série e, ao clicar em "Recomendar", gera uma recomendação na página.<br>
            <br></li>
        </ul>
  </div>
<footer>
        <p>Para voltar à página principal, <a href="index.php">clique aqui</a>.</p>
    </footer>
</body>
</html>