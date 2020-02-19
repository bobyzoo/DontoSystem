<!--    FORMULARIO-->

<div class="container-fluid "  style="margin: 10px 0px">
    <div class="row ">
        <form class="col-6 offset-3 " id="formulario" style="padding-top: 20px">
            <div class="row">
                <div class="text-center col-12 mb-3">
                    <h3 id="form-title" class="pb-3">
                        MARQUE SUA CONSULTA
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label>
                        NOME COMPLETO *
                    </label>
                    <input type="text" class="form-control" id="nome" required>
                </div>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">E-mail *</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label>
                        HORÁRIO *
                    </label>
                    <select class="form-control select-horario" required>
                        <option>
                            Sem prefêrencia de horário
                        </option>
                        <option>
                            Início da manhã
                        </option>
                        <option>
                            Final da manhã
                        </option>
                        <option>
                            Inicío da tarde
                        </option>
                        <option>
                            Final da tarde
                        </option>
                        <option>
                            O mais rápido possivel
                        </option>
                    </select>
                </div>
                <div class="form-group col-3">
                    <label>
                        TELEFONE / CELULAR *
                    </label>
                    <input type="tel" class="form-control" pattern="^[0-9\-\+\s\(\)]*$" placeholder="(00) 0000-0000"
                           name="telefone" id="telefone">
                </div>
                <div class="form-group col-3">
                    <label>
                        DATA *
                    </label>
                    <input type="text" class="form-control" id="calendario" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label>
                        CONVÊNIO *
                    </label>
                    <select class="form-control select-horario " id="convenio" required>
                        <option>
                            PARTICULAR
                        </option>
                        <option>
                            UNIMED
                        </option>
                        <option>
                            SCSAUDE
                        </option>
                        <option>
                            AGMED
                        </option>
                        <option>
                            SUL AMÉRICA
                        </option>
                        <option>
                            HDI
                        </option>
                    </select>
                </div>
                <div class="form-group col-6">
                    <label>
                        HORÁRIO *
                    </label>
                    <select class="form-control select-horario " required>
                        <option>
                            Sem prefêrencia de horário
                        </option>
                        <option>
                            Início da manhã
                        </option>
                        <option>
                            Final da manhã
                        </option>
                        <option>
                            Inicío da tarde
                        </option>
                        <option>
                            Final da tarde
                        </option>
                        <option>
                            O mais rápido possivel
                        </option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="">
                        TIPO DE ATENDIMENTO *
                    </label>
                    <select class="form-control select-horario " id="convenio" required>
                        <option>
                            PARTICULAR
                        </option>
                        <option>
                            UNIMED
                        </option>
                        <option>
                            SCSAUDE
                        </option>
                        <option>
                            AGMED
                        </option>
                        <option>
                            SUL AMÉRICA
                        </option>
                        <option>
                            HDI
                        </option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group ml-auto mr-5">
                    <div class="btn btn-lg " id="btn-enviar"> Marcar</div>
                </div>
            </div>
        </form>
    </div>
</div>
