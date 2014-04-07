@extends('layout/main')

@section('content')
	
	<!-- Banner top -->
	<section class="banner-top">
		
		<div class="container">
				
			<div class="logo"></div>

			<div class="forma-contato">				
				<a href="#" class="btn btn-default"><i class="glyphicon glyphicon-facebook"></i> Facebook</a>
				<a href="#" class="btn btn-default"><i class="glyphicon glyphicon-envelope"></i> Contato</a>
				<a href="#" class="btn btn-default"><i class="glyphicon glyphicon-phone-alt"></i> 47 3337-3333</a>
			</div>

		</div>		

	</section>
	
	<!-- Section sobre -->
	<section class="section sobre gray">
		
		<div class="container">
			
			<div class="row">
				
				<div class="col-md-4">
					<hr class="hr-title">
					<h2>SOBRE NÓS</h2>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nobis, eum hic dolor illum animi iusto nisi voluptas molestias eaque asperiores atque voluptatem omnis ea doloremque possimus facilis quidem eveniet.</p>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, animi, officia incidunt fugit libero illo natus iure id culpa itaque sint cumque debitis nam porro aspernatur cupiditate facilis dolore nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, neque, consequuntur, ab repellendus aperiam dolorem nostrum rem aliquam libero quam recusandae ea quod aspernatur fugit debitis placeat praesentium itaque nam.</p>
				</div>

				<div class="col-md-4">
					{{ HTML::image('assets/img/sobre.png', 'Sobre nós') }}
				</div>

			</div>

		</div>

	</section>
	
	<!-- Section serviços -->
	<section class="section servicos white">
			
		<div class="container">
			
			<div class="row">
				
				<div class="col-md-4">
					{{ HTML::image('assets/img/servico-1.png', 'Nossos serviços') }}
				</div>

				<div class="col-md-8 text-right">

					<hr class="hr-title">
					<h2>NOSSOS SERVIÇOS</h2>
					
					<div class="row">
						
						<div class="col-md-4">
							<h3>Projetos elétricos:</h3>

							<ul class="list list-unstyled">
								<li><span class="blue">+</span> Residenciais</li>
								<li><span class="blue">+</span> Prediais</li>
								<li><span class="blue">+</span> Industriais</li>
								<li><span class="blue">+</span> Sistema de comando e controle de transformadores</li>
								<li><span class="blue">+</span> Sistema de monitoramento de transformadores </li>
								<li><span class="blue">+</span> Projeto de painéis elétricos em geral</li>
							</ul>
						</div>

						<div class="col-md-4">
							<h3>Montagem e manutenção:</h3>

							<ul class="list list-unstyled">
								<li><span class="blue">+</span> Montagem de painéis de comando</li>
								<li><span class="blue">+</span> Montagem/instalação de entrada de energia residencial e industrial</li>
								<li><span class="blue">+</span> Instalação e manutenção de fiação residencial e industrial</li>
							</ul>
						</div>

					</div>

				</div>

			</div>

			<div class="row">			
			 	
				<div class="col-md-3">
				    <a href="{{ URL::asset('assets/img/servico/1.png') }}" title="Serviço 1">
				        {{ HTML::image('assets/img/servico/thumb/1.png', "Serviço 1") }}
				    </a>
				</div>
				<div class="col-md-3">
					<a href="{{ URL::asset('assets/img/servico/2.png') }}" title="Serviço 2">
				        {{ HTML::image('assets/img/servico/thumb/2.png', "Serviço 2") }}
				    </a>
				</div>
				<div class="col-md-3">
					<a href="{{ URL::asset('assets/img/servico/3.png') }}" title="Serviço 3">
				        {{ HTML::image('assets/img/servico/thumb/3.png', "Serviço 3") }}
				    </a>
				</div>
				<div class="col-md-3">
					<a href="{{ URL::asset('assets/img/servico/4.png') }}" title="Serviço 4">
				        {{ HTML::image('assets/img/servico/thumb/4.png', "Serviço 4") }}
				    </a>
				</div>

			</div>

		</div>
	
	</section>
	
	<!-- Section contato -->
	<section class="section contato gray">
		
		<div class="row">
			
			<div class="col-md-6">
				
				

			</div>
			<div class="col-md-6">
				

			</div>

		</div>

	</section>

@stop