<ul class="navbar-nav mr-auto">

	<?php if($userLogado){ ?>

	<li class="nav-item <?php if($url === 'principal' || $url === ''){ echo "active"; } ?>"><a href="<?php echo URL::getBase(); ?>principal" class="nav-link"><i class="fa fa-home"></i> Início</a></li>

	<li class="nav-item <?php if($url === 'admin'){ echo "active"; } ?>"><a href="<?php echo URL::getBase(); ?>admin" class="nav-link"><i class="fa fa-dashboard"></i> Painel Admin</a></li>



	<li class="nav-item <?php if($url === 'clientes'){ echo "active"; } ?>"><a href="<?php echo URL::getBase(); ?>clientes" class="nav-link">Clientes <span class="sr-only">(current)</a></li>

	<li class="nav-item <?php if($url === 'agenda'){ echo "active"; } ?>"><a href="<?php echo URL::getBase(); ?>agenda" class="nav-link">Agenda</a></li>      

	<li class="nav-item <?php if($url === 'ajuda'){ echo "active"; } ?>"><a href="<?php echo URL::getBase(); ?>ajuda" class="nav-link">Ajuda</a></li>



	<li class="nav-item <?php if($url === 'inscrever'){ echo "active"; } ?> dropdown pull-right">

		<a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

			<i class="fa fa-user"></i> Usuário

		</a>

		<div class="dropdown-menu" >

			<a href="<?php echo URL::getBase(); ?>admin_novo" class="dropdown-item">Novo Usuário</a>

			<a class="dropdown-item" href="<?php echo URL::getBase(); ?>logout">Sair</a>

		</div>

	</li>    

	<!--Pesquisar-->

	<form method="POST" action="<?php echo URL::getBase(); ?>pesquisar" class="form-inline my-2 my-lg-0" style="display:inline-block;">

		<input class="form-control mr-sm-2" name="pesquisar" type="search" placeholder="Pesquisar clientes..." aria-label="Pesquisar clientes">

		<button class="btn btn-secondary my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>

	</form>



	<?php }else{?>

	<li class="nav-item <?php if($url === 'principal' || $url === ''){ echo "active"; } ?>"><a href="<?php echo URL::getBase(); ?>principal" class="nav-link"><i class="fa fa-home"></i> Início</a></li>

	

	<li class="nav-item <?php if($url === 'contato'){ echo "active"; } ?>"><a href="<?php echo URL::getBase(); ?>contato" class="nav-link">Contato</a></li>

	<!-- Redes Sociais -->

	<li><a href="https://facebook.com/michellyreflexoterapeuta" target="_Blank" class="nav-link"><i class="fa fa-facebook"></i></a></li>

	<li><a href="https://instagram.com/michellyreflexoterapeuta" target="_Blank" class="nav-link"><i class="fa fa-instagram"></i></a></li>

	<li><a href="https://api.whatsapp.com/send?phone=5515996887595&text=Olá gostaria de fazer um agendamento" target="_Blank" class="nav-link"><i class="fa fa-whatsapp"></i></a></li>

	<!-- INSERIR ICONE DE TELEFONE E DE LOCALIZAÇÃO --> 



	<?php } ?>

</ul> 