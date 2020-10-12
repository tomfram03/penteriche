<?php require_once("admin_valid_user.php"); ?>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-12">

      <div class="box-general">

        <?php		
        $pesquisar = $_POST ['pesquisar'];
		        //echo $pesquisar;
        $result_clientes = "SELECT * FROM clientes WHERE nome LIKE '%$pesquisar%' LIMIT 1";
        $resultado_clientes = mysqli_query($conn, $result_clientes);					
        ?>      

        <?php if ($resultado_clientes->num_rows === 0){echo "<p style='color: red;'>Não foi encontrado nenhum resultado.</p>";} ?>


        <?php while($rows_cursos = mysqli_fetch_array($resultado_clientes)) { ?>
        <form class="form-horizontal" method="post" action="<?php echo URL::getBase(); ?>clientes_editar_action">
          <button type="submit" class="btn btn-thema"><i class="fa fa-check"></i> Salvar</button>
          <a href="<?php echo URL::getBase(); ?>clientes" class="btn btn-primary">Voltar</a>
          <h1 class="title">Cliente: <?php echo $rows_cursos['nome'];?> - #<?php echo $rows_cursos['id_clientes'];?></h1>
          <input type="hidden" class="form-control" name="id_clientes" value="<?php echo $rows_cursos['id_clientes'];?>"/>
          <div class="control-group ">
            <div class="row">
              <div class="form-group col-md-9">
                <label for="control-label">Nome Completo</label>
                <input type="text" class="form-control" name="nome" value="<?php echo $rows_cursos['nome'];?>"/>

              </div>
              <div class="form-group col-md-6">
                <label for="control-label">Endereço</label>
                <input type="text" class="form-control" name="endereco" id="endereco" value="<?php echo $rows_cursos['endereco'];?>">
              </div>
              <div class="form-group col-md-3">
                <label for="control-label">Cidade</label>
                <input type="text" class="form-control" name="cidade" id="cidade" value="<?php echo $rows_cursos['cidade'];?>">
              </div>



              <div class="form-group col-md-3">
                <label for="inputZip">CEP</label>
                <input type="text" class="form-control cep-mask" name="cep" value="<?php echo $rows_cursos['cep'];?>">
              </div>
              <div class="form-group col-md-3">
                <label for="control-label">Bairro</label>
                <input type="bairro" class="form-control" name="bairro" id="bairro" placeholder="Bairro">    
              </div>
              <div class="form-group col-md-3">
                <label for="control-label">Telefone Residencial</label>
                <input type="telefone" class="form-control" id="telefone" name="telefone" value="<?php echo $rows_cursos['telefone'];?>">
              </div>
              <div class="form-group col-md-3">
                <label for="control-label">Celular</label>
                <input type="celular" class="form-control" name="celular" onkeypress="$(this).mask('(00) 00000-0000')" id="celular" value="<?php echo $rows_cursos['celular'];?>">    
              </div>
              <div class="form-group col-md-3">
                <label for="date">Data de Nascimento</label>
                <input type="date_nasc" class="form-control" name="data_nasc" id="date_nasc" value="<?php echo $rows_cursos['data_nasc'];?>">    
              </div> 

            </div>                                                            
            <div class="control-group ">                
              <div class="row">
                <div class="form-group col-md-3">
                  <label for="control-label">Profissão</label>
                  <input type="profissao" class="form-control" name="profissao" id="profissao" value="<?php echo $rows_cursos['profissao'];?>">
                </div>
                <div class="form-group col-md-2">
                  <label for="control-label">Etnia</label>
                  <input type="etnia" class="form-control" name="etnia" id="etnia" value="<?php echo $rows_cursos['etnia'];?>">
                </div>
                <div class="form-group col-md-4">
                  <label for="control-label">E-mail</label>
                  <input type="email" class="form-control" name="email" id="email" value="<?php echo $rows_cursos['email'];?>">
                </div>
                <div class="form-group col-md-2">
                  <label for="estadoCivil">Estado Civil</label>
                  <select name="est_civil" id="est_civil" class="form-control" >
                    <option ><?php echo $rows_cursos['est_civil'];?></option>       
                    <option value="Solteriro">Solteiro(a)</option> 
                    <option value="Casado">Casado(a)</option> 
                    <option value="Viúvo">Viúvo(a)</option> 
                    <option value="Divorciado">Divorciado(a)</option>
                    <option value="Separado">Separado(a)</option>
                  </select>
                </div>
                <div class="form-group col-md-1">
                  <label for="sexo">Sexo</label>
                  <select name="sexo" id="sexo" class="form-control">
                    <option ><?php echo $rows_cursos['sexo'];?></option>       
                    <option value="M">M</option> 
                    <option value="F">F</option> 
                    <option value="Outros">Outros</option>                           
                  </select>
                </div>
                <div class="form-group col-md-12">
                  <label for="control-label">Motivo da Visita</label>
                  <input type="motivoDaVisita" class="form-control" name="motivoDaVisita" id="motivoDaVisita" value="<?php echo $rows_cursos['motivoDaVisita'];?>">
                </div>            
                <div clas="span10 offset1">
                  <h2 class="sub-title">Em caso de emergência avisar</h2>
                  <div class="control-group ">                
                    <div class="row">                
                      <div class="form-group col-md-9">
                        <label for="control-label">Nome Completo</label>
                        <input type="nome" class="form-control" id="nome_emerg" name="nome_emerg" value="<?php echo $rows_cursos['nome_emerg'];?>">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="control-label">Telefone</label>
                        <input type="telefone" class="form-control" name="tel_emerg" value="<?php echo $rows_cursos['tel_emerg'];?>">
                      </div>
                      <div class="form-group col-md-9">
                        <label for="control-label">Médico</label>
                        <input type="medico" class="form-control" id="med_emerg" name="med_emerg" value="<?php echo $rows_cursos['med_emerg'];?>">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="control-label">Telefone</label>
                        <input type="telefone" class="form-control" id="tel_med_emerg" name="tel_med_emerg" pvalue="<?php echo $rows_cursos['tel_med_emerg'];?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="control-label">Convênio Médico</label>
                        <input type="convenio" class="form-control" id="conv_med" name="conv_med" value="<?php echo $rows_cursos['conv_med'];?>">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="control-label">Carteira</label>
                        <input type="carteira" class="form-control" id="cart_med_emerg" name="cart_med_emerg" value="<?php echo $rows_cursos['cart_med_emerg'];?>">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="control-label">Hospital</label>
                        <input type="hospital" class="form-control" id="hosp_emerg" name="hosp_emerg" value="<?php echo $rows_cursos['hosp_emerg'];?>">    
                      </div>

                    </div><!-- row" -->     
                    <div clas="span10 offset1" >                          
                      <h2 class="sub-title">Histórico</h2>

                      <div class="control-group ">                
                        <div class="row">                
                          <div class="form-group col-md-5">
                            <label for="control-label" class="label-checkbox">Costuma permanecer muito tempo sentada(o)?</label>                                                                                     
                          </div>
                          <div class="label-checkbox">                       
                            <select id="his1" name="his1" class="form-control">
                              <option ><?php echo $rows_cursos['his1'];?></option>
                              <option value="Não">Não</option>       
                              <option value="Sim">Sim</option>                                                                               
                            </select>
                          </div>                                                                                          
                        </div>      
                        <div class="control-group ">                
                          <div class="row">                
                            <div class="form-group col-md-5">
                              <label for="control-label" class="label-checkbox">Antecedentes cirúrgicos?</label>                                                                                     
                            </div>
                            <div class="label-checkbox">                       
                              <select id="his2" name="his2" class="form-control">
                                <option ><?php echo $rows_cursos['his2'];?></option>
                                <option value="Não">Não</option>       
                                <option value="Sim">Sim</option>                                                                               
                              </select>
                            </div>
                            <div class="control-label">
                              <label for="control-label" class="label-checkbox">Quais?</label>                                                                                     
                            </div>
                            <div class="form-group col-md-4">                      
                              <input type="telefone" class="form-control" name="resp_his2" id="telefoneMedico" value="<?php echo $rows_cursos['resp_his2'];?>">
                            </div>
                            <div class="form-group col-md-5">
                              <label for="control-label" class="label-checkbox">Tratamento estético anterior?</label>                                                                                     
                            </div>
                            <div class="label-checkbox">
                              <select id="his3" name="his3" class="form-control">
                                <option ><?php echo $rows_cursos['his3'];?></option>  
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>                                                                               
                              </select>
                            </div>
                            <div class="control-label">
                              <label for="control-label" class="label-checkbox">Qual?</label>                                                                                     
                            </div>
                            <div class="form-group col-md-4">                      
                              <input type="telefone" class="form-control" name="resp_his3" id="telefoneMedico" value="<?php echo $rows_cursos['resp_his3'];?>">
                            </div>
                            <div class="form-group col-md-5">
                              <label for="control-label"  class="label-checkbox">Funcionamento instestinal regular?</label>                                                                                     
                            </div>
                            <div class="label-checkbox">
                              <select id="his4" name="his4" class="form-control">
                                <option ><?php echo $rows_cursos['his4'];?></option>
                                <option value="Não">Não</option>       
                                <option value="Sim">Sim</option>                                                           
                              </select>
                            </div>
                            <div class="label-checkbox">
                              <label for="control-label"  class="label-checkbox">Obs.:</label>                                                                                     
                            </div>
                            <div class="form-group col-md-4">                      
                              <input type="telefone" class="form-control" name="resp_his4" id="telefoneMedico" value="<?php echo $rows_cursos['resp_his4'];?>">
                            </div>
                            <div class="form-group col-md-5">
                              <label for="control-label" class="label-checkbox">Pratica atividade física?</label>                                                                                     
                            </div>
                            <div class="label-checkbox">
                              <select id="his5" name="his5" class="form-control">
                                <option ><?php echo $rows_cursos['his5'];?></option>
                                <option value="Não">Não</option>       
                                <option value="Sim">Sim</option>                                                                             
                              </select>
                            </div>
                            <div class="control-label">
                              <label for="control-label" class="label-checkbox">Quais?</label>                                                                                     
                            </div>
                            <div class="form-group col-md-4">                      
                              <input type="telefone" class="form-control" name="resp_his5" id="telefoneMedico" value="<?php echo $rows_cursos['resp_his5'];?>">
                            </div>
                            <div class="form-group col-md-5">
                              <label for="control-label" class="label-checkbox">É fumante?</label>                                                                                     
                            </div>
                            <div class="label-checkbox">
                              <select id="his6" name="his6" class="form-control">
                                <option ><?php echo $rows_cursos['his6'];?></option>
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>                           
                              </select>
                            </div>
                            <div class="control-label">
                              <label for="control-label" class="label-checkbox">O quê?</label>                                                                                     
                            </div>
                            <div class="form-group col-md-4">                      
                              <input type="telefone" class="form-control" name="resp_his6" value="<?php echo $rows_cursos['resp_his6'];?>">
                            </div>
                            <div class="form-group col-md-5">
                              <label for="control-label" name="resp_his9" class="label-checkbox">Alimentação balanceada?</label>                                                                                     
                            </div>
                            <div class="label-checkbox">
                              <select id="his7" name="his7" class="form-control">
                                <option ><?php echo $rows_cursos['his7'];?></option>
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>                           
                              </select>
                            </div>
                            <div class="control-label">
                              <label for="control-label" class="label-checkbox">Tipo?</label>                                                                                     
                            </div>
                            <div class="form-group col-md-4">                      
                              <input type="telefone" class="form-control" name="resp_his7" id="telefoneMedico" value="<?php echo $rows_cursos['resp_his7'];?>">
                            </div>
                            <div class="form-group col-md-5">
                              <label for="control-label" class="label-checkbox">Ingere líquidos com frequência?</label>                                                                                     
                            </div>
                            <div class="label-checkbox">
                              <select id="his8" name="his8" class="form-control">
                                <option ><?php echo $rows_cursos['his8'];?></option>
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>                           
                              </select>
                            </div>
                            <div class="control-label">
                              <label for="control-label" class="label-checkbox">Quais?</label>                                                                                     
                            </div>
                            <div class="form-group col-md-4">                      
                              <input type="telefone" class="form-control" name="resp_his8" id="telefoneMedico" value="<?php echo $rows_cursos['resp_his8'];?>">
                            </div>
                            <div class="form-group col-md-5">
                              <label for="control-label" class="label-checkbox">É gestante?</label>                                                                                     
                            </div>
                            <div class="label-checkbox">
                              <select id="his9" name="his9" class="form-control">
                                <option ><?php echo $rows_cursos['his9'];?></option>
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>                           
                              </select>
                            </div>
                            <div class="control-label">
                              <label for="control-label" class="label-checkbox">Quais?</label>                                                                                     
                            </div>
                            <div class="form-group col-md-4">                      
                              <input type="telefone" class="form-control" name="resp_his9" id="telefoneMedico" value="<?php echo $rows_cursos['resp_his9'];?>">
                            </div>
                            <div class="form-group col-md-5">
                              <label for="control-label" class="label-checkbox">Tem algum problema ortopédico?</label>                                                                                     
                            </div>
                            <div class="label-checkbox">
                              <select id="his10" name="his10" class="form-control">
                                <option ><?php echo $rows_cursos['his10'];?></option>
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>                           
                              </select>
                            </div>
                            <div class="control-label">
                              <label for="control-label" class="label-checkbox">Quais?</label>                                                                                     
                            </div>
                            <div class="form-group col-md-4">                      
                              <input type="telefone" class="form-control" name="resp_his10" id="telefoneMedico" value="<?php echo $rows_cursos['resp_his10'];?>">
                            </div>
                            <div class="form-group col-md-5">
                              <label for="control-label" class="label-checkbox">Faz algum tratamento médico?</label>                                                                                     
                            </div>
                            <div class="label-checkbox">
                              <select id="his11" name="his11" class="form-control">
                                <option ><?php echo $rows_cursos['his11'];?></option>
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>                           
                              </select>
                            </div>
                            <div class="control-label">
                              <label for="control-label" class="label-checkbox">Quais?</label>                                                                                     
                            </div>
                            <div class="form-group col-md-4">                      
                              <input type="telefone" class="form-control" name="resp_his11" id="telefoneMedico" value="<?php echo $rows_cursos['resp_his11'];?>">
                            </div>
                            <div class="form-group col-md-5">
                              <label for="control-label" class="label-checkbox">Usa ou já usou ácidos na pele?</label>                                                                                     
                            </div>
                            <div class="label-checkbox">
                              <select id="his12" name="his12" class="form-control">
                                <option ><?php echo $rows_cursos['his12'];?></option>
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>                          
                              </select>
                            </div>
                            <div class="control-label">
                              <label for="control-label" class="label-checkbox">Quais?</label>                                                                                     
                            </div>
                            <div class="form-group col-md-4">                      
                              <input type="telefone" class="form-control" name="resp_his12" id="telefoneMedico" value="<?php echo $rows_cursos['resp_his12'];?>">
                            </div>
                            <div class="form-group col-md-5">
                              <label for="control-label" class="label-checkbox">Já fez algum tratamento ortomolecular?</label>                                                                                     
                            </div>
                            <div class="label-checkbox">
                              <select id="his13" name="his13" class="form-control">
                                <option ><?php echo $rows_cursos['his13'];?></option>
                                <option value="Não">Não</option>       
                                <option value="Sim">Sim</option>                           
                              </select>
                            </div>
                            <div class="control-label">
                              <label for="control-label" class="label-checkbox">Quais?</label>                                                                                     
                            </div>
                            <div class="form-group col-md-4">                      
                              <input type="telefone" class="form-control" name="resp_his13" id="telefoneMedico" value="<?php echo $rows_cursos['resp_his13'];?>">
                            </div>
                            <div class="form-group col-md-5">
                              <label for="control-label" class="label-checkbox">Cuidados diários e produtos em uso:</label>                                                                                     
                            </div>
                            <div class="label-checkbox">
                              <select id="his14" name="his14" class="form-control">
                                <option ><?php echo $rows_cursos['his14'];?></option>
                                <option value="Não">Não</option>       
                                <option value="Sim">Sim</option>                           
                              </select>
                            </div>
                            <div class="control-label">
                              <label for="control-label" class="label-checkbox">Quais?</label>                                                                                     
                            </div>
                            <div class="form-group col-md-4">                      
                              <input type="telefone" class="form-control" name="resp_his14" id="telefoneMedico" value="<?php echo $rows_cursos['resp_his14'];?>">
                            </div>
                            <div class="form-group col-md-5">
                              <label for="control-label" class="label-checkbox">Portador de marcapasso?</label>                                                                                     
                            </div>
                            <div class="label-checkbox">
                              <select id="his15" name="his15" class="form-control">
                                <option ><?php echo $rows_cursos['his15'];?></option>
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>                           
                              </select>
                            </div>
                            <div class="control-label">
                              <label for="control-label" class="label-checkbox">Quais?</label>                                                                                     
                            </div>
                            <div class="form-group col-md-4">                      
                              <input type="telefone" class="form-control" name="resp_his15" id="telefoneMedico" value="<?php echo $rows_cursos['resp_his15'];?>">
                            </div>
                            <div class="form-group col-md-5">
                              <label for="control-label" class="label-checkbox">Presença de metais?</label>                                                                                     
                            </div>
                            <div class="label-checkbox">
                              <select id="his16" name="his16" class="form-control">
                                <option ><?php echo $rows_cursos['his16'];?></option>
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>                           
                              </select>
                            </div>
                            <div class="control-label">
                              <label for="control-label" class="label-checkbox">Quais?</label>                                                                                     
                            </div>
                            <div class="form-group col-md-4">                      
                              <input type="telefone" class="form-control" name="resp_his16" id="telefoneMedico" value="<?php echo $rows_cursos['resp_his16'];?>">
                            </div>
                            <div class="form-group col-md-5">
                              <label for="control-label" class="label-checkbox">Antecedentes oncológicos?</label>                                                                                     
                            </div>
                            <div class="label-checkbox">
                              <select id="his17" name="his17" class="form-control">
                                <option ><?php echo $rows_cursos['his17'];?></option> 
                                <option value="Não">Não</option>     
                                <option value="Sim">Sim</option>                           
                              </select>
                            </div>
                            <div class="control-label">
                              <label for="control-label" class="label-checkbox">Quais?</label>                                                                                     
                            </div>
                            <div class="form-group col-md-4">                      
                              <input type="telefone" class="form-control" name="resp_his17" id="telefoneMedico" value="<?php echo $rows_cursos['resp_his17'];?>">
                            </div>
                            <div class="form-group col-md-5">
                              <label for="control-label" class="label-checkbox">Ciclo menstrual regular?</label>                                                                                     
                            </div>
                            <div class="label-checkbox">
                              <select id="his18" name="his18" class="form-control">
                                <option ><?php echo $rows_cursos['his18'];?></option>
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>                           
                              </select>
                            </div>
                            <div class="control-label">
                              <label for="control-label" class="label-checkbox">Quais?</label>                                                                                     
                            </div>
                            <div class="form-group col-md-4">                      
                              <input type="telefone" class="form-control" name="resp_his18" id="telefoneMedico" value="<?php echo $rows_cursos['resp_his18'];?>">
                            </div>
                            <div class="form-group col-md-5">
                              <label for="control-label" class="label-checkbox">Usa método anticoncepicional?</label>                                                                                     
                            </div>
                            <div class="label-checkbox">
                              <select id="his19" name="his19" class="form-control">
                                <option ><?php echo $rows_cursos['his19'];?></option>
                                <option value="Não">Não</option>      
                                <option value="Sim">Sim</option>                           
                              </select>
                            </div>
                            <div class="control-label">
                              <label for="control-label" class="label-checkbox">Quais?</label>                                                                                     
                            </div>
                            <div class="form-group col-md-4">                      
                              <input type="telefone" class="form-control" name="resp_his19" id="telefoneMedico" value="<?php echo $rows_cursos['resp_his19'];?>">
                            </div>
                            <div class="form-group col-md-5">
                              <label for="control-label" class="label-checkbox">Varizes?</label>                                                                                     
                            </div>
                            <div class="label-checkbox">
                              <select id="his20" name="his20" class="form-control">
                                <option ><?php echo $rows_cursos['his20'];?></option>
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>                          
                              </select>
                            </div>
                            <div class="control-label">
                              <label for="control-label" class="label-checkbox">Quais?</label>                                                                                     
                            </div>
                            <div class="form-group col-md-4">                      
                              <input type="telefone" class="form-control" name="resp_his20" id="telefoneMedico" value="<?php echo $rows_cursos['resp_his20'];?>">
                            </div>
                            <div class="form-group col-md-5">
                              <label for="control-label" class="label-checkbox">Lesões?</label>                                                                                     
                            </div>
                            <div class="label-checkbox">
                              <select id="his21" name="his21" class="form-control">
                                <option ><?php echo $rows_cursos['his21'];?></option>
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>                           
                              </select>
                            </div>
                            <div class="control-label">
                              <label for="control-label" class="label-checkbox">Quais?</label>                                                                                     
                            </div>
                            <div class="form-group col-md-4">                      
                              <input type="telefone" class="form-control" name="resp_his21" id="telefoneMedico" value="<?php echo $rows_cursos['resp_his21'];?>">
                            </div>
                            <div class="form-group col-md-5">
                              <label for="control-label" class="label-checkbox">Hipertensão?</label>                                                                                     
                            </div>
                            <div class="label-checkbox">
                              <select id="his22" name="his22" class="form-control">
                                <option ><?php echo $rows_cursos['his22'];?></option>
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>                           
                              </select>
                            </div>
                            <div class="control-label">
                              <label for="control-label" class="label-checkbox">Quais?</label>                                                                                     
                            </div>
                            <div class="form-group col-md-4">                      
                              <input type="telefone" class="form-control" name="resp_his22" id="telefoneMedico" value="<?php echo $rows_cursos['resp_his22'];?>">
                            </div>
                            <div class="form-group col-md-5">
                              <label for="control-label" class="label-checkbox">Epilepsia?</label>                                                                                     
                            </div>
                            <div class="label-checkbox">
                              <select id="his23" name="his23" class="form-control">
                                <option ><?php echo $rows_cursos['his23'];?></option>
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>                           
                              </select>
                            </div>
                            <div class="control-label">
                              <label for="control-label" class="label-checkbox">Quais?</label>                                                                                     
                            </div>
                            <div class="form-group col-md-4">                      
                              <input type="telefone" class="form-control" name="resp_his23" id="telefoneMedico" value="<?php echo $rows_cursos['resp_his23'];?>">
                            </div>

                          </div><!-- row -->

                          <button type="submit" class="btn btn-thema"><i class="fa fa-check"></i> Salvar</button>
                          <a href="clientes.php" class="btn btn-primary">Voltar</a>
                        </div>
                      </div><!-- control-group -->
                    </div><!-- span10 offset1 -->
                  </div><!-- control-group -->
                </div><!-- span10 offset1 -->
              </div><!-- row -->
            </div><!-- control-group -->
          </div><!-- control-group  -->
        </form>
        <?php } ?>
      </div><!-- box-general -->

    </div><!-- cols -->
  </div><!-- row -->
</div><!-- container -->