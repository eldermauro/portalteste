<?php 
require_once("verificar.php");
require_once("../conexao.php");

$total_corretores = 0;
$total_compradores = 0;
$total_vendedores = 0;
$total_locadores = 0;
$total_locatarios = 0;
$totalTarefasHoje = 0;
$totalTarefasConcluidasHoje = 0;
$porcentagemTarefas = 0;

$saldoDia = 0;
$saldoCaixaDia = 0;
$saldoDiaF = 0;
$saldoCaixaDiaF = 0;
$classe_saldo_caixa_dia = 'fundo-verde';

$contasReceberVencidas = 0;
$contasPagarVencidas = 0;
$contasReceberHoje = 0;
$contasPagarHoje = 0;
$contasReceberPendentes = 0;
$totalContasPagasHoje = 0;
$totalContasRecebidasHoje = 0;
$porcentagemReceber = 0;
$porcentagemPagar = 0;
$totalContasPgHoje = 0;
$totalContasRbHoje = 0;

$total_extrativistas = 0;
$total_lote = 0;
$total_coleta = 0;
$total_locais = 0;
$total_produtos = 0;
$total_usuarios = 0;
$total_bairros = 0;
$total_manteiga = 0;

$query = $pdo->query("SELECT * FROM usuarios WHERE nivel = 'Extrativista' and ativo = 'Sim'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_extrativistas = @count($res);

$query = $pdo->query("SELECT * FROM lote");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_lote = @count($res);

$query = $pdo->query("SELECT * FROM coleta");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_coleta = @count($res);

$query = $pdo->query("SELECT * FROM locais");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_locais = @count($res);

$query = $pdo->query("SELECT * FROM tipos");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_produtos = @count($res);

$query = $pdo->query("SELECT * FROM usuarios");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_usuarios = @count($res);



$query = $pdo->query("SELECT * FROM compradores");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_compradores = @count($res);


$query = $pdo->query("SELECT * FROM vendedores");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_vendedores = @count($res);

$query = $pdo->query("SELECT * FROM locadores");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_locadores = @count($res);

$query = $pdo->query("SELECT * FROM locatarios");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_locatarios = @count($res);

$query = $pdo->query("SELECT * FROM bairros");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_bairros = @count($res);

$query = $pdo->query("SELECT * FROM manteiga");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_manteiga = @count($res);


$query = $pdo->query("SELECT * FROM tarefas where data = curDate() and usuario = '$id_usu'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$totalTarefasHoje = @count($res);

$query = $pdo->query("SELECT * FROM tarefas where data = curDate() and usuario = '$id_usu' and status = 'Concluída'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$totalTarefasConcluidasHoje = @count($res);

if($totalTarefasConcluidasHoje > 0 and $totalTarefasHoje > 0){
	$porcentagemTarefas = ($totalTarefasConcluidasHoje / $totalTarefasHoje) * 100;

}









 ?>


<div class="main-page">
			<div class="col_3">

			<a href="index.php?pagina=usuarios">	
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users user2 icon-rounded"></i>
                    <div class="stats">
					<h5><strong><?php echo $total_usuarios ?></strong></h5>
                      <span>Gestores Pla.</span>
                    </div>
                </div>
        	</div>
        	</a>

        	<a href="index.php?pagina=compradores">	
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-user user1 icon-rounded"></i>
                    <div class="stats">
					<h5><strong><?php echo $total_compradores ?></strong></h5>
                      <span>Clientes</span>
                    </div>
                </div>
        	</div>
        	</a>
        	<a href="index.php?pagina=vendedores">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users user2 icon-rounded"></i>
                    <div class="stats">
					<h5><strong><?php echo $total_vendedores ?></strong></h5>
                      <span>Ajudantes</span>
                    </div>
                </div>
        	</div>
        	</a>
        	<a href="index.php?pagina=locatarios">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-user dollar1 icon-rounded"></i>
                    <div class="stats">
					<h5><strong><?php echo $total_locadores ?></strong></h5>
                      <span>Fornecedores</span>
                    </div>
                </div>
        	 </div>
        	 </a>
        	<a href="index.php?pagina=lote">
        	<div class="col-md-3 widget">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-cube dollar2 icon-rounded"></i>
                    <div class="stats">
					<h5><strong><?php echo $total_lote ?></strong></h5>
                      <span>Lotes Criados</span>
                    </div>
                </div>
        	 </div>
        	</a>

        	<a href="index.php?pagina=coleta">	
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                   <i class="pull-left fa fa-tint dollar2 icon-rounded"></i>
                    <div class="stats">
					<h5><strong><?php echo $total_coleta ?></strong></h5>
                      <span>Coletas Rec.</span>
                    </div>
                </div>
        	</div>
        	</a>

        	<a href="index.php?pagina=locais">	
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                   <i class="pull-left fa fa-leaf dollar2  icon-rounded"></i>
                    <div class="stats">
					<h5><strong><?php echo $total_locais ?></strong></h5>
                      <span>Locais de Col.</span>
                    </div>
                </div>
        	</div>
        	</a>

        	<a href="index.php?pagina=tipos">	
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                   <i class="pull-left fa fa-pagelines dollar2  icon-rounded"></i>
                    <div class="stats">
					<h5><strong><?php echo $total_produtos ?></strong></h5>
                      <span>Produtos</span>
                    </div>
                </div>
        	</div>
        	</a>

        	<a href="index.php?pagina=pagar">	
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                   <i class="pull-left fa fa-dollar dollar2 icon-rounded "></i>
                    <div class="stats">
					<h5><strong><?php echo $total_locais ?></strong></h5>
                      <span>Pagamentos</span>
                    </div>
                </div>
        	</div>
        	</a>


        	 <a href="index.php?pagina=movimentacoes">
        	<div class="col-md-3 widget">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-truck user2 icon-rounded"></i>
                    <div class="stats">
					<h5><strong><?php echo $total_locais ?></strong></h5>
                      <span>Logistica</span>
                    </div>
                </div>
        	 </div>
        	 </a>
        


        	<div class="clearfix"> </div>
		</div>




	<div class="row-one widgettable">
			<div class="col-md-8 content-top-2 card">


				<div class="agileinfo-cdr">
					<div class="card-header">
					<div>
					<h3>Dados Futuros</h3>
					<canvas id="myChart"></canvas>
					</div>


                        
                    </div>
					
						<div id="Linegraph" style="width: 98%; height: 0px">
						</div>
						
				</div>
			</div>
			

			<div class="col-md-4 stat">

				<a href="index.php?pagina=bairros">
				<div class="content-top-1">
					<div class="col-md-6 top-content">
						<h5>Processo oléos</h5>
						<label><?php echo $total_bairros ?></label>
					</div>
					<div class="col-md-6 top-content1">	   
						<div id="demo-pie-1" class="pie-title-center" data-percent="<?php echo $porcentagemTarefas ?>"> <span class="pie-value"></span> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</a>

			<a href="index.php?pagina=bairros">
				<div class="content-top-1">
					<div class="col-md-6 top-content">
						<h5>Processo manteiga</h5>
						<label><?php echo $total_manteiga ?></label>
					</div>
					<div class="col-md-6 top-content1">	   
						<div id="demo-pie-1" class="pie-title-center" data-percent="<?php echo $porcentagemTarefas ?>"> <span class="pie-value"></span> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</a>


			

				<!--
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Reviews</h5>
					<label>2262+</label>
				</div>
				<div class="col-md-6 top-content1">	   
					<div id="demo-pie-2" class="pie-title-center" data-percent="75"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"> </div>
				</div>
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Visitors</h5>
					<label>12589+</label>
				</div>
				<div class="col-md-6 top-content1">	   
					<div id="demo-pie-3" class="pie-title-center" data-percent="90"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"> </div>
				</div>
			</div>
			
			<div class="clearfix"> </div>
		</div>-->
				





		<!--
				<div class="charts">
					<div class="col-md-4 charts-grids widget">
						<div class="card-header">
							<h3>Bar chart</h3>
						</div>
						
						<div id="container" style="width: 100%; height:270px;">
							<canvas id="canvas"></canvas>
						</div>
						<button id="randomizeData">Randomize Data</button>
						<button id="addDataset">Add Dataset</button>
						<button id="removeDataset">Remove Dataset</button>
						<button id="addData">Add Data</button>
						<button id="removeData">Remove Data</button>
						
					</div>
					
					<div class="col-md-4 charts-grids widget states-mdl">
						<div class="card-header">
							<h3>Column & Line Graph</h3>
						</div>
						<div id="chartdiv"></div>
					</div>
			
					<div class="clearfix"> </div>
				</div>-->
				
	
	<!-- for amcharts js -->
			<script src="js/amcharts.js"></script>
			<script src="js/serial.js"></script>
			<script src="js/export.min.js"></script>
			<link rel="stylesheet" href="css/export.css" type="text/css" media="all" />
			<script src="js/light.js"></script>
	<!-- for amcharts js -->

    <script  src="js/index1.js"></script>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho'],
      datasets: [{
        label: '# Processos',
        data: [12, 19, 3, 0, 0, 0],

        borderWidth: 2
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>


	<!--
		<div class="charts">		
			<div class="mid-content-top charts-grids">
				<div class="middle-content">
						<h4 class="title">Carousel Slider</h4>-->
					<!-- start content_slider -->
				<!--	<div id="owl-demo" class="owl-carousel text-center">
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="images/slider1.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="images/slider2.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="images/slider3.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="images/slider4.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="images/slider5.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="images/slider6.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="images/slider7.jpg" alt="name">
						</div>
						
					</div>
				</div>-->
					<!--//sreen-gallery-cursual---->
	<!--		</div>
		</div>
		
		<div class="col_1">
			<div class="col-md-4 span_8">
				<div class="activity_box">
					<h2>Inbox</h2>
					<div class="scrollbar" id="style-1">
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='images/1.jpg' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">Michael Chris</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>12:05 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='images/4.jpg' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">Alexander</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>12:06 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='images/3.jpg' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">Daniel Lucas</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>01:30 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='images/2.jpg' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">Jackson Jacob</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>01:50 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='images/1.jpg' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">David Samuel</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>12:20 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
						
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='images/4.jpg' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">laura Smith</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>12:50 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<form action="#" method="post">
						<input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
						<input type="submit" value="Submit"/>		
					</form>
				</div>
			</div>
			<div class="col-md-4 span_8">
				<div class="activity_box activity_box1">
					<h3>chat</h3>
					<div class="scrollbar" id="style-3">
						<div class="activity-row activity-row1">
							<div class="col-xs-3 activity-img"><img src='images/1.jpg' class="img-responsive" alt=""/><span>06:01 AM</span></div>
							<div class="col-xs-5 activity-img1">
								<div class="activity-desc-sub">
									<h5>Michael Chris</h5>
									<p>Hello ! this is Michael chris</p>
								</div>
							</div>
							<div class="col-xs-4 activity-desc1"></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row activity-row1">
							<div class="col-xs-2 activity-desc1"></div>
							<div class="col-xs-7 activity-img2">
								<div class="activity-desc-sub1">
									<h5>Alexander</h5>
									<p>Hi,How are you ? What about our next meeting?</p>
								</div>
							</div>
							<div class="col-xs-3 activity-img"><img src='images/3.jpg' class="img-responsive" alt=""/><span>06:02 AM</span></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row activity-row1">
							<div class="col-xs-3 activity-img"><img src='images/1.jpg' class="img-responsive" alt=""/><span>06:05 AM</span></div>
							<div class="col-xs-5 activity-img1">
								<div class="activity-desc-sub">
									<h5>Michael Chris</h5>
									<p>Yeah fine, Hope you the same</p>
								</div>
							</div>
							<div class="col-xs-4 activity-desc1"></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row activity-row1">
							<div class="col-xs-2 activity-desc1"></div>
							<div class="col-xs-7 activity-img2">
								<div class="activity-desc-sub1">
									<h5>Alexander</h5>
									<p>Wow that's great</p>
								</div>
							</div>
							<div class="col-xs-3 activity-img"><img src='images/3.jpg' class="img-responsive" alt=""/><span>06:20 PM</span></div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<form action="#" method="post">
						<input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
						<input type="submit" value="Send"/>		
					</form>
				</div>
			</div>
			<div class="col-md-4 span_8">
				<div class="activity_box activity_box2">
					<h3>todo</h3>
					<div class="scrollbar" id="style-2">
						<div class="activity-row activity-row1">
							<div class="single-bottom">
								<ul>
									<li>
										<input type="checkbox"  id="brand" value="">
										<label for="brand"><span></span> Integer sollicitudin lacinia condimentum.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand1" value="">
										<label for="brand1"><span></span> ligula sit amet hendrerit init lorem.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand2" value="">
										<label for="brand2"><span></span>  Donec aliquam dolor eu augue condimentum.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand9" value="">
										<label for="brand9"><span></span>  at tristique Pain that produces no resultant.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand8" value="">
										<label for="brand8"><span></span> Nulla finibus rhoncus turpis quis tristique.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand7" value="">
										<label for="brand7"><span></span> Cupidatat non proident Praising pain.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand3" value="">
										<label for="brand3"><span></span>  libero vel elementum euismod, mauris tellus</label>
									</li>
									<li>
										<input type="checkbox"  id="brand4" value="">
										<label for="brand4"><span></span> Donec aliquam dolor eu augue condimentum.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand5" value="">
										<label for="brand5"><span></span> Orci varius natoque penatibus et magnis dis.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand6" value="">
										<label for="brand6"><span></span> parturient Dolorem ipsum quia.</label>
									</li>
									
									
								</ul>
							</div>
						</div>
					</div>
					<form action="#" method="post">
						<input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
						<input type="submit" value="Submit"/>		
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			
		</div>
				
			</div>-->