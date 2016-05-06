
<section class="container container-interno">
   <div class="box first">
      <form class="row" action="?pagina=atualizadados" method="post">
         <div class="col-lg-6 col-lg-offset-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center">
                     <h2>Cadastro de Evento</h2>
                    </div>
                    <div class="clearfix"></div>

<form action="Cadastro_Evento.php" method="post">

<!-- CADASTRO DE EVENTOS-->
<fieldset>
 <table cellspacing="10">
  <tr>
   <td>
       <p>
    <label for="nome">Título do evento: </label>
    <input type="text" name="Nome do Evento">
       </p>
   </td>
  </tr>
  <tr>
   <td>
       <p>
    <label for="cidade_estado">Cidade: </label>
    <input type="text" name="cidade">
       </p>
   </td>
      </tr>
     <tr>
   <td>
       <p>
    <label for="cidade_estado">Estado: </label>
   <input type="text" name="estado">
       </p>
   </td>
      </tr>
     <tr>
   <td>
       <p>
    <label for="cidade_estado">Endereço: </label>
     <input type="text" name="endereço">
       </p>
   </td>
  </tr>
    
  <tr>
   <td>
    <label>Data do evento: </label>
    <input type="text" name="dia" size="2" maxlength="2" placeholder="dia"> 
   <input type="text" name="mes" size="2" maxlength="2" placeholder="mês"> 
   <input type="text" name="ano" size="4" maxlength="4" placeholder="ano">
   </td>
   </tr>
   <tr>
     <td colspan=4 style="text-align: center">
               <!--//<input type="submit" value="Enviar" />-->
       <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
       </td>
   </tr>
 </table>
</fieldset>
    </form>
            </div>
                </div>
             </div>
                    </form>
      
   </div>
</section>