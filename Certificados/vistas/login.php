<!doctype HTML>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="//www.independence.com.co/wp-content/uploads/2016/05/32x32.png" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" href="//www.independence.com.co/wp-content/uploads/2016/05/57x57.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="//www.independence.com.co/wp-content/uploads/2016/05/144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="//www.independence.com.co/wp-content/uploads/2016/05/72x72.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="//www.independence.com.co/wp-content/uploads/2016/05/144x144.png">

    <meta content="width=device-width,initial-scale=1" name="viewport">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/material.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link href="fonts/fontello/css/fontello.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/bootstrap-offset-right.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Descarga tu Certificado</title>
    <style>
        .mdl-textfield__label {
            margin-bottom: 0;
            color: #d7dbdc;
            font-weight: normal;
        }
        
        .mdl-textfield--floating-label.is-focused .mdl-textfield__label,
        .mdl-textfield--floating-label.is-dirty .mdl-textfield__label {
            text-transform: uppercase
        }
        
        .has-feedback label~.form-control-feedback {
            top: 15px;
        }
        
        .mdl-textfield {
            width: 100%;
        }
        
        .mdl-checkbox__label {
            cursor: text;
            font-size: 13px;
            float: left;
            color: #b0b3b4;
            font-weight: normal;
        }
        
        .mdl-checkbox__box-outline {
            border: 1px solid #b0b3b4;
        }
        
        .mdl-textfield__input {
            border: none;
            border-bottom: 1px solid rgba(0, 0, 0, .12);
            display: block;
            font-size: 16px;
            margin: 0;
            padding: 4px 0;
            width: 100%;
            background: 0 0;
            text-align: left;
            color: inherit;
            font-weight: bold;
        }
        
        .mdl-switch__label {
            float: left;
            font-weight: normal;
            color: #b0b3b4;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="center-block">
            <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-12 col-xs-12 no-padding" style="z-index:1">
                <!-- Slider -->

                <div class="mlt-carousel">
                    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img class="img-responsive center-block" src="img/EscuExcelencia.png" alt="step1">
                                <div class="item-content">
                                    <h3>Certificado de aprobación</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--mlt-carousel-->
                </div>
                <!-- Slider -->
            </div>
            <!-- Login -->

            <div class="col-lg-6 col-lg-offset-right-1 col-md-6 col-md-offset-right-1 col-sm-12 col-xs-12 no-padding">
                <div class="mlt-content">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#register" data-toggle="tab">Ingreso</a></li>
                    </ul>
                    <br>
                    <br>
                    <br>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade in active" id="register">
                            <!--Login form-->
                            <form method="POST" form data-feedback='{"success": "fa-check", "error": "fa-times"}'>
                                <form>
                                    <div class="col-lg-10 col-lg-offset-1 col-lg-offset-right-1 col-md-10 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right ">                                           
                                        <p class="error-cedula">
                                            <?php
                                            if(isset($errorLogin))
                                                {
                                                    echo $errorLogin;
                                                }
                                            ?>
                                        </p>
                                    </div>
                                    <br><br><br><br>    
                                    <div class="col-lg-10 col-lg-offset-1 col-lg-offset-right-1 col-md-10 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right ">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" name="username" id="username">
                                            <label class="mdl-textfield__label" for="username">Digita tu cédula</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-10 col-lg-offset-1 col-lg-offset-right-1 col-md-10 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right ">
                                        <button class="btn lt-register-btn">Ingresar <i class="icon-right "></i></button>
                                    </div>
                                </form>
                            </form>
                            <!--Login form-->
                        </div>

                    </div>
                </div>
                <!--Login-->
            </div>
            <!--center-block-->
        </div>
        <!--container-->
    </div>

    <script src="node_modules/jquery/dist/jquery.min.js "></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js "></script>
    <script src="libs/mdl/material.min.js "></script>
    <script src="../js/validate.min.js"></script>

</body>
</html>


