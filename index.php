<?php
session_start();
if(isset($_SESSION['usuario'])){
    header("Location: painel.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h2>Login</h2>
        <?php
        if(isset($_GET['erro'])){
            echo "<p style='color:red;' Usuario ou senha invalido </p>";
        }?>
        <form method="POST" action="autenticar.php">
            <label>Usuario:</label>
            <input type="text" name="usuario" required><br><br>
            <label>Senha:</label>
            <input type="password" name="senha" required><br><br>
            <input type="submit" value="Entrar">
        </form>
    </body>
</html>