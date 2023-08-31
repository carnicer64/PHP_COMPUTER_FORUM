<?php
include("header.php");
require_once("../controller/userController2.php");
?>
<body>
<h2>Iniciar Sesion</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <?php
    if (isset($_GET["errorLogin"])){?>
        <div class="alert alert-primary" role="alert">
            Ha habido un error en el login
        </div>
        <?php
    }
    ?>
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required <?php echo (isset($_POST["username"]) ? 'value="'.$_POST["username"].'"' : ''); ?>><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br>
    <input type="submit" name="login" value="Login">
</form>

<p>¿Aún no estás registrado? <a class="log-reg" href="register.php">Registrarse</a></p>
</body>
</html>