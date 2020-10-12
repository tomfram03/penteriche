<?php require_once("admin_valid_user.php"); ?>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-12">
      <div class="box-general">
        <?php
        if (isset($_SESSION['msg']))
          echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        ?>
        <div class="card-body">
          <form class="form-horizontal" action="<?php echo URL::getBase(); ?>admin_novo_action" method="post">
            <div class="form-group">
              <label for="exampleInputnome">Nome</label>
              <input type="text" class="form-control" name="nome" placeholder="Digite seu nome">    
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Senha</label>
                <input type="password" class="form-control" name="senha" placeholder="Senha">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Endereço</label>
              <input type="text" class="form-control" name="endereco" placeholder="Rua Olavo Bilac, 1234">
            </div>
            <div class="form-group">
              <label for="inputAddress2">Complemento</label>
              <input type="text" class="form-control" name="complemento" placeholder="Ap, Bl, Andar">
            </div>
            <div class="row">
              <div class="form-group col-md-5">
                <label for="inputCity">Cidade</label>   
                <input type="text" name="cidade" class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">Estado</label>
                <select name="estado" class="form-control">
                  <option selected>Selecione</option>
                  <option value="AC">Acre</option> 
                  <option value="AL">Alagoas</option> 
                  <option value="AM">Amazonas</option> 
                  <option value="AP">Amapá</option> 
                  <option value="BA">Bahia</option> 
                  <option value="CE">Ceará</option> 
                  <option value="DF">Distrito Federal</option> 
                  <option value="ES">Espírito Santo</option> 
                  <option value="GO">Goiás</option> 
                  <option value="MA">Maranhão</option> 
                  <option value="MT">Mato Grosso</option> 
                  <option value="MS">Mato Grosso do Sul</option> 
                  <option value="MG">Minas Gerais</option> 
                  <option value="PA">Pará</option> 
                  <option value="PB">Paraíba</option> 
                  <option value="PR">Paraná</option> 
                  <option value="PE">Pernambuco</option> 
                  <option value="PI">Piauí</option> 
                  <option value="RJ">Rio de Janeiro</option> 
                  <option value="RN">Rio Grande do Norte</option> 
                  <option value="RO">Rondônia</option> 
                  <option value="RS">Rio Grande do Sul</option> 
                  <option value="RR">Roraima</option> 
                  <option value="SC">Santa Catarina</option> 
                  <option value="SE">Sergipe</option> 
                  <option value="SP">São Paulo</option> 
                  <option value="TO">Tocantins</option> 
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="inputZip">CEP</label>
                <input type="text" name="cep" onkeypress="$(this).mask('00.000-000')" class="form-control" >
              </div>
              <div class="form-group col-md-4">
                <label for="niveis_acesso_id">Nível de Acesso</label>
                <select name="niveis_acesso_id" class="form-control">
                  <option selected disabled>-- Selecione --</option>
                  <option value="1">Moderador</option> 
                  <option value="2">Administrativo</option>  
                  <option value="0">Disabilitado</option>  
                </select>
              </div>
            </div>
            <button type="submit" value="Salvar" class="btn btn-thema">Salvar</button>
            <a href="<?php echo URL::getBase(); ?>admin" type="btn" class="btn btn-primary">Voltar</a>
          </form>
        </div>
      </div>
    </div>
  </div>