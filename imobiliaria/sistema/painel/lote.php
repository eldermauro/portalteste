<?php 
require_once("verificar.php");
require_once("../conexao.php");
$pag = 'lote';

 ?>

 <button onclick="inserir()" type="button" class="btn btn-primary btn-flat btn-pri"><i class="fa fa-plus" aria-hidden="true"></i> Criar Lote</button>

<div class="bs-example widget-shadow" style="padding:15px" id="listar">
	
</div>




<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="">Criar Lote - Inserir Informações</h4>
				<button id="btn-fechar" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" id="form">
				<div class="modal-body">

					<div class="row">

					


					<!--<div class="col-md-2">
						<div class="form-group"> 
							<label>Responsavel</small></label> 
							<select class="form-control sel2" name="corretor" id="corretor"  style="width:100%;"> 
									<//?php 
									if($nivel_usu == 'Corretor'){
										$query = $pdo->query("SELECT * FROM usuarios where nome = '$id_usuario' order by nome asc");
									}else{
										$query = $pdo->query("SELECT * FROM usuarios where nivel = 'Corretor' or nivel = 'Administrador' order by nome asc");
									}
									
									$res = $query->fetchAll(PDO::FETCH_ASSOC);
									for($i=0; $i < @count($res); $i++){
										foreach ($res[$i] as $key => $value){}

											?>	
										<option value="<//?php echo $res[$i]['nome'] ?>"><//?php echo $res[$i]['nome'] ?></option>

									<//?php } ?>

								</select>
						</div>
					</div>-->	

					
					<div class="col-md-3">
								<div class="form-group"> 
									<label>Data de Emissão</label> 
									<input type="date" class="form-control" name="data_cadastro" id="data_cadastro" placeholder="data" > 
								</div>
							</div>

						<div class="col-md-6">						
							<div class="form-group"> 
								<label>Nome da Empressa</label> 
								<input type="text" class="form-control" name="empressa" id="empressa" > 
							</div>						
						</div>

						<div class="col-md-3">						
							<div class="form-group"> 
								<label>Nº da placa/Barco</label> 
								<input type="text" class="form-control" name="placa" id="placa" > 
							</div>						
						</div>
						


					</div>

					<div class="row">

					<div class="col-md-3">
								<div class="form-group"> 
									<label>Origem</label> 
									<input type="text" class="form-control" name="origem" id="origem" placeholder="cidade/estado" > 
								</div>
							</div>

						<div class="col-md-3">						
							<div class="form-group"> 
								<label>Destino</label> 
								<input type="text" class="form-control" name="destino" id="destino" placeholder="cidade/estado" > 
							</div>						
						</div>

						<div class="col-md-3">						
							<div class="form-group"> 
								<label>Numero Lote</label> 
								<input type="text" class="form-control" name="numero" id="numero" placeholder="000000" > 
							</div>						
						</div>

						<div class="col-md-3">						
							<div class="form-group"> 
								<label>Numero Nota fiscal</label> 
								<input type="text" class="form-control" name="nota" id="nota" placeholder="NFE Nº:000" > 
							</div>						
						</div>				
											
						
						
						
						

						
						


					</div>

					<hr>


					<!--<div class="col-md-6">						
							<div class="form-group"> 
								<label>Cliente</label> 
								<input type="text" class="form-control" name="nome" id="nome" > 
							</div>						
						</div>-->
						<div class="row">
						<div class="col-md-12">						
									<div class="form-group"> 
										<label>Cliente - CPF / CNPJ - Inscrição Estadual - Telefone</label> 
										<select class="form-control sel2" name="dono" id="dono" required style="width:100%;"> 
											<?php 
											$query = $pdo->query("SELECT * FROM compradores order by id desc");
											$res = $query->fetchAll(PDO::FETCH_ASSOC);
											for($i=0; $i < @count($res); $i++){
												foreach ($res[$i] as $key => $value){}

													?>	
												<option value="<?php echo $res[$i]['nome'] ?> - <?php echo $res[$i]['doc'] ?> - <?php echo $res[$i]['inscricao'] ?> - <?php echo $res[$i]['telefone'] ?>"><?php echo $res[$i]['nome'] ?> - <?php echo $res[$i]['doc'] ?>
												- <?php echo $res[$i]['inscricao'] ?> - <?php echo $res[$i]['telefone'] ?></option>

											<?php } ?>

										</select>
									</div>						
								</div>


								<div class="col-md-6">						
									<div class="form-group"> 
										<label>Endereço Pessoa Física</label> 
										<select class="form-control sel2" name="fisica" id="fisica" required style="width:100%;"> 
											<?php 
											$query = $pdo->query("SELECT * FROM compradores order by id desc");
											$res = $query->fetchAll(PDO::FETCH_ASSOC);
											for($i=0; $i < @count($res); $i++){
												foreach ($res[$i] as $key => $value){}

													?>	
												<option value="<?php echo $res[$i]['logradouro'] ?> - <?php echo $res[$i]['numero'] ?> - <?php echo $res[$i]['cidade'] ?> - <?php echo $res[$i]['uf'] ?> - <?php echo $res[$i]['cep'] ?>"><?php echo $res[$i]['logradouro'] ?> - <?php echo $res[$i]['numero'] ?>
												- <?php echo $res[$i]['cidade'] ?> - <?php echo $res[$i]['uf'] ?> - <?php echo $res[$i]['cep'] ?></option>

											<?php } ?>

										</select>
									</div>						
								</div>

								<div class="col-md-6">						
									<div class="form-group"> 
										<label>Endereço Pessoa Jurídica</label> 
										<select class="form-control sel2" name="juridica" id="juridica" required style="width:100%;"> 
											<?php 
											$query = $pdo->query("SELECT * FROM compradores order by id desc");
											$res = $query->fetchAll(PDO::FETCH_ASSOC);
											for($i=0; $i < @count($res); $i++){
												foreach ($res[$i] as $key => $value){}

													?>	
												<option value="<?php echo $res[$i]['logradouroj'] ?> - <?php echo $res[$i]['numeroj'] ?> - <?php echo $res[$i]['cidadej'] ?> - <?php echo $res[$i]['ufj'] ?> - <?php echo $res[$i]['cepj'] ?>"><?php echo $res[$i]['logradouroj'] ?> - <?php echo $res[$i]['numeroj'] ?>
												- <?php echo $res[$i]['cidadej'] ?> - <?php echo $res[$i]['ufj'] ?> - <?php echo $res[$i]['cepj'] ?></option>

											<?php } ?>

										</select>
									</div>						
								</div>


								</div>

<hr>



<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"><!--final acordion-->

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h2 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         Produto Item #1
        </a>
      </h2>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
	  <div class="row">
						<!--item 1-->
					
						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Produtor/Ex</label> 
								<select class="form-control sel2" name="produtor" id="produtor"  style="width:100%;"> 
									<?php 
									$query = $pdo->query("SELECT * FROM locadores order by apelido desc");
									$res = $query->fetchAll(PDO::FETCH_ASSOC);
									for($i=0; $i < @count($res); $i++){
										foreach ($res[$i] as $key => $value){}

											?>	
										<option value="<?php echo $res[$i]['apelido'] ?>"><?php echo $res[$i]['apelido'] ?></option>

									<?php } ?>

								</select>
							</div>						
						</div>

						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Produto</label> 
								<input type="text" class="form-control" name="produto" id="produto" placeholder="o.e breu,óleo copaíba.."> 
							</div>						
						</div>

						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Código Eb.</label> 
								<input type="text" class="form-control" name="emb" id="emb" placeholder="CO000.."> 
							</div>						
						</div>

						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Peso Bruto(kg)</label> 
								<input type="text" class="form-control" name="bruto" id="bruto" placeholder="00.0"> 
							</div>						
						</div>

						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Peso Liq(kg)</label> 
								<input type="text" class="form-control" name="liq" id="liq" placeholder="00.0"> 
							</div>						
						</div>

						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Valor por kg(R$)</label> 
								<input type="text" class="form-control" name="valor" id="valor" placeholder="00.0"> 
							</div>						
						</div>
					</div>
      </div>
    </div>
  </div>


  <div class="panel panel-default">

    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		Produto Item #2
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
			<!--item 2-->

			<div class="row">
						
						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Produtor/Ex</label> 
								<select class="form-control sel2" name="produtordois" id="produtordois"  style="width:100%;"> 
								<?php 
									$query = $pdo->query("SELECT * FROM locadores order by apelido desc");
									$res = $query->fetchAll(PDO::FETCH_ASSOC);
									for($i=0; $i < @count($res); $i++){
										foreach ($res[$i] as $key => $value){}

											?>	
										<option value="<?php echo $res[$i]['apelido'] ?>"><?php echo $res[$i]['apelido'] ?></option>

									<?php } ?>

								</select>
							</div>						
						</div>

						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Produto</label> 
								<input type="text" class="form-control" name="produtodois" id="produtodois" placeholder="o.e breu,óleo copaíba.."> 
							</div>						
						</div>

						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Código Eb.</label> 
								<input type="text" class="form-control" name="embdois" id="embdois" placeholder="CO000.."> 
							</div>						
						</div>

						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Peso Bruto(kg)</label> 
								<input type="text" class="form-control" name="brutodois" id="brutodois" placeholder="00.0"> 
							</div>						
						</div>

						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Peso Liq(kg)</label> 
								<input type="text" class="form-control" name="liqdois" id="liqdois" placeholder="00.0"> 
							</div>						
						</div>

						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Valor por kg(R$)</label> 
								<input type="text" class="form-control" name="valordois" id="valordois" placeholder="00.0"> 
							</div>						
						</div>
				</div>
							

      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		Produto Item #3
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
				<!--item 3-->

			<div class="row">		
					
					<div class="col-md-2">						
						<div class="form-group"> 
							<label>Produtor/Ex</label> 
							<select class="form-control sel2" name="produtortres" id="produtortres"  style="width:100%;"> 
							<?php 
								$query = $pdo->query("SELECT * FROM locadores order by apelido desc");
								$res = $query->fetchAll(PDO::FETCH_ASSOC);
								for($i=0; $i < @count($res); $i++){
									foreach ($res[$i] as $key => $value){}

										?>	
									<option value="<?php echo $res[$i]['apelido'] ?>"><?php echo $res[$i]['apelido'] ?></option>

								<?php } ?>

							</select>
						</div>						
					</div>

					<div class="col-md-2">						
						<div class="form-group"> 
							<label>Produto</label> 
							<input type="text" class="form-control" name="produtotres" id="produtotres" placeholder="o.e breu,óleo copaíba.."> 
						</div>						
					</div>

					<div class="col-md-2">						
						<div class="form-group"> 
							<label>Código Eb.</label> 
							<input type="text" class="form-control" name="embtres" id="embtres" placeholder="CO000.."> 
						</div>						
					</div>

					<div class="col-md-2">						
						<div class="form-group"> 
							<label>Peso Bruto(kg)</label> 
							<input type="text" class="form-control" name="brutotres" id="brutotres" placeholder="00.0"> 
						</div>						
					</div>

					<div class="col-md-2">						
						<div class="form-group"> 
							<label>Peso Liq(kg)</label> 
							<input type="text" class="form-control" name="liqtres" id="liqtres" placeholder="00.0"> 
						</div>						
					</div>

					<div class="col-md-2">						
						<div class="form-group"> 
							<label>Valor por kg(R$)</label> 
							<input type="text" class="form-control" name="valortres" id="valortres" placeholder="00.0"> 
						</div>						
					</div>
			</div>		
					

      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
		Produto Item #4
        </a>
      </h4>
    </div>
    <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
	  <div class="row">							
						<!--item 4-->
					
						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Produtor/Ex</label> 
								<select class="form-control sel2" name="produtorqua" id="produtorqua"  style="width:100%;"> 
								<?php 
									$query = $pdo->query("SELECT * FROM locadores order by apelido desc");
									$res = $query->fetchAll(PDO::FETCH_ASSOC);
									for($i=0; $i < @count($res); $i++){
										foreach ($res[$i] as $key => $value){}

											?>	
										<option value="<?php echo $res[$i]['apelido'] ?>"><?php echo $res[$i]['apelido'] ?></option>

									<?php } ?>

								</select>
							</div>						
						</div>

						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Produto</label> 
								<input type="text" class="form-control" name="produtoqua" id="produtoqua" placeholder="o.e breu,óleo copaíba.."> 
							</div>						
						</div>

						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Código Eb.</label> 
								<input type="text" class="form-control" name="embqua" id="embqua" placeholder="CO000.."> 
							</div>						
						</div>

						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Peso Bruto(kg)</label> 
								<input type="text" class="form-control" name="brutoqua" id="brutoqua" placeholder="00.0"> 
							</div>						
						</div>

						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Peso Liq(kg)</label> 
								<input type="text" class="form-control" name="liqqua" id="liqqua" placeholder="00.0"> 
							</div>						
						</div>

						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Valor por kg(R$)</label> 
								<input type="text" class="form-control" name="valorqua" id="valorqua" placeholder="00.0"> 
							</div>						
						</div>
				</div>						


	  </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapseThree">
		Produto Item #5
        </a>
      </h4>
    </div>
    <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
	  <div class="row">
						<!--item 5-->
					
						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Produtor/Ex</label> 
								<select class="form-control sel2" name="produtorcinco" id="produtorcinco"  style="width:100%;"> 
								<?php 
									$query = $pdo->query("SELECT * FROM locadores order by apelido desc");
									$res = $query->fetchAll(PDO::FETCH_ASSOC);
									for($i=0; $i < @count($res); $i++){
										foreach ($res[$i] as $key => $value){}

											?>	
										<option value="<?php echo $res[$i]['apelido'] ?>"><?php echo $res[$i]['apelido'] ?></option>

									<?php } ?>

								</select>
							</div>						
						</div>

						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Produto</label> 
								<input type="text" class="form-control" name="produtocinco" id="produtocinco" placeholder="o.e breu,óleo copaíba.."> 
							</div>						
						</div>

						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Código Eb.</label> 
								<input type="text" class="form-control" name="embcinco" id="embcinco" placeholder="CO000.."> 
							</div>						
						</div>

						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Peso Bruto(kg)</label> 
								<input type="text" class="form-control" name="brutocinco" id="brutocinco" placeholder="00.0"> 
							</div>						
						</div>

						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Peso Liq(kg)</label> 
								<input type="text" class="form-control" name="liqcinco" id="liqcinco" placeholder="00.0"> 
							</div>						
						</div>

						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Valor por kg(R$)</label> 
								<input type="text" class="form-control" name="valorcinco" id="valorcinco" placeholder="00.0"> 
							</div>						
						</div>
					</div>
						
	  </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapseThree">
		Produto Item #6
        </a>
      </h4>
    </div>
    <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
			
						<!--item 6-->
					

						<div class="row">
						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Produtor/Ex</label> 
								<select class="form-control sel2" name="produtorseis" id="produtorseis"  style="width:100%;"> 
								<?php 
									$query = $pdo->query("SELECT * FROM locadores order by apelido desc");
									$res = $query->fetchAll(PDO::FETCH_ASSOC);
									for($i=0; $i < @count($res); $i++){
										foreach ($res[$i] as $key => $value){}

											?>	
										<option value="<?php echo $res[$i]['apelido'] ?>"><?php echo $res[$i]['apelido'] ?></option>

									<?php } ?>

								</select>
							</div>						
						</div>

						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Produto</label> 
								<input type="text" class="form-control" name="produtoseis" id="produtoseis" placeholder="o.e breu,óleo copaíba.."> 
							</div>						
						</div>

						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Código Eb.</label> 
								<input type="text" class="form-control" name="embseis" id="embseis" placeholder="CO000.."> 
							</div>						
						</div>

						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Peso Bruto(kg)</label> 
								<input type="text" class="form-control" name="brutoseis" id="brutoseis" placeholder="00.0"> 
							</div>						
						</div>

						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Peso Liq(kg)</label> 
								<input type="text" class="form-control" name="liqseis" id="liqseis" placeholder="00.0"> 
							</div>						
						</div>

						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Valor por kg(R$)</label> 
								<input type="text" class="form-control" name="valorseis" id="valorseis" placeholder="00.0"> 
							</div>						
						</div>
					</div>							
	  </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseseven" aria-expanded="false" aria-controls="collapseThree">
		Produto Item #7
        </a>
      </h4>
    </div>
    <div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
		<!--item 7-->

		<div class="row">

<div class="col-md-2">						
	<div class="form-group"> 
		<label>Produtor/Ex</label> 
		<select class="form-control sel2" name="produtorsete" id="produtorsete"  style="width:100%;"> 
		<?php 
			$query = $pdo->query("SELECT * FROM locadores order by apelido desc");
			$res = $query->fetchAll(PDO::FETCH_ASSOC);
			for($i=0; $i < @count($res); $i++){
				foreach ($res[$i] as $key => $value){}

					?>	
				<option value="<?php echo $res[$i]['apelido'] ?>"><?php echo $res[$i]['apelido'] ?></option>

			<?php } ?>
		</select>
	</div>						
</div>

<div class="col-md-2">						
	<div class="form-group"> 
		<label>Produto</label> 
		<input type="text" class="form-control" name="produtosete" id="produtosete" placeholder="o.e breu,óleo copaíba.."> 
	</div>						
</div>

<div class="col-md-2">						
	<div class="form-group"> 
		<label>Código Eb.</label> 
		<input type="text" class="form-control" name="embsete" id="embsete" placeholder="CO000.."> 
	</div>						
</div>

<div class="col-md-2">						
	<div class="form-group"> 
		<label>Peso Bruto(kg)</label> 
		<input type="text" class="form-control" name="brutosete" id="brutosete" placeholder="00.0"> 
	</div>						
</div>

<div class="col-md-2">						
	<div class="form-group"> 
		<label>Peso Liq(kg)</label> 
		<input type="text" class="form-control" name="liqsete" id="liqsete" placeholder="00.0"> 
	</div>						
</div>

<div class="col-md-2">						
	<div class="form-group"> 
		<label>Valor por kg(R$)</label> 
		<input type="text" class="form-control" name="valorsete" id="valorsete" placeholder="00.0"> 
	</div>						
</div>





</div>


			

	  </div>
    </div>
  </div>


</div><!--final acordion-->

















		

					<div class="row">

						<!--<div class="col-md-12">
							<div class="form-group"> 
								<label>OBS <small>(Max 500 Caracteres)</small></label> 
								<textarea maxlength="500" type="text" class="form-control" name="obs" id="obs"> </textarea>
							</div>
						</div>-->


						<div class="col-md-3" align="right"  style="left:660px; position:relative; margin-top:;">						
							<div class="form-group"> 
								<label>Valor Total(R$)</label> 
								<input type="text" class="form-control" name="total" id="total" > 
							</div>						
						</div>

						

					</div>				
					

					<br>
					<input type="hidden" name="id" id="id"> 
					<small><div id="mensagem" align="center" class="mt-3"></div></small>					

				</div>


				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Salvar</button>
				</div>






				



			</form>

		</div>
	</div>
</div>

<script>
    // Adicionando evento de change nos inputs
    document.getElementById("liquido").addEventListener("change", calcularValorPagar);
    document.getElementById("valor").addEventListener("change", calcularValorPagar);

    function calcularValorPagar() {
        var liquido = document.getElementById("liquido").value;
        var valor = document.getElementById("valor").value;
        var pagar = liquido * valor;
        document.getElementById("pagar").value = pagar;
    }
</script>

<script>
															// // Obter referências para os inputs e output
														const pagoInput = document.getElementById('valor');
														const pagodoisInput = document.getElementById('valordois');
														const pagotresInput = document.getElementById('valortres');
														const pagoquatroInput = document.getElementById('valorqua');
														const pagocincoInput = document.getElementById('valorcinco');
														const pagoseisInput = document.getElementById('valorseis');
														const pagoseteInput = document.getElementById('valorsete');
														const totalObraOutput = document.getElementById('total');

														// Adicionar um event listener para quando o usuário alterar algum input
														document.addEventListener('change', function () {
														// Obter os valores dos inputs e somá-los
														const pagoValue = parseFloat(pagoInput.value) || 0;
														const pagodoisValue = parseFloat(pagodoisInput.value) || 0;
														const pagotresValue = parseFloat(pagotresInput.value) || 0;
														const pagoquatroValue = parseFloat(pagoquatroInput.value) || 0;
														const pagocincoValue = parseFloat(pagocincoInput.value) || 0;
														const pagoseisValue = parseFloat(pagoseisInput.value) || 0;
														const pagoseteValue = parseFloat(pagoseteInput.value) || 0;
														const totalValue = pagoValue + pagodoisValue + pagotresValue + pagoquatroValue + pagocincoValue + pagoseisValue + pagoseteValue;

														// Exibir o resultado no output
														totalObraOutput.value = totalValue.toFixed(2);
														});

														</script>	






<!-- ModalMostrar -->
<div class="modal fade" id="modalMostrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id=""><span id=""> </span> <small><span class="ml-4"><span id=""> </span> </span> </small>Lote Criado</h4>
				<button id="btn-fechar-excluir" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
				<div class="modal-body">	
					
				<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<!--<div class="col-md-6">							
							<span><b>Responsavel:</b></span>
							<span id="corretor_mostrar"></span>							
						</div>-->
						<div class="col-md-6">							
								<span><b>Data de Cadastro: </b></span>
								<span id="data_cadastro_mostrar"></span>
							</div>
							<div class="col-md-6">							
							<span><b>Nº da placa/Barco: </b></span>
							<span id="placa_mostrar"></span>							
						</div>
					
					</div>
					


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						
						<div class="col-md-12">							
								<span><b>Nome da Empressa: </b></span><br>
								<span id="empressa_mostrar"></span>							
						</div>	

					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						
						
						<div class="col-md-6">							
							<span><b>Origem: </b></span>
							<span id="origem_mostrar"></span>							
						</div>

						<div class="col-md-6">							
							<span><b>Destino: </b></span>
							<span id="destino_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Numero Lote: </b></span>
							<span id="numero_mostrar"></span>							
						</div>
						
						<div class="col-md-6">							
							<span><b>Numero Nota fiscal: </b></span>
							<span id="nota_mostrar"></span>							
						</div>
					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-12">							
							<span><b>Cliente - CPF / CNPJ - Inscrição Estadual - Telefone: </b></span><br>
							<span id="dono_mostrar"></span>							
						</div>
					
					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-12">							
							<span><b>Endereço Pessoa Física:</b></span><br>
							<span id="fisica_mostrar"></span>							
						</div>
					
					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-12">							
							<span><b>Endereço Pessoa Jurídica:</b></span><br>
							<span id="juridica_mostrar"></span>							
						</div>
					
					</div>



					<!--item1-->
					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>(Item 1) </b></span><br>	
						<div class="col-md-4">						
							<span><b>Produtor: </b></span>
							<span id="produtor_mostrar"></span>
						</div>								
						<div class="col-md-4">							
							<span><b>Produto: </b></span>
							<span id="produto_mostrar"></span>							
						</div>
						<div class="col-md-4">							
								<span><b>Código Eb.: </b></span>
								<span id="emb_mostrar"></span>							
							</div>
					</div>		


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						
						<div class="col-md-4">							
							<span><b>Peso bruto (kg): </b></span>
							<span id="bruto_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Peso Liquido (kg): </b></span>
							<span id="liq_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Valor por kg(R$): </b></span>
							<span id="valor_mostrar"></span>							
						</div>
					</div>
					<!--item1-->

					<!--item2-->
					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>(Item 2) </b></span><br>	
						<div class="col-md-4">						
							<span><b>Produtor: </b></span>
							<span id="produtordois_mostrar"></span>
						</div>								
						<div class="col-md-4">							
							<span><b>Produto: </b></span>
							<span id="produtodois_mostrar"></span>							
						</div>
						<div class="col-md-4">							
								<span><b>Código Eb.: </b></span>
								<span id="embdois_mostrar"></span>							
							</div>
					</div>		


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						
						<div class="col-md-4">							
							<span><b>Peso bruto (kg): </b></span>
							<span id="brutodois_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Peso Liquido (kg): </b></span>
							<span id="liqdois_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Valor por kg(R$): </b></span>
							<span id="valordois_mostrar"></span>							
						</div>
					</div>
					<!--item2-->


					<!--item3-->
					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>(Item 3) </b></span><br>	
						<div class="col-md-4">						
							<span><b>Produtor: </b></span>
							<span id="produtortres_mostrar"></span>
						</div>								
						<div class="col-md-4">							
							<span><b>Produto: </b></span>
							<span id="produtotres_mostrar"></span>							
						</div>
						<div class="col-md-4">							
								<span><b>Código Eb.: </b></span>
								<span id="embtres_mostrar"></span>							
							</div>
					</div>		


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						
						<div class="col-md-4">							
							<span><b>Peso bruto (kg): </b></span>
							<span id="brutotres_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Peso Liquido (kg): </b></span>
							<span id="liqtres_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Valor por kg(R$): </b></span>
							<span id="valortres_mostrar"></span>							
						</div>
					</div>
					<!--item3-->


					<!--item4-->
					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>(Item 4) </b></span><br>	
						<div class="col-md-4">						
							<span><b>Produtor: </b></span>
							<span id="produtorqua_mostrar"></span>
						</div>								
						<div class="col-md-4">							
							<span><b>Produto: </b></span>
							<span id="produtoqua_mostrar"></span>							
						</div>
						<div class="col-md-4">							
								<span><b>Código Eb.: </b></span>
								<span id="embqua_mostrar"></span>							
							</div>
					</div>		


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						
						<div class="col-md-4">							
							<span><b>Peso bruto (kg): </b></span>
							<span id="brutoqua_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Peso Liquido (kg): </b></span>
							<span id="liqqua_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Valor por kg(R$): </b></span>
							<span id="valorqua_mostrar"></span>							
						</div>
					</div>
					<!--item4-->


					<!--item5-->
					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>(Item 5) </b></span><br>	
						<div class="col-md-4">						
							<span><b>Produtor: </b></span>
							<span id="produtorcinco_mostrar"></span>
						</div>								
						<div class="col-md-4">							
							<span><b>Produto: </b></span>
							<span id="produtocinco_mostrar"></span>							
						</div>
						<div class="col-md-4">							
								<span><b>Código Eb.: </b></span>
								<span id="embcinco_mostrar"></span>							
							</div>
					</div>		


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						
						<div class="col-md-4">							
							<span><b>Peso bruto (kg): </b></span>
							<span id="brutocinco_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Peso Liquido (kg): </b></span>
							<span id="liqcinco_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Valor por kg(R$): </b></span>
							<span id="valorcinco_mostrar"></span>							
						</div>
					</div>
					<!--item5-->


					<!--item6-->
					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>(Item 6) </b></span><br>	
						<div class="col-md-4">						
							<span><b>Produtor: </b></span>
							<span id="produtorseis_mostrar"></span>
						</div>								
						<div class="col-md-4">							
							<span><b>Produto: </b></span>
							<span id="produtoseis_mostrar"></span>							
						</div>
						<div class="col-md-4">							
								<span><b>Código Eb.: </b></span>
								<span id="embseis_mostrar"></span>							
							</div>
					</div>		


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						
						<div class="col-md-4">							
							<span><b>Peso bruto (kg): </b></span>
							<span id="brutoseis_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Peso Liquido (kg): </b></span>
							<span id="liqseis_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Valor por kg(R$): </b></span>
							<span id="valorseis_mostrar"></span>							
						</div>
					</div>
					<!--item6-->


					<!--item7-->
					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>(Item 7) </b></span><br>	
						<div class="col-md-4">						
							<span><b>Produtor: </b></span>
							<span id="produtorsete_mostrar"></span>
						</div>								
						<div class="col-md-4">							
							<span><b>Produto: </b></span>
							<span id="produtosete_mostrar"></span>							
						</div>
						<div class="col-md-4">							
								<span><b>Código Eb.: </b></span>
								<span id="embsete_mostrar"></span>							
							</div>
					</div>		


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						
						<div class="col-md-4">							
							<span><b>Peso bruto (kg): </b></span>
							<span id="brutosete_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Peso Liquido (kg): </b></span>
							<span id="liqsete_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Valor por kg(R$): </b></span>
							<span id="valorsete_mostrar"></span>							
						</div>
					</div>
					<!--item7-->
					
					





					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-12">							
							<span><b>Valor Total(R$):</b></span>
							<span id="total_mostrar"></span>							
						</div>
					
					</div>


					

					


					<div class="row">
						<div class="col-md-12" align="center">		
							<img  width="200px" id="target_mostrar">	
						</div>
					</div>


					<div class="modal-footer">
					
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						<button id="btnExportarPDF" type="button" class="btn btn-primary">Exportar PDF</button>
						<button id="btn-gerar-qrcode" type="button" class="btn btn-primary" onclick="gerarQRCode()">Gerar QR Code</button>

					</div>	
					
								

				</div>


		</div>
	</div>
</div>



<script>

document.getElementById("btnExportarPDF").addEventListener("click", function () {
    var doc = new jsPDF();

    var data_cadastro_mostrar = document.getElementById("data_cadastro_mostrar").textContent;
    var placa_mostrar = document.getElementById("placa_mostrar").textContent;
    var empressa_mostrar = document.getElementById("empressa_mostrar").textContent;
    var origem_mostrar = document.getElementById("origem_mostrar").textContent;
    var destino_mostrar = document.getElementById("destino_mostrar").textContent;
    var numero_mostrar = document.getElementById("numero_mostrar").textContent;
    var nota_mostrar = document.getElementById("nota_mostrar").textContent;
	var dono_mostrar = document.getElementById("dono_mostrar").textContent;
	var fisica_mostrar = document.getElementById("fisica_mostrar").textContent;
	var juridica_mostrar = document.getElementById("juridica_mostrar").textContent;

	var produtor_mostrar = document.getElementById("produtor_mostrar").textContent;
	var produto_mostrar = document.getElementById("produto_mostrar").textContent;
	var emb_mostrar = document.getElementById("emb_mostrar").textContent;
	var bruto_mostrar = document.getElementById("bruto_mostrar").textContent;
	var liq_mostrar = document.getElementById("liq_mostrar").textContent;
	var valor_mostrar = document.getElementById("valor_mostrar").textContent;

	var produtordois_mostrar = document.getElementById("produtordois_mostrar").textContent;
	var produtodois_mostrar = document.getElementById("produtodois_mostrar").textContent;
	var embdois_mostrar = document.getElementById("embdois_mostrar").textContent;
	var brutodois_mostrar = document.getElementById("brutodois_mostrar").textContent;
	var liqdois_mostrar = document.getElementById("liqdois_mostrar").textContent;
	var valordois_mostrar = document.getElementById("valordois_mostrar").textContent;

	var produtortres_mostrar = document.getElementById("produtortres_mostrar").textContent;
	var produtotres_mostrar = document.getElementById("produtotres_mostrar").textContent;
	var embtres_mostrar = document.getElementById("embtres_mostrar").textContent;
	var brutotres_mostrar = document.getElementById("brutotres_mostrar").textContent;
	var liqtres_mostrar = document.getElementById("liqtres_mostrar").textContent;
	var valortres_mostrar = document.getElementById("valortres_mostrar").textContent;

	var produtorqua_mostrar = document.getElementById("produtorqua_mostrar").textContent;
	var produtoqua_mostrar = document.getElementById("produtoqua_mostrar").textContent;
	var embqua_mostrar = document.getElementById("embqua_mostrar").textContent;
	var brutoqua_mostrar = document.getElementById("brutoqua_mostrar").textContent;
	var liqqua_mostrar = document.getElementById("liqqua_mostrar").textContent;
	var valorqua_mostrar = document.getElementById("valorqua_mostrar").textContent;

	var produtorcinco_mostrar = document.getElementById("produtorcinco_mostrar").textContent;
	var produtocinco_mostrar = document.getElementById("produtocinco_mostrar").textContent;
	var embcinco_mostrar = document.getElementById("embcinco_mostrar").textContent;
	var brutocinco_mostrar = document.getElementById("brutocinco_mostrar").textContent;
	var liqcinco_mostrar = document.getElementById("liqcinco_mostrar").textContent;
	var valorcinco_mostrar = document.getElementById("valorcinco_mostrar").textContent;

	var produtorseis_mostrar = document.getElementById("produtorseis_mostrar").textContent;
	var produtoseis_mostrar = document.getElementById("produtoseis_mostrar").textContent;
	var embseis_mostrar = document.getElementById("embseis_mostrar").textContent;
	var brutoseis_mostrar = document.getElementById("brutoseis_mostrar").textContent;
	var liqseis_mostrar = document.getElementById("liqseis_mostrar").textContent;
	var valorseis_mostrar = document.getElementById("valorseis_mostrar").textContent;

	var produtorsete_mostrar = document.getElementById("produtorsete_mostrar").textContent;
	var produtosete_mostrar = document.getElementById("produtosete_mostrar").textContent;
	var embsete_mostrar = document.getElementById("embsete_mostrar").textContent;
	var brutosete_mostrar = document.getElementById("brutosete_mostrar").textContent;
	var liqsete_mostrar = document.getElementById("liqsete_mostrar").textContent;
	var valorsete_mostrar = document.getElementById("valorsete_mostrar").textContent;

	var total_mostrar = document.getElementById("total_mostrar").textContent;


    doc.text("data_cadastro_mostrar: " + data_cadastro_mostrar, 10, 10);
    doc.text("placa_mostrar: " + placa_mostrar, 10, 20);
    doc.text("empressa_mostrar: " + empressa_mostrar, 10, 30);
    doc.text("origem_mostrar: " + origem_mostrar, 10, 40);
    doc.text("destino_mostrar: " + destino_mostrar, 10, 50);
    doc.text("numero_mostrar: " + numero_mostrar, 10, 60);
    doc.text("nota_mostrar: " + nota_mostrar, 10, 70);
	doc.text("dono_mostrar: " + dono_mostrar, 10, 80);
	doc.text("fisica_mostrar: " + fisica_mostrar, 10, 90);
	doc.text("juridica_mostrar: " + juridica_mostrar, 10, 100);

	doc.text("produtor: " + produtor_mostrar, 10, 110);
	doc.text("produto: " + produto_mostrar, 10, 120);
	doc.text("emb: " + emb_mostrar, 10, 130);
	doc.text("bruto: " + bruto_mostrar, 10, 140);
	doc.text("liq: " + liq_mostrar, 10, 150);
	doc.text("valor: " + valor_mostrar, 10, 160);

	doc.text("produtor: " + produtordois_mostrar, 10, 170);
	doc.text("produto: " + produtodois_mostrar, 10, 180);
	doc.text("emb: " + embdois_mostrar, 10, 190);
	doc.text("bruto: " + brutodois_mostrar, 10, 200);
	doc.text("liq: " + liqdois_mostrar, 10, 210);
	doc.text("valor: " + valordois_mostrar, 10, 220);

	doc.addPage()

	doc.text("produtor: " + produtortres_mostrar, 10, 10);
	doc.text("produto: " + produtotres_mostrar, 10, 20);
	doc.text("emb: " + embtres_mostrar, 10, 30);
	doc.text("bruto: " + brutotres_mostrar, 10, 40);
	doc.text("liq: " + liqtres_mostrar, 10, 50);
	doc.text("valor: " + valortres_mostrar, 10, 60);

	doc.text("produtor: " + produtorqua_mostrar, 10, 70);
	doc.text("produto: " + produtoqua_mostrar, 10, 80);
	doc.text("emb: " + embqua_mostrar, 10, 90);
	doc.text("bruto: " + brutoqua_mostrar, 10, 100);
	doc.text("liq: " + liqqua_mostrar, 10, 110);
	doc.text("valor: " + valorqua_mostrar, 10, 120);

	doc.text("produtor: " + produtorcinco_mostrar, 10, 130);
	doc.text("produto: " + produtocinco_mostrar, 10, 140);
	doc.text("emb: " + embcinco_mostrar, 10, 370);
	doc.text("bruto: " + brutocinco_mostrar, 10, 150);
	doc.text("liq: " + liqcinco_mostrar, 10, 160);
	doc.text("valor: " + valorcinco_mostrar, 10, 170);

	doc.addPage()

	doc.text("produtor: " + produtorseis_mostrar, 10, 10);
	doc.text("produto: " + produtoseis_mostrar, 10, 20);
	doc.text("emb: " + embseis_mostrar, 10, 30);
	doc.text("bruto: " + brutoseis_mostrar, 10, 40);
	doc.text("liq: " + liqseis_mostrar, 10, 50);
	doc.text("valor: " + valorseis_mostrar, 10, 60);

	doc.text("produtor: " + produtorsete_mostrar, 10, 70);
	doc.text("produto: " + produtosete_mostrar, 10, 80);
	doc.text("emb: " + embsete_mostrar, 10, 90);
	doc.text("bruto: " + brutosete_mostrar, 10, 100);
	doc.text("liq: " + liqsete_mostrar, 10, 110);
	doc.text("valor: " + valorsete_mostrar, 10, 120);

    doc.save("resultados.pdf");
  });

</script>

<script>

</script>


<script src="qrcode.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/qrcodejs@1.0.0/qrcode.min.js"></script>

<script>
  function gerarQRCode() {
	var produto = document.getElementById("produto_mostrar").textContent;
	var produtor = document.getElementById("produtor_mostrar").textContent;
	var avaliacao = document.getElementById("avaliacao_mostrar").textContent;
	var local = document.getElementById("local_mostrar").textContent;
	var bruto = document.getElementById("bruto_mostrar").textContent;
	var liquido = document.getElementById("liquido_mostrar").textContent;
	var reprovado = document.getElementById("reprovado_mostrar").textContent;
	var valor = document.getElementById("valor_mostrar").textContent;

	var textoQRCode = "Produto: " + produto + " Produtor: " + produtor + " Avaliação da Coleta: " + avaliacao + " Locais de Coleta: " + local + " Peso bruto (kg): " + bruto + " Peso Liquido (kg): " + liquido + " Reprovado (kg): " + reprovado + " Valor por kg (R$): " + valor;

	var qrcode = new QRCode("qrcode", {
		text: textoQRCode,
		width: 200,
		height: 200,
		colorDark : "#000000",
		colorLight : "#ffffff",
		correctLevel : QRCode.CorrectLevel.H
	});

	var canvas = document.getElementById("qrcode").getElementsByTagName("canvas")[0];

	var pdf = new jsPDF('p', 'mm', 'a4');
	pdf.addImage(canvas.toDataURL("image/png"), "PNG", 10, 10);
	pdf.save("qrcode.pdf");
}
</script>

	<!-- Modal Arquivos -->
	<div class="modal fade" id="modalArquivos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="tituloModal">Gestão de Arquivos - <span id="nome-arquivo"> </span></h4>
					<button id="btn-fechar-arquivos" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form id="form-arquivos" method="post">
					<div class="modal-body">

						<div class="row">
							<div class="col-md-8">						
								<div class="form-group"> 
									<label>Arquivo</label> 
									<input type="file" name="arquivo_conta" onChange="carregarImgArquivos();" id="arquivo_conta">
								</div>	
							</div>
							<div class="col-md-4" style="margin-top:-10px">	
								<div id="divImgArquivos">
									<img src="images/arquivos/sem-foto.png"  width="60px" id="target-arquivos">									
								</div>					
							</div>




						</div>

						<div class="row" style="margin-top:-40px">
							<div class="col-md-8">
								<input type="text" class="form-control" name="nome-arq"  id="nome-arq" placeholder="Nome do Arquivo * " required>
							</div>

							<div class="col-md-4">										 
								<button type="submit" class="btn btn-primary">Inserir</button>
							</div>
						</div>

						<hr>

						<small><div id="listar-arquivos"></div></small>

						<br>
						<small><div align="center" id="mensagem-arquivo"></div></small>

						<input type="hidden" class="form-control" name="id-arquivo"  id="id-arquivo">


					</div>
				</form>
			</div>
		</div>





<script type="text/javascript">var pag = "<?=$pag?>"</script>
<script src="js/ajax.js"></script>


<script type="text/javascript">
	$(document).ready(function() {
		$('.sel2').select2({
			dropdownParent: $('#modalForm')
		});
	});
</script>





<script type="text/javascript">
	function carregarImg() {
		var target = document.getElementById('target');
		var file = document.querySelector("#foto").files[0];

		var reader = new FileReader();

		reader.onloadend = function () {
			target.src = reader.result;
		};

		if (file) {
			reader.readAsDataURL(file);

		} else {
			target.src = "";
		}
	}
</script>



<script>
	$(document).ready(function() {
		$('#doc').mask('000.000.000-00');
		$('#doc').attr('placeholder','CPF');

		$('#pessoa').change(function(){
			if($(this).val() == 'Física'){
				$('#doc').mask('000.000.000-00');
				$('#doc').attr('placeholder','CPF');
				
			}else{
				$('#doc').mask('00.000.000/0000-00');
				$('#doc').attr('placeholder','CNPJ');
				
				
			}
		});


	});

</script>



		<script type="text/javascript">
			function carregarImgArquivos() {
				var target = document.getElementById('target-arquivos');
				var file = document.querySelector("#arquivo_conta").files[0];

				var arquivo = file['name'];
				resultado = arquivo.split(".", 2);

				if(resultado[1] === 'pdf'){
					$('#target-arquivos').attr('src', "images/pdf.png");
					return;
				}

				if(resultado[1] === 'rar' || resultado[1] === 'zip'){
					$('#target-arquivos').attr('src', "images/rar.png");
					return;
				}

				if(resultado[1] === 'doc' || resultado[1] === 'docx' || resultado[1] === 'txt'){
					$('#target-arquivos').attr('src', "images/word.png");
					return;
				}


				if(resultado[1] === 'xlsx' || resultado[1] === 'xlsm' || resultado[1] === 'xls'){
					$('#target-arquivos').attr('src', "images/excel.png");
					return;
				}


				if(resultado[1] === 'xml'){
					$('#target-arquivos').attr('src', "images/xml.png");
					return;
				}




				var reader = new FileReader();

				reader.onloadend = function () {
					target.src = reader.result;
				};

				if (file) {
					reader.readAsDataURL(file);

				} else {
					target.src = "";
				}
			}
		</script>




<script type="text/javascript">
			$("#form-arquivos").submit(function () {
				event.preventDefault();
				var formData = new FormData(this);

				$.ajax({
					url: pag + "/arquivos.php",
					type: 'POST',
					data: formData,

					success: function (mensagem) {
						$('#mensagem-arquivo').text('');
						$('#mensagem-arquivo').removeClass()
						if (mensagem.trim() == "Inserido com Sucesso") {                    
						//$('#btn-fechar-arquivos').click();
						$('#nome-arq').val('');
						$('#arquivo_conta').val('');
						$('#target-arquivos').attr('src','images/arquivos/sem-foto.png');
						listarArquivos();
					} else {
						$('#mensagem-arquivo').addClass('text-danger')
						$('#mensagem-arquivo').text(mensagem)
					}

				},

				cache: false,
				contentType: false,
				processData: false,

			});

			});
		</script>



		<script type="text/javascript">
			function listarArquivos(){
				var id = $('#id-arquivo').val();	
				$.ajax({
					url: pag + "/listar-arquivos.php",
					method: 'POST',
					data: {id},
					dataType: "text",

					success:function(result){
						$("#listar-arquivos").html(result);
					}
				});
			}

		</script>