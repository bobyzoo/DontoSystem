<?php
require_once "Cabecalho.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
                 style="background-color: white">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 img" src="img/sala1.PNG" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img" src="img/sala2.PNG" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img" src="img/sala3.PNG" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="margin: 10px 0">
    <div class="row">
        <div class="offset-1 col-2 quadrado-selecao"><i class="fas fa-tooth i-tam"></i><br>
            <p>Implante dentario</p></div>
        <div class="col-2 quadrado-selecao"><i class="fas fa-tooth i-tam"></i><br>
            <p> periodontia</p></div>
        <div class="col-2 quadrado-selecao"><i class="fas fa-tooth i-tam"></i><br>
            <p> clinico geral</p></div>
        <div class="col-2 quadrado-selecao"><i class="fas fa-tooth i-tam"></i><br>
            <p>aparelho odontológico</p></div>
        <div class="col-2 quadrado-selecao"><i class="fas fa-tooth i-tam"></i><br>
            <p>aparelho odontológico</p></div>
    </div>
</div>
<?php
require_once "FormConsulta.php";
require_once "Rodape.php";

