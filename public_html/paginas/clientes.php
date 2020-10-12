<?php
require_once("admin_valid_user.php");
$result_clientes = "SELECT * FROM clientes";
$resultado_clientes = mysqli_query($conn, $result_clientes);
?>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-12">

      <div class="box-general">
        <h1 class="title">Lista de Clientes</h1>
        <div class="card-body">
          <?php
          if (isset($_SESSION['msg']))
            echo $_SESSION['msg'];
          unset($_SESSION['msg']);
          ?>
          <a href="<?php echo URL::getBase(); ?>clientes_cadastro" class="btn btn-thema"><i class="fa fa-plus"></i> Novo Cliente</a>
          <hr class="invisible">
          <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
              <thead>
                <th>#</th>
                <th>Nome</th>
                <th>Cidade</th>
                <th>Ações</th>
              </thead>
              <tbody>
                <?php
                while($row_clientes = mysqli_fetch_array($resultado_clientes)){
                  ?>
                  <tr>
                    <td><?php echo $row_clientes['id_clientes']; ?></td>
                    <td><?php echo $row_clientes['nome']; ?></td>
                    <td><?php echo $row_clientes['cidade']; ?></td>
                    <td class="actions">
                      <a href="<?php echo URL::getBase(); ?>clientes_editar?id=<?php echo $row_clientes['id_clientes']; ?>" class="btn btn-xs btn-info" title="Visualizar"><i class="fa fa-eye"></i></a>
                      <form name="delete_cliente" method="post" action="<?php echo URL::getBase(); ?>clientes_excluir" style="display:inline-block;">
                        <input type="hidden" name="id" value="<?php echo $row_clientes['id_clientes']; ?>" />
                        <button type="submit" class="btn btn-xs btn-danger" value="apagar"><i class="fa fa-trash-o"></i></button>

                      </form>
                    </td>
                  </tr>
                  <?php
                }
                ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>