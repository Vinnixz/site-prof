<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>Login - Netflix</title>
</head>
<body>
  <div class="login-container">
      <h2>Cadastro</h2>
      <form method="POST" action="processa_cadastro.php">
          <label for="email">Email(site@trabalho.com):</label>
          <input type="email" id="email" name="email" required placeholder="Digite seu email">

          <label for="senha">Senha (senha123):</label>
          <input type="password" id="senha" name="senha" required placeholder="3 primeiros dígitos do CPF">

          <label for="confirmar-senha">Confirme a senha:</label>
          <input type="password" id="confirmar-senha" name="confirmar-senha" required placeholder="Confirme a senha">

          <label for="idade-confirmada";">Declaro que tenho mais de 18 anos:</label>
          <input type="checkbox" id="idade-confirmada" name="idade-confirmada" required>

          <label for="genero">Gênero:</label>
          <select id="genero" name="genero">
              <option value="masculino">Masculino</option>
              <option value="feminino">Feminino</option>
              <option value="outro">Outro</option>
          </select>

          <button type="submit">Cadastrar</button>
      </form>
  </div>
</body>
</html>