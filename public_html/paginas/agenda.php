<?php
require_once("admin_valid_user.php");
$result_events = "SELECT id, title, color, start, end FROM events";
$resultado_events = mysqli_query($conn, $result_events);
?>

<link href='css/fullcalendar.min.css?<?php echo rand(); ?>' rel='stylesheet' />
<link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<link href='css/personalizado.css?<?php echo rand(); ?>' rel='stylesheet' />
<script src='js/jquery.min.js'></script>
<script src='js/bootstrap.min_cal.js'></script>		
<script src='js/moment.min.js'></script>
<script src='js/fullcalendar.min.js'></script>
<script src='locale/pt-br.js'></script>
<script>
$(document).ready(function() {
	$('#calendar').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay,list'
		},
		defaultDate: Date(),
					navLinks: true, // can click day/week names to navigate views
					editable: true,
					eventLimit: true, // allow "more" link when too many events
					eventClick: function(event) {
						$("#apagar_evento").attr("href", "<?php echo URL::getBase();?>proc_apagar_evento?id=" + event.id);
						
						$('#visualizar #id').text(event.id);
						$('#visualizar #id').val(event.id);
						$('#visualizar #title').text(event.title);
						$('#visualizar #title').val(event.title);
						$('#visualizar #start').text(event.start.format('DD/MM/YYYY HH:mm:ss'));
						$('#visualizar #start').val(event.start.format('DD/MM/YYYY HH:mm:ss'));
						$('#visualizar #end').text(event.end.format('DD/MM/YYYY HH:mm:ss'));
						$('#visualizar #end').val(event.end.format('DD/MM/YYYY HH:mm:ss'));
						$('#visualizar #color').val(event.color);
						$('#visualizar').modal('show');
						return false;

					},
					
					selectable: true,
					selectHelper: true,
					select: function(start, end){
						$('#cadastrar #start').val(moment(start).format('DD/MM/YYYY HH:mm:ss'));
						$('#cadastrar #end').val(moment(end).format('DD/MM/YYYY HH:mm:ss'));
						$('#cadastrar').modal('show');						
					},
					events: [
					<?php
					while($row_events = mysqli_fetch_array($resultado_events)){
						?>
						{
							id: '<?php echo $row_events['id']; ?>',
							title: '<?php echo $row_events['title']; ?>',
							start: '<?php echo $row_events['start']; ?>',
							end: '<?php echo $row_events['end']; ?>',
							color: '<?php echo $row_events['color']; ?>',
						},<?php
					}
					?>
					]
				});
});

			//Mascara para o campo data e hora
			function DataHora(evento, objeto){
				var keypress=(window.event)?event.keyCode:evento.which;
				campo = eval (objeto);
				if (campo.value == '00/00/0000 00:00:00'){
					campo.value=""
				}

				caracteres = '0123456789';
				separacao1 = '/';
				separacao2 = ' ';
				separacao3 = ':';
				conjunto1 = 2;
				conjunto2 = 5;
				conjunto3 = 10;
				conjunto4 = 13;
				conjunto5 = 16;
				if ((caracteres.search(String.fromCharCode (keypress))!=-1) && campo.value.length < (19)){
					if (campo.value.length == conjunto1 )
						campo.value = campo.value + separacao1;
					else if (campo.value.length == conjunto2)
						campo.value = campo.value + separacao1;
					else if (campo.value.length == conjunto3)
						campo.value = campo.value + separacao2;
					else if (campo.value.length == conjunto4)
						campo.value = campo.value + separacao3;
					else if (campo.value.length == conjunto5)
						campo.value = campo.value + separacao3;
				}else{
					event.returnValue = false;
				}
			}
			</script>

			<div class="container">
				<div class="box-general">
					<div class="page-header">
						<h1 class="title">Agenda</h1>
					</div>
					<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
					?>

					<div id='calendar'></div>

					<div class="modal fade" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title text-center">Dados da Consulta</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
								</div>
								<div class="modal-body">
									<div class="visualizar">
										<dl class="dl-horizontal">
											<!--<dt>ID do Evento</dt>-->
											<dt>Nome do Cliente</dt>
											<dd id="title"></dd>
											<dt>Inicio da Consulta</dt>
											<dd id="start"></dd>
											<dt>Fim da Consulta</dt>
											<dd id="end"></dd>
										</dl>
										<button class="btn btn-canc-vis btn-thema"><i class="fa fa-pencil"></i> Editar</button>
										<a href="" id="apagar_evento" class="btn btn-danger" role="button"><i class="fa fa-trash-o"></i> Apagar</a>
										<button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-remove"></i> Fechar</button>						
									</div>
									<div class="form">
										<form class="form-horizontal" method="POST" action="<?php echo URL::getBase(); ?>proc_edit_evento">
											<div class="form-group">
												<label for="inputEmail3" class="col-sm-2 control-label">Titulo</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="title" id="title" placeholder="Titulo do Evento">
												</div>
											</div>
											<div class="form-group">
												<label for="inputEmail3" class="col-sm-2 control-label">Cor</label>
												<div class="col-sm-10">
													<select name="color" class="form-control" id="color">
														<option value="">Selecione</option>			
														<option style="color:#FFD700;" value="#FFD700">Amarelo</option>
														<option style="color:#0071c5;" value="#0071c5">Azul Turquesa</option>
														<option style="color:#FF4500;" value="#FF4500">Laranja</option>											
														<option style="color:#436EEE;" value="#436EEE">Royal Blue</option>											
														<option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>										
														<option style="color:#228B22;" value="#228B22">Verde</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label for="inputEmail3" class="col-sm-2 control-label">Data Inicial</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="start" id="start" onKeyPress="DataHora(event, this)">
												</div>
											</div>
											<div class="form-group">
												<label for="inputEmail3" class="col-sm-2 control-label">Data Final</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="end" id="end" onKeyPress="DataHora(event, this)">
												</div>
											</div>
											<input type="hidden" class="form-control" name="id" id="id">
											<div class="form-group">
												<div class="col-sm-offset-2 col-sm-10">
													<button type="submit" class="btn btn-thema"><i class="fa fa-check"></i> Salvar Alterações</button>
													<button type="button" class="btn btn-canc-edit btn-danger"><i class="fa fa-remove"></i> Cancelar</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title text-center">Cadastrar Consulta</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
								</div>
								<div class="modal-body">
									<form class="form-horizontal" method="POST" action="<?php echo URL::getBase(); ?>proc_cad_evento">
										<div class="form-group">
											<label for="inputEmail3" class="col-sm-2 control-label">Cliente</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="title" placeholder="Nome do Cliente">
											</div>
										</div>
										<div class="form-group">
											<label for="inputEmail3" class="col-sm-2 control-label">Cor</label>
											<div class="col-sm-10">
												<select name="color" class="form-control" id="color">
													<option value="">Selecione</option>			
													<option style="color:#FFD700;" value="#FFD700">Amarelo</option>
													<option style="color:#0071c5;" value="#0071c5">Azul Turquesa</option>
													<option style="color:#FF4500;" value="#FF4500">Laranja</option>											
													<option style="color:#436EEE;" value="#436EEE">Royal Blue</option>											
													<option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>										
													<option style="color:#228B22;" value="#228B22">Verde</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label for="inputEmail3" class="col-sm-2 control-label">Data Inicial</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="start" id="start" onKeyPress="DataHora(event, this)">
											</div>
										</div>
										<div class="form-group">
											<label for="inputEmail3" class="col-sm-2 control-label">Data Final</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="end" id="end" onKeyPress="DataHora(event, this)">
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-offset-2 col-sm-10">
												<button type="submit" class="btn btn-success">Cadastrar</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>

			<script>
			$('.btn-canc-vis').on("click", function() {
				$('.form').slideToggle();
				$('.visualizar').slideToggle();
			});
			$('.btn-canc-edit').on("click", function() {
				$('.visualizar').slideToggle();
				$('.form').slideToggle();
			});
			</script>