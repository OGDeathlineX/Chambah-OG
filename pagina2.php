<?php
$nom = $_POST['usuario'];
$contrasena = $_POST['contrasoleano'];
$contrasena = md5($contrasena);
?>

<html>
    <body>
        <table>
            <tr>
                Su usuario es: <?php echo $nom?>
            </tr>
            <tr>
                Su contraseña es: <?php echo $contrasena?>
            </tr>
        </table>
    </body>
</html>
