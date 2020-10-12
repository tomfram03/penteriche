<?php
    session_start();

    include_once("conexao.php");

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
    $complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);
    $niveis_acesso_id = filter_input(INPUT_POST, 'niveis_acesso_id', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
    $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);

    //echo "Nome: $nome <br>";
    //echo "E-mail: $email <br>";
    //echo "Senha: $senha <br>";
    //echo "Endereço: $endereco <br>";
    //echo "Complemento: $complemento <br>";
    //echo "Cidade: $cidade <br>";
    //echo "Estado: $estado <br>";
    //echo "CEP: $cep <br>";

    $result_usuario = "INSERT INTO usuarios (nome, email, senha, endereco, complemento, niveis_acesso_id, cidade, estado, cep, created) 
    VALUES ('$nome', '$email', '$senha', '$endereco', '$complemento', '$niveis_acesso_id', '$cidade', '$estado', '$cep', NOW())";

    // var_dump($result_usuario);

if (mysqli_query($conn, $result_usuario)) {
    $_SESSION['msg'] = "<p style='color: green;'>Usuário cadastrado com sucesso</p>";
    header("Location: admin");
}else{    
    $_SESSION['msg'] = "<p style='color: red;'>Usuário não foi cadastrado</p>";
    header("Location: admin");
}
?>