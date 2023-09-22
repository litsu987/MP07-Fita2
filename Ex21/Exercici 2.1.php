<?php

$usuarios_validos = [
    'usuario1' => 'contrasenya1',
    'usuario2' => 'contrasenya2',
    'usuario3' => 'contrasenya3'
];

$mensaje = '';
$error_usuario = false;
$error_contrasenya = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $contrasenya = $_POST['contrasenya'];

    if (array_key_exists($usuario, $usuarios_validos) && $usuarios_validos[$usuario] === $contrasenya) {
        $mensaje = 'Login correcto!';
    } else {
        $mensaje = 'Login incorrecto.';
        if (!array_key_exists($usuario, $usuarios_validos)) {
            $error_usuario = true;
        }
        if (array_key_exists($usuario, $usuarios_validos) && $usuarios_validos[$usuario] !== $contrasenya) {
            $error_contrasenya = true;
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Formulario de Login</title>
</head>

<body>
    <h2>Formulario de Login</h2>
    <form method="POST" action="">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <?php if ($error_usuario) echo '<span style="color: red;">Usuario incorrecto.</span>'; ?><br><br>

        <label for="contrasenya">Contraseña:</label>
        <input type="password" id="contrasenya" name="contrasenya" required>
        <?php if ($error_contrasenya) echo '<span style="color: red;">Contraseña incorrecta.</span>'; ?><br><br>

        <input type="submit" value="Iniciar Sesión">
    </form>

    <p><?php echo $mensaje; ?></p>
</body>

</html>
