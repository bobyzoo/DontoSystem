<!--    FORMULARIO-->

<div class="container-fluid " style="margin: 10px 0px">
    <div class="row ">
        <form class="col-6 offset-3" method="post" action="../../ajax/enviaEmail.php" id="formulario" style="padding-top: 20px">
            <div class="row">
                <div class="text-center col-12 mb-3">
                    <h3 id="form-title" class="pb-3">
                        FALE CONOSCO
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label>
                        NOME COMPLETO *
                    </label>
                    <input type="text" name="nome" class="form-control" id="nome" required>
                </div>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">E-mail *</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label>
                        ASSUNTO
                    </label>
                    <input name="assunto" type="text" class="form-control" id="nome" required>
                </div>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">TELEFONE</label>
                    <input type="email" class="form-control" name="telefone" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12">
                    <label>
                        MENSAGEM
                    </label>
                    <textarea class="form-control" name="mensagem"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group ml-auto mr-5">
                    <div class="btn " id="btn-contato">ENVIAR</div>
                </div>
            </div>
        </form>

    </div>
</div>
