<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Import CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          crossorigin="anonymous">
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./lib/css/estilo.css">
    <link rel="stylesheet" href="./lib/fontawesome/css/all.css">


    <!-- Import JS  -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css"/>
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>


    <title>Consultorio</title>

</head>
<body style="padding-top: 4rem">
<!--navbar navbar-expand-md navbar-dark fixed-top bg-dark-->


<header>
    <ul class="nav  navbar-expand-md  menu fixed-top justify-content-center col-8 offset-2" id="menu">
        <!--        <img src="img/logo1.png">-->
        <li class="nav-item">
            <div>
                <a class="nav-link active" href="<?= URL_BASE ?>">HOME</a>
            </div>
        </li>
        <li class="nav-item">
            <div>
                <a class="nav-link active" href="<?= URL_BASE ?>/profissionais">PROFISSIONAIS</a>
            </div>
        </li>
        <li class="nav-item">
            <div>
                <a class="nav-link active" href="<?= URL_BASE ?>/convenio">Convênio</a>
            </div>
        </li>
        <li class="nav-item mr-auto">
            <div>
                <a class="nav-link active" href="<?= URL_BASE ?>/contato">CONTATO</a>
            </div>
        </li>

        <ul style="list-style: none">
            <li class="nav-item ">
                <div>
                    <a class="nav-link active" href="<?= URL_BASE?>/login">ENTRAR</a>
                </div>
            </li>
        </ul>
    </ul>
</header>