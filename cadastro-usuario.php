<section class="container container-interno">
   <div class="box first">
      <form class="row" action="?pagina=cadastrausuario" method="post" name="form1">
         <div class="col-lg-6 col-lg-offset-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center">
                     <h2>Cadastre-se</h2>
                    </div>
                    <div class="clearfix"></div>

                    <label>Nome*</label>
                    <input type="text" class="form-control" name="nome" required>
                </div>  
            </div>  

            <div class="row">
                <div class="col-lg-6">
                    <label>E-mail*</label>
                    <input type="text" class="form-control" name="email" required >
                </div>  

                <div class="col-lg-6">
                    <label>Senha*</label>
                    <input type="password" class="form-control" name="senha" required>
                </div>  
            </div>  

             <div class="row">
                <div class="col-lg-6">
                    <label>CPF</label>
                    <input type="text" maxlength="14" class="form-control" name="cpf" onKeyPress="formatar('###.###.###-##', this);" >
                </div>  

                <div class="col-lg-6">
                    <label>Data de nascimento</label>
                    <input type="text" class="form-control" name="datanascimento" maxlength="10" OnKeyPress="formatar('##/##/####', this);">
                </div>  
                </div>  

            <div class="row" style="margin-top:20px;">
                <div class="col-lg-12 text-right">
                    <input type="submit" class="btn btn-primary btn-block" value="Cadastrar">
                </div>
            </div>  
        </div>  
      </form>
   </div>
</section>