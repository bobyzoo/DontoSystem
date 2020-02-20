
<?php
require_once __DIR__."/../Page/Cabecalho.php";
?>
<div class="container-fluid">
    <div class="row mt-5">
        <form class="mr-auto text-center ml-auto" method="post" action="../../admin/ajax/ajax.login.php" id="formLogin">
            <h1 class="h3 mb-3 font-weight-normal">Login</h1>
            <label for="login" class="sr-only">Usuário</label>
            <input type="text" id="login" class="form-control" name="login" placeholder="Usuario" required="" autofocus="">
            <label for="senha" class="sr-only">Senha</label>
            <input type="password" id="senha" class="form-control mb-3" placeholder="Senha" name="senha" required="">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
        </form>
    </div>
</div>
<h2 id="errolog">Usuário ou senha errados!</h2>
<footer id="rodape" class="bg-dark" style="width: 100%;bottom: 0;position: absolute">
    <div class="container-fluid ">
        <div class="row">
            <div class="text-center col-12">
                <p>Rua João Jorge Mussi, nº 185 - Carianos - Florianópolis/SC</p>
                <p>Horário de Atendimento:<br>Segunda a Sexta das 8h às 21h</p>
                <p>Telefone: <br>48 3236-0097<br> 48 9xxxx-xxxx <a
                            href="https://api.whatsapp.com/send?phone=5548984036464"
                            style="color: white; text-decoration: none"><i class="fab fa-whatsapp"></i></a></p>
                <p>FORMAS DE PAGAMENTO<br>
                    Boleto bancário, dinheiro ou cheque<br>
                    Aceitamos os seguintes cartões de crédito<br><i class="fab fa-cc-visa" style="font-size: 50px"></i>
                    <i class="fab fa-cc-mastercard" style="font-size: 50px"></i></p>
            </div>
        </div>
    </div>
</footer>
<script>
    $(document).ready(function(){
        $('#errolog').hide(); //Esconde o elemento com id errolog
        $('#formLogin').submit(function(){ 	//Ao submeter formulário
            var login=$('#login').val();	//Pega valor do campo email
            var senha=$('#senha').val();	//Pega valor do campo senha
            $.ajax({                        //Função AJAX
                url:"index.php?m=PageLogin&a=verifica",//Arquivo php
                type:"post",				//Método de envio
                data: "login="+login+"&senha="+senha,	//Dados
                success: function (result){			//Sucesso no AJAX
                    if(result == 1){
                        console.log(result);
                        location.href='index.php?m=PageAdmin&a=ver'//Redireciona
                    }else{
                        console.log(result);
                        $('#errolog').show();//Informa o erro
                    }
                }
            });
            return false;	//Evita que a página seja atualizada
        })
    })
</script>
