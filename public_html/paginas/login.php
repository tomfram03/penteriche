<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-8 offset-md-2">

      <div class="box-general">      
        <h1 class="title">Área Administrativa</h1>
        <div class="card-body">
          <p class="text-center text-danger">
            <?php
            if(isset($_SESSION['nao_autenticado'])):
              ?>
            <div class="notification is-danger">
              <!--<p>ERRO: Usuário ou senha inválidos.</p>-->
              <p style="color:red;">Usuário ou senha Inválido.</p>
            </div>
            <?php
            endif;
            unset($_SESSION['nao_autenticado']);
            ?>
          </p>                    
          <form class="form-horizontal" action="<?php echo URL::getBase(); ?>admin_valida" method="POST">                            
            <div class="form-group">
              <label for="email">Digite seu e-mail</label>
              <input name="email" name="text" class="form-control" placeholder="Entre com seu e-mail" autofocus="">
            </div>                            

            <div class="form-group">                                
              <label for="exampleInputPassword1">Senha</label>
              <input name="senha" class="form-control" type="password" placeholder="Senha">                                
            </div>
            <button type="submit" class="btn btn-success" name="btnLogin" value="Login" class="btn btn-thema"><i class="fa fa-check"></i> Acessar</button>

          </form>
        </div>

      </div>
    </div>
  </div>  
</div>