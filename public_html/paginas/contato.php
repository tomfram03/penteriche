<div class="container">

  <div class="row">

    <div class="col-xs-12 col-md-12">


      <div class="box-general">
        <div class="row">

          <div class="col-xs-12 col-md-5">

            <h1 class="title">Entre em Contato</h1>



            <form action="" method="post" enctype="multipart/form-data" name="email">

              <div class="row">

                <div class="col-xs-12 col-md-5">
                  <div class="form-group required" style="margin:.5em 0;">

                   <label class="control-label">Seu Nome:</label>

                   <input type="text" name="nome" id="nome" placeholder="Digite seu nome"  required class="form-control">

                 </div>
               </div>

               <div class="col-xs-12 col-md-7">
                 <div class="form-group required" style="margin:.5em 0;">

                   <label class="control-label">Seu e-mail</label>

                   <input type="text" name="email_from" id="email_from"  required placeholder="Digite um e-mail válido" class="form-control">

                 </div>
               </div>

             </div>



             <div class="row">
               <div class="col-xs-12 col-md-5">
                 <div class="form-group required" style="margin:.5em 0;">

                  <label class="control-label">Telefone</label>

                  <input type="text" name="telefone" id="telefone" required placeholder="(99) 9.9999-9999" class="form-control">

                </div>
              </div>
              <div class="col-xs-12 col-md-7">
                <div class="form-group required" style="margin:.5em 0;">

                 <label class="control-label">Seu Bairro</label>

                 <input type="text" name="bairro" id="bairro" required placeholder="Digite seu Bairro" class="form-control">

               </div>
             </div>
           </div>





           <div class="form-group required" style="margin:.5em 0;">

             <label class="control-label">Serviço</label>

             <input type="text" name="servico" id="servico" required placeholder="Digite o Serviço" class="form-control">

           </div>

           <div class="form-group" style="margin:.5em 0;">

             <label class="control-label">Sua Mensagem</label>

             <textarea name="mensagem" id="mensagem" class="form-control"></textarea>

           </div>

           <div class="form-group required" style="margin:.5em 0;">

             <input type="submit" name="enviar" value="Enviar" class="btn btn-thema">

           </div>

         </form>





         <?php

  // Email a receber esse formulário

         $email_admin = 'contato@michellypenteriche.com.br';



         if(isset($_POST['enviar'])){

  //pego os dados enviados pelo formulario

          $nome = stripslashes(trim($_POST["nome"]));

          $email = $email_admin;

          $date = date("d/m/Y - H:i:s");        

          $mensagem = stripslashes(trim($_POST["mensagem"]));

          $bairro = stripslashes(trim($_POST["bairro"]));

          $servico = stripslashes(trim($_POST["servico"]));

          $telefone = stripslashes(trim($_POST["telefone"]));

          $assunto = utf8_decode('Contato do Site da Michelly Penteriche');

          $email_from = $_POST["email_from"];

  //formato o campo da mensagem

          $mensagem = wordwrap( $mensagem, 50, "

            ", 1);

          $arquivo = isset($_FILES["arquivo"]) ? $_FILES["arquivo"] : FALSE;

          if(file_exists($arquivo["tmp_name"]) and !empty($arquivo)){

            $fp = fopen($_FILES["arquivo"]["tmp_name"],"rb");

            $anexo = fread($fp,filesize($_FILES["arquivo"]["tmp_name"]));

            $anexo = base64_encode($anexo);

            fclose($fp);

            $anexo = chunk_split($anexo);

            $boundary = "XYZ-" . date("dmYis") . "-ZYX";

            $mens = "--$boundary\n";

            $mens .= "Content-Transfer-Encoding: 8bits\n";

  $mens .= "Content-Type: text/html; charset=\"utf-8\"\n\n"; //plain

  $mens .= "Nome: <b>$nome</b><br/><br/>E-mail: <b>$email_from</b><br/><br/>Bairro: <b>$bairro</b><br/><br/>Telefone: <b>$telefone</b><br/><br/>Serviço: <b>$servico</b><br/><br/>Mensagem: <b>$mensagem</b><br/><br/>Data de Envio: <b>$date</b>\n";

  $mens .= "--$boundary\n";

  $mens .= "Content-Type: ".$arquivo["type"]."\n";

  $mens .= "Content-Disposition: attachment; filename=\"".$arquivo["name"]."\"\n";

  $mens .= "Content-Transfer-Encoding: base64\n\n";

  $mens .= "$anexo\n";

  $mens .= "--$boundary--\r\n";

  $headers = "MIME-Version: 1.0\n";

  $headers .= "From: \"$nome\" <$email_from>\r\n";

  $headers .= "Return-Path: $email_from\r\n"; // return-path

  $headers .= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";

  $headers .= "$boundary\n";

  //envio o email com o anexo

  mail($email,$assunto,$mens,$headers);

  echo"<div class='alert alert-success' style='margin:1em 0;'><h4>E-mail enviado com sucesso!</h4><p>Obrigado por entrar em contato, responderemos o mais breve.</div>";

}

  //se não tiver anexo

else{

  $headers = "MIME-Version: 1.0\r\n";

  $headers .= "Content-type: text/html; charset=utf-8\r\n";

  $headers .= "From: \"$nome\" <$email_from>\r\n";

  $mensagem = "Nome: <b>$nome</b><br/><br/>E-mail: <b>$email_from</b><br/><br/>Bairro: <b>$bairro</b><br/><br/>Telefone: <b>$telefone</b><br/><br/>Serviço: <b>$servico</b><br/><br/>Mensagem: <b>$mensagem</b><br/><br/>Data de Envio: <b>$date</b>\n";

  //envia o email sem anexo

  mail($email,$assunto,$mensagem, $headers);

  echo"<div class='alert alert-success' style='margin:1em 0;'><h4>E-mail enviado com sucesso!</h4><p>Obrigado por entrar em contato, responderemos o mais breve.</div>";

}

}

?>


</div>
<div class="col-xs-12 col-md-7">
  <h1 class="title">Nossa Localização</h1>  
  <div class="map-responsive">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d914.8092586561903!2d-47.4446652707854!3d-23.487970299044967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf6004a084f78b%3A0x86b31e4da4364bf8!2sR.%20Maria%20Cinto%20de%20Biagi%2C%20105%20-%20Jardim%20Santa%20Ros%C3%A1lia%2C%20Sorocaba%20-%20SP%2C%2018095-410!5e0!3m2!1spt-BR!2sbr!4v1574955108749!5m2!1spt-BR!2sbr" width="900" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
</div><!-- cols -->
</div><!-- row -->

<div class="row">
  <div class="col-xs-12 col-md-12">
    <h1 class="title">Redes Sociais</h1>
    <ul id="box-contato">
      <li>
        <a href="https://facebook.com/michellyreflexoterapeuta" target="_Blank" class="circle-box"><span class="fa fa-facebook"></span></a> 
      </li>
      <li>
        <a href="https://instagram.com/michellyreflexoterapeuta" target="_Blank" class="circle-box"><span class="fa fa-instagram"></span></a> 
      </li>
      <li>
        <a href="https://api.whatsapp.com/send?phone=5515996887595" class="circle-box"><span class="fa fa-whatsapp"></span></a>
      </li>
      <li>
        <a href="mailto:contato@michellypenteriche.com.br" target="_Blank" class="circle-box"><span class="fa fa-envelope"></span></a>
      </li>
    </ul>
  </div>
</div>

</div><!-- box-general -->



</div>

</div>

</div>