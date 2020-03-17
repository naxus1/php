<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="//www.independence.com.co/wp-content/uploads/2016/05/32x32.png" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" href="//www.independence.com.co/wp-content/uploads/2016/05/57x57.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="//www.independence.com.co/wp-content/uploads/2016/05/144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="//www.independence.com.co/wp-content/uploads/2016/05/72x72.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="//www.independence.com.co/wp-content/uploads/2016/05/144x144.png">
    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="stylesheet" href="../css/style_home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    
    
</head>
<body>

<!-- Navegation -->
<nav class="navegation">
    <div class="nav-wrapper">
    <img class="brand-logo" src="../img/logo_independence.png" alt="logo Independence" width="13%">
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li style="padding-top: 48px;"> <img src="../img/phone-call.png" alt="telefono" width="2%">  &nbsp5875333 Ext. 1907 &nbsp&nbsp <img src="../img/mail.png" alt="telefono" width="2%">  &nbspmesadeayuda@independence.com.co</li>
            <li><a href="includes/logout.php">Cerrar sesión</a></li>
        </ul>
    </div>
</nav>
<!-- End Navegation -->

  <br>
  <br>
  <br>


  <div class="row center-align">
      <div class="col s12">
            <img src="../img/rating.png" alt="Estrellas" width="6%">
            <h6>
                Hola <?php  $userData = $user->getData(); echo $user->capitalWords($userData[0]) ." ". $user->capitalWords($userData[1]);?>
                <br>
                <?php  
                    $query = $user->GetUserCourses($userData[2]);
                    $cuenta_row = $query->rowCount();
                    echo "Tienes " . $cuenta_row . " cursos aprobados."
                ?>
            </h6>
      </div>
  </div>

  <br>  <br>  <br>

<!-- Course list -->
    <div class="row">
        <div class="col s10 push-s1"> 
            <table class="highlight">
                <thead>
                    <tr>
                        <th>Nombre curso</th>
                        <th>Nota Obtenida</th>
                        <th>Descarga</th>
                    </tr>
                </thead>

                <tbody>
                <?php 
                    $nombre = $user->capitalWords($userData[0]);
                    $apellido = $user->capitalWords($userData[1]);
                    $nameStudent= $nombre . " " . $apellido;
                    $query = $user->GetUserCourses($userData[2]);
                    while ($row = $query->fetch())
                    {
                        echo '<tr>';
                        echo "<td> {$user->capitalWords($row["fullname"])} </td>";
                        echo "<td> {$row["note"]} </td>";
                        $course = $user->capitalWords($row["fullname"]);
                        echo "<td> <a href='includes/pdf.php?a=$nameStudent&b=$course' target='_blank'>Descargar Certificado</a> </td>";
                        echo '</tr>';
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
<!-- End Course list -->

<br>
<br>
<br>

<footer class="page-footer">
          <div class="container">
          </div>
          <div class="footer-copyright">
            <div class="container">
            Derechos Reservados - Independence Drilling S.A.
            </div>
          </div>
        </footer>


    <script src="../js/materialize.min.js"></script>
</body>
</html>