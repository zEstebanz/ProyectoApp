<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <!-- CSS -->
    <link rel="stylesheet" href="build/css/appAdmin2.css">
</head>

<body>

    <?php
    include_once __DIR__ . "/../templates/nav.php";
    ?>

    <h1 class="nombre-admin">Administrador</h1>
    <div class="busqueda">
        <form action="formulario-admin">

        </form>
    </div>

    <div class="usuarios-registrados">
        <ul class="citas">
            <?php
            $idCita = 0;
            foreach ($citas as $cita) {
                if ($idCita !== $cita->id) {

            ?>
                    <h3>Usuario</h3>
                    <li>
                        <p>ID: <span><?php echo $cita->id ?></span></p>
                        <p>Nombre: <span><?php echo $cita->nombre ?></span></p>
                        <p>Apellido: <span><?php echo $cita->apellido ?></span></p>
                        <p>Email: <span><?php echo $cita->email ?></span></p>
                        <p>Telefono: <span><?php echo $cita->telefono ?></span></p>
                        <p>Confirmado: <span><?php echo $cita->confirmado ?></span></p>
                        <p>Admin: <span><?php echo $cita->admin ?></span></p>
                        
                    <?php
                    $idCita = $cita->id;
                } //Fin de IF
                    ?>

                    </li>
                <?php } //Fin de Foreach
                ?>
        </ul>
    </div>

</body>

</html>