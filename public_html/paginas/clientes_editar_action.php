<?php

//Cadastro
$id_clientes = filter_input(INPUT_POST, 'id_clientes', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$endereco =  filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_EMAIL);
$cidade =  filter_input(INPUT_POST,'cidade', FILTER_SANITIZE_STRING);
$cep =  filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$bairro =  filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$telefone =  filter_input(INPUT_POST, 'telefone');
$celular =  filter_input(INPUT_POST, 'celular');
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



$result_cadastro = "UPDATE clientes SET 
nome='$nome',
endereco='$endereco',
cidade='$cidade',
cep='$cep',
bairro='$bairro',
telefone='$telefone',
celular='$celular',
data_nasc='$data_nasc',
profissao='$profissao',
etnia='$etnia',
email='$email',
est_civil='$est_civil',
sexo='$sexo',
motivoDaVisita='$motivoDaVisita',
nome_emerg='$nome_emerg',
tel_emerg='$tel_emerg',
med_emerg='$med_emerg',
tel_med_emerg='$tel_med_emerg',
conv_med='$conv_med',
cart_med_emerg='$cart_med_emerg',
hosp_emerg='$hosp_emerg',
his1='$his1',
his2='$his2',
resp_his2='$resp_his2',
his3='$his3',
resp_his3='$resp_his3',
his4='$his4',
resp_his4='$resp_his4',
his5='$his5',
resp_his5='$resp_his5',
his6='$his6',
resp_his6='$resp_his6',
his7='$his7',
resp_his7='$resp_his7',
his8='$his8',
resp_his8='$resp_his8',
his9='$his9',
resp_his9='$resp_his9',
his10='$his10',
resp_his10='$resp_his10',
his11='$his11',
resp_his11='$resp_his11',
his12='$his12',
resp_his12='$resp_his12',
his13='$his13',
resp_his13='$resp_his13',
his14='$his14',
resp_his14='$resp_his14',
his15='$his15',
resp_his15='$resp_his15',
his16='$his16',
resp_his16='$resp_his16',
his17='$his17',
resp_his17='$resp_his17',
his18='$his18',
resp_his18='$resp_his18',
his19='$his19',
resp_his19='$resp_his19',
his20='$his20',
resp_his20='$resp_his20',
his21='$his21',
resp_his21='$resp_his21',
his22='$his22',
resp_his22='$resp_his22',
his23='$his23',
resp_his23='$resp_his23'
WHERE id_clientes=$id_clientes";


// mysqli_query($conn, $result_cadastro);

var_dump($result_cadastro);
// exit;


if (mysqli_query($conn, $result_cadastro)) {
    $_SESSION['msg'] = "<p style='color: green;'>Cliente editado com sucesso</p>";
    header("Location: clientes");
}else{    
    $_SESSION['msg'] = "<p style='color: red;'>Cliente não foi editado</p>";
    header("Location: clientes");
}
?>