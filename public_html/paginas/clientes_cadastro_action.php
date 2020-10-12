<?php

    session_start();

    include_once("conexao.php");

    //Cadastro
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $endereco =  filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_EMAIL);
    $numero =  filter_input(INPUT_POST,'numero');
    $cidade =  filter_input(INPUT_POST,'cidade');
    $cep =  filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
    $bairro =  filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
    $telefone =  filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $celular =  filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
    $data_nasc =  filter_input(INPUT_POST, 'data_nasc', FILTER_SANITIZE_STRING);
    $profissao =  filter_input(INPUT_POST, 'profissao', FILTER_SANITIZE_STRING);
    $etnia =  filter_input(INPUT_POST, 'etnia', FILTER_SANITIZE_STRING);
    $email =  filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $est_civil =  filter_input(INPUT_POST, 'est_civil', FILTER_SANITIZE_STRING);
    $sexo =  filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
    $motivoDaVisita = filter_input(INPUT_POST, 'motivoDaVisita', FILTER_SANITIZE_STRING);

    //Em caso de emergência
    $nome_emerg =  filter_input(INPUT_POST, 'nome_emerg');
    $tel_emerg =  filter_input(INPUT_POST, 'tel_emerg');
    $med_emerg =  filter_input(INPUT_POST, 'med_emerg');
    $tel_med_emerg =  filter_input(INPUT_POST, 'tel_med_emerg');
    $conv_med =  filter_input(INPUT_POST, 'conv_med');
    $cart_med_emerg =  filter_input(INPUT_POST, 'cart_med_emerg');
    $hosp_emerg =  filter_input(INPUT_POST, 'hosp_emerg');

    //Histórico - questionário
    $his1 =  filter_input(INPUT_POST, 'his1');
    $his2 =  filter_input(INPUT_POST, 'his2');
    $resp_his2 =  filter_input(INPUT_POST, 'resp_his2');
    $his3 =  filter_input(INPUT_POST, 'his3');
    $resp_his3 =  filter_input(INPUT_POST, 'resp_his3');
    $his4 =  filter_input(INPUT_POST, 'his4');
    $resp_his4 =  filter_input(INPUT_POST, 'resp_his4');
    $his5 =  filter_input(INPUT_POST, 'his5');
    $resp_his5 =  filter_input(INPUT_POST, 'resp_his5');
    $his6 =  filter_input(INPUT_POST, 'his6');
    $resp_his6 =  filter_input(INPUT_POST, 'resp_his6');
    $his7 =  filter_input(INPUT_POST, 'his7');
    $resp_his7 =  filter_input(INPUT_POST, 'resp_his7');
    $his8 =  filter_input(INPUT_POST, 'his8');
    $resp_his8 =  filter_input(INPUT_POST, 'resp_his8');
    $his9 =  filter_input(INPUT_POST, 'his9');
    $resp_his9 =  filter_input(INPUT_POST, 'resp_his9');
    $his10 =  filter_input(INPUT_POST, 'his10');
    $resp_his10 =  filter_input(INPUT_POST, 'resp_his10');
    $his11 =  filter_input(INPUT_POST, 'his11');
    $resp_his11 =  filter_input(INPUT_POST, 'resp_his11');
    $his12 =  filter_input(INPUT_POST, 'his12');
    $resp_his12 =  filter_input(INPUT_POST, 'resp_his12');
    $his13 =  filter_input(INPUT_POST, 'his13');
    $resp_his13 =  filter_input(INPUT_POST, 'resp_his13');
    $his14 =  filter_input(INPUT_POST, 'his14');
    $resp_his14 =  filter_input(INPUT_POST, 'resp_his14');
    $his15 =  filter_input(INPUT_POST, 'his15');
    $resp_his15 =  filter_input(INPUT_POST, 'resp_his15');
    $his16 =  filter_input(INPUT_POST, 'his16');
    $resp_his16 =  filter_input(INPUT_POST, 'resp_his16');
    $his17 =  filter_input(INPUT_POST, 'his17');
    $resp_his17 =  filter_input(INPUT_POST, 'resp_his17');
    $his18 =  filter_input(INPUT_POST, 'his18');
    $resp_his18 =  filter_input(INPUT_POST, 'resp_his18');
    $his19 =  filter_input(INPUT_POST, 'his19');
    $resp_his19 =  filter_input(INPUT_POST, 'resp_his19');
    $his20 =  filter_input(INPUT_POST, 'his20');
    $resp_his20 =  filter_input(INPUT_POST, 'resp_his20');
    $his21 =  filter_input(INPUT_POST, 'his21');
    $resp_his21 =  filter_input(INPUT_POST, 'resp_his21');
    $his22 =  filter_input(INPUT_POST, 'his22');
    $resp_his22 =  filter_input(INPUT_POST, 'resp_his22');
    $his23 =  filter_input(INPUT_POST, 'his23');
    $resp_his23 =  filter_input(INPUT_POST, 'resp_his23');
    
    

    $result_cadastro = "INSERT INTO clientes (nome,endereco,numero,cidade,cep,bairro,telefone,celular,
    data_nasc,profissao,etnia,email,est_civil,sexo,motivoDaVisita,
    
    nome_emerg,tel_emerg,med_emerg,tel_med_emerg,conv_med,cart_med_emerg,hosp_emerg,

    his1,his2,resp_his2,his3,resp_his3,his4,resp_his4,his5,resp_his5,his6,resp_his6,his7,resp_his7,his8,resp_his8,his9,resp_his9,his10,
    resp_his10,his11,resp_his11,his12,resp_his12,his13,resp_his13,his14,resp_his14,his15,resp_his15,his16,resp_his16,his17,resp_his17,
    his18,resp_his18,his19,resp_his19,his20,resp_his20,his21,resp_his21,his22,resp_his22,his23,resp_his23,created) 

    VALUES ('$nome','$endereco','$numero','$cidade','$cep','$bairro','$telefone','$celular', '$data_nasc', 
    '$profissao', '$etnia', '$email', '$est_civil', '$sexo', '$motivoDaVisita', 
    
    '$nome_emerg', '$tel_emerg', '$med_emerg', '$tel_med_emerg','$conv_med', '$cart_med_emerg', '$hosp_emerg', 

    '$his1', '$his2', '$resp_his2', '$his3', '$resp_his3', '$his4', '$resp_his4','$his5', '$resp_his5', '$his6', '$resp_his6', '$his7', 
    '$resp_his7','$his8', '$resp_his8', '$his9', '$resp_his9', '$his10', '$resp_his10', '$his11', '$resp_his11', '$his12', '$resp_his12', 
    '$his13', '$resp_his13', '$his14', '$resp_his14','$his15', '$resp_his15', '$his16', '$resp_his16', '$his17', '$resp_his17', '$his18', 
    '$resp_his18', '$his19', '$resp_his19', '$his20', '$resp_his20','$his21', '$resp_his21','$his22', '$resp_his22','$his23', '$resp_his23',  NOW())";
    // $resultado_cadastro = mysqli_query($conn, $result_cadastro);

