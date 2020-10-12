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

     	<p>Página em construção. </p>

     </div>

   </div>

 </div>

</div>

