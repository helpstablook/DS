<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form1 com php</title>
</head>
<body>
    <h1>Login de usuário</h1>
    <form action="resultado1.php" method="POST">
        <h3>Usuário:
            <input type="text" name="usuario" required/>
        </h3>
        <h3>E-mail:
            <input type="email" name="email" required/>
        </h3>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>