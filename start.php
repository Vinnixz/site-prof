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
      .netflix {
        width: 600px;
        height: 400px;
      }
        
    </style>
</head>
<body>
    <img class='netflix' src="imagem/netflix.jpg" alt="LOGO NETFLIX">
    <form method="post" action="recomendar.php">
    

        <button id="start-button" type="submit">Start</button>
    </form>
</body>
</html>
