<?php
$id = $_POST['id'];
$result_cadastro = mysqli_query($conn, "DELETE FROM clientes WHERE id_clientes=".$id);

if (!mysqli_query($conn, $result_cadastro)) {
    $_SESSION['msg'] = "<p style='color: green;'>Cliente removido com sucesso</p>";
    header("Location: clientes");
}
?>