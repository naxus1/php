<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="//www.independence.com.co/wp-content/uploads/2016/05/32x32.png" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" href="//www.independence.com.co/wp-content/uploads/2016/05/57x57.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="//www.independence.com.co/wp-content/uploads/2016/05/144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="//www.independence.com.co/wp-content/uploads/2016/05/72x72.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="//www.independence.com.co/wp-content/uploads/2016/05/144x144.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div id="menu">
        <ul>
            <li>Home</li>
            <li class="cerrar-sesion">
                <a href="includes/logout.php">Cerrar sesión</a>
            </li>
        </ul>
    </div>

    <section>
        <h1>Hola <?php  $userData = $user->getData(); echo strtolower($userData[0]) ." ". strtolower($userData[1]);?> </h1>
        <h2>
            <?php 
                $nombre = $user->capitalWords($userData[0]);
                $apellido = $user->capitalWords($userData[1]);
                $fullname= $nombre . " " . $apellido;
                $query = $user->GetUserCourses($userData[2]);
                while ($row = $query->fetch())
                {
                    echo "Nombre: {$row["fullname"]} <br>";
                    echo "Ciudad: {$row["note"]} <br><br>";
                    $course = $user->capitalWords($row["fullname"]);
                    echo "<a href='includes/pdf.php?a=$fullname&b=$course' target='_blank'>Enviar variables</a>";
                }

            ?>
        </h2>
    </section>
    
</body>
</html>