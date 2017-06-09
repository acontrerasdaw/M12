<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="../css/stil.css">
</head>
<body>
<div class="superfondo2">
 <div class="Cabecera">
                <div class="titulo">
                    <a href="../index.php" class="noticia"><h1>Training Book-Self</h1></a>
                </div>
                <div class="logo">
                    <IMG SRC="../img/logo.png" alt="Logo Mugendo"/>
                </div>
            </div>
            <div class="Menu">
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="./reserva.php">Reserva</a></li>
                    <li><a href="./login.php">Login</a></li>
                    <li><a href="./contacto.php">Contacto</a></li>
                </ul>
            </div>
<div class="login">
    <form action="login2.php" method="POST"> 
    <fieldset>
    <legend>Login</legend>
		<table>
		<tr>
        <td><label for="nom">Nom</label></td><td><input type="text" name="nom" id="nom" value="" /></td>
        </tr>
        <tr>
        <td><label for="pass">Password</label></td><td><input type="password" name="pass" id="pass" value="" /></td>
        </tr>
        <tr class="trboton">
        <td colspan='2' class="enviar"><input type="submit" value="Entrar" name="entrar" /></td>
        </tr>
        </table>
    </fieldset>
    </form>
</div>




     <footer>
                Copyright reserved to Training Book-Self&copy;
     </footer>
     </div>
</body>
</html>
