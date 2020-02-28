<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
               $query = $user->GetUserCourses($userData[2]);
               while ($row = $query->fetch())
               {
                   echo "Nombre: {$row["fullname"]} <br>";
                   echo "Ciudad: {$row["note"]} <br><br>";
            ?>
                <a href="url">link text</a>
            <?php
               }
            ?>
            ?>
        </h2>
    </section>
    
</body>
</html>