if (mysqli_query($conn, $result_cadastro)) {
    $_SESSION['msg'] = "<p style='color: green;'>Cliente cadastrado com sucesso</p>";
    header("Location: clientes");
}else{    
    $_SESSION['msg'] = "<p style='color: red;'>Cliente não foi cadastrado</p>";
    header("Location: clientes");
}

    //Em caso de emergência
    //$nome_emerg =  filter_input(INPUT_POST, 'nome_emerg');
    //$tel_emerg =  filter_input(INPUT_POST, 'tel_emerg');
    //$med_emerg =  filter_input(INPUT_POST, 'med_emerg');
    //$tel_med_emerg =  filter_input(INPUT_POST, 'tel_med_emerg');
    //$conv_med =  filter_input(INPUT_POST, 'conv_med');
    //$cart_med_emerg =  filter_input(INPUT_POST, 'cart_med_emerg');
    //$hosp_emerg =  filter_input(INPUT_POST, 'hosp_emerg');


    //Histórico - questionário

    //$his1 =  filter_input(INPUT_POST, 'his1');
    //$his2 =  filter_input(INPUT_POST, 'his2');
    //$resp_his2 =  filter_input(INPUT_POST, 'resp_his2');
    //$his3 =  filter_input(INPUT_POST, 'his3');
    //$resp_his3 =  filter_input(INPUT_POST, 'resp_his3');
    //$his4 =  filter_input(INPUT_POST, 'his4');
    //$resp_his4 =  filter_input(INPUT_POST, 'resp_his4');
    //$his5 =  filter_input(INPUT_POST, 'his5');
    ////$resp_his5 =  filter_input(INPUT_POST, 'resp_his5');
    //$his6 =  filter_input(INPUT_POST, 'his6');
    //$resp_his6 =  filter_input(INPUT_POST, 'resp_his6');
    ////$his7 =  filter_input(INPUT_POST, 'his7');
    //$resp_his7 =  filter_input(INPUT_POST, 'resp_his7');
    //$his8 =  filter_input(INPUT_POST, 'his8');
    //$resp_his8 =  filter_input(INPUT_POST, 'resp_his8');
    //$his9 =  filter_input(INPUT_POST, 'his9');
    //$resp_his9 =  filter_input(INPUT_POST, 'resp_his9');
    //$his10 =  filter_input(INPUT_POST, 'his10');
    ////$resp_his10 =  filter_input(INPUT_POST, 'resp_his10');
    //$his11 =  filter_input(INPUT_POST, 'his11');
    //$resp_his11 =  filter_input(INPUT_POST, 'resp_his11');
    //$his12 =  filter_input(INPUT_POST, 'his12');
    //$resp_his12 =  filter_input(INPUT_POST, 'resp_his12');
    //$his13 =  filter_input(INPUT_POST, 'his13');
    //$resp_his13 =  filter_input(INPUT_POST, 'resp_his13');
    //$his14 =  filter_input(INPUT_POST, 'his14');
    //$resp_his14 =  filter_input(INPUT_POST, 'resp_his14');
    //$his15 =  filter_input(INPUT_POST, 'his15');
    //$resp_his15 =  filter_input(INPUT_POST, 'resp_his15');
    //$his16 =  filter_input(INPUT_POST, 'his16');
    //$resp_his16 =  filter_input(INPUT_POST, 'resp_his16');
    //$his17 =  filter_input(INPUT_POST, 'his17');
    //$resp_his17 =  filter_input(INPUT_POST, 'resp_his17');
    //$his18 =  filter_input(INPUT_POST, 'his18');
    //$resp_his18 =  filter_input(INPUT_POST, 'resp_his18');
    //$his19 =  filter_input(INPUT_POST, 'his19');
    //$resp_his19 =  filter_input(INPUT_POST, 'resp_his19');
    //$his20 =  filter_input(INPUT_POST, 'his20');
    //$resp_his20 =  filter_input(INPUT_POST, 'resp_his20');
    //$his21 =  filter_input(INPUT_POST, 'his21');
    //$resp_his21 =  filter_input(INPUT_POST, 'resp_his21');
    //$his22 =  filter_input(INPUT_POST, 'his22');
    //$resp_his22 =  filter_input(INPUT_POST, 'resp_his22');
    //$his23 =  filter_input(INPUT_POST, 'his23');
    //$resp_his23 =  filter_input(INPUT_POST, 'resp_his23');

    //echo "Nome: $nome <br>";
    //echo "Endereço: $endereco <br>";
    //echo "Cidade: $cidade <br>";
    //echo "Cep: $cep <br>";
    //echo "Bairro: $bairro <br>";
    //echo "Telefone: $telefone <br>";
    //echo "Celular: $celular <br>";
    //echo "Data de nascimento: $data_nasc <br>";
    //echo "Profissão: $profissao <br>";
    //echo "Etnia: $etnia <br>";
    //echo "E-mail: $email <br>";
    //echo "Estado Civil: $est_civil <br>";
    //echo "Sexo: $sexo <br>";

    //echo "Nome em caso de emergência: $nome_emerg <br>";
    //echo "Telefone em caso de emergência: $tel_emerg <br>";
    //echo "Médico em caso de emergência: $med_emerg <br>";
    //echo "Telefone em caso de emergência: $tel_med_emerg <br>";
    //echo "Convênio médico: $conv_med <br>";
    //echo "Carteira médica: $cart_med_emerg <br>";
    //echo "Hospital em caso de emergência: $hosp_emerg <br>";

    //echo "Costuma permanecer muito tempo sentada(o)? $his1 <br>";
    //echo "Antecedentes cirúrgicos? $his2 $resp_his2 <br>";
    //echo "Tratamento estético anterior? $his3 $resp_his3 <br>";
    //echo "Funcionamento instestinal regular? $his4 $resp_his4 <br>";
    //echo "Pratica atividade física? $his5 $resp_his5<br>";
    //echo "É fumante? $his6 $resp_his6<br>";
    //echo "O quê? $his7 $resp_his7<br>";
    //echo "Alimentação balanceada? $his8 $resp_his8<br>";
    //echo "Ingere líquidos com frequência? $his9 $resp_his9<br>";
    //echo "É gestante? $his10 $resp_his10<br>";
    //echo "Tem algum problema ortopédico? $his11 $resp_his11<br>";
    //echo "Faz algum tratamento médico? $his12 $resp_his12<br>";
    //echo "Usa ou já usou ácidos na pele? $his13 $resp_his13<br>";
    //echo "Já fez algum tratamento ortomolecular? $his14 $resp_his14<br>";
    //echo "Cuidados diários e produtos em uso: $his15 $resp_his15<br>";
    //echo "Portador de marcapasso? $his16 $resp_his16<br>";
    //echo "Presença de metais? $his17 $resp_his17<br>";
    //echo "Antecedentes oncológicos? $his18 $resp_his18<br>";
    //echo "Ciclo menstrual regular? $his19 $resp_his19<br>";
    //echo "Usa método anticoncepicional? $his20 $resp_his20<br>";
    //echo "Lesões? $his21 $resp_his21<br>";
    //echo "Hipertensão? $his22 $resp_his22<br>";
    //echo "Epilepsia? $his23 $resp_his23<br>";

?>