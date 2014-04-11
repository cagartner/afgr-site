@extends('layout/main')

@section('content')
	
	<!-- Banner top -->
	<section class="banner-top" id="home">	

		<div class="container">	
			{{ HTML::image('assets/img/banner-top.jpg', 'AFGR Engenharia Elétrica') }}

			<div class="forma-contato">				
				<strong>Entre em contato:</strong><br>
				<a href="#" class="btn btn-default"><span class="socicon socicon-facebook"></span> Facebook</a>
				<a href="#" class="btn btn-default"><i class="glyphicon glyphicon-envelope"></i> Contato</a>
				<a href="#" class="btn btn-default"><i class="glyphicon glyphicon-phone-alt"></i> 47 3337-3333</a>
			</div>

		</div>		

	</section>
	
	<!-- Section sobre -->
	<section class="section sobre gray" id="sobre" name="sobre">
		
		<div class="container">
			
			<div class="row">
				
				<div class="col-md-6 col-sm-6 col-xs-12">
					<hr class="hr-title">
					<h2>SOBRE NÓS</h2>

					<p>A <strong>AFGR</strong> possui atividades no ramo da Engenharia Elétrica atuando com profissionais de mais de 20 anos de experiência na área de projetos elétricos, visando satisfazer as necessidades do mercado com a melhor solução em serviços através de tecnologia utilizada e melhoria contínua dos processos e maior confiabilidade em seu sistema.</p>

					<p>Trabalhando em equipe, reunimos o melhor do conhecimento e habilidade para aprimorar constantemente o trabalho e beneficiar nossos clientes.</p>
				</div>

				<div class="col-md-6 col-sm-6 col-xs-12 sobre-media">
					{{ HTML::image('assets/img/sobre.png', 'Sobre nós') }}
				</div>

			</div>

		</div>
	
	</section>
	
	<!-- Section serviços -->
	<section class="section servicos white" id="servicos" name="servicos">
			
		<div class="container">
			
			<div class="row detalhe">
				
				<div class="col-md-4 hidden-xs hidden-sm">
					{{ HTML::image('assets/img/servico-1.png', 'Nossos serviços') }}
				</div>

				<div class="col-md-8 text-right">

					<hr class="hr-title pull-right">
					<br>
					<h2>NOSSOS SERVIÇOS</h2>
					
					<div class="row">
						
						<div class="col-md-6">
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

						<div class="col-md-6">
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

			<div id="gallery" class="row galeria">			
			 	
				<div class="col-md-3 col-sm-3 col-xs-6">
				    <a href="{{ URL::asset('assets/img/servico/1.jpg') }}" title="Projeto de Medição e Faturamento de Energia">
				        {{ HTML::image('assets/img/servico/thumb/1.png', "Projeto de Medição e Faturamento de Energia") }}
				        <br>
				       	<strong>INSPEÇÃO EM EQUIPAMENTOS ELÉTRICOS</strong>
				    </a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<a href="{{ URL::asset('assets/img/servico/2.jpg') }}" title="Inspeção em Equipamentos Elétricos">
				        {{ HTML::image('assets/img/servico/thumb/2.jpg', "Inspeção em Equipamentos Elétricos") }}
				        <br>				        
				        <strong>PROJETO DE MEDIÇÃO E FATURAMENTO DE ENERGIA</strong>
				    </a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<a href="{{ URL::asset('assets/img/servico/3.jpg') }}" title="Projeto comercial / residencial">
				        {{ HTML::image('assets/img/servico/thumb/3.png', "Projeto comercial / residencial") }}
				        <br>
				        <strong>PROJETO COMERCIAL / RESIDENCIAL</strong>
				    </a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<a href="{{ URL::asset('assets/img/servico/3.jpg') }}" title="Projeto comercial / residencial">
				        {{ HTML::image('assets/img/servico/thumb/3.png', "Projeto comercial / residencial") }}
				        <br>
				        <strong>PROJETO DE AUTOMAÇÃO</strong>
				    </a>
				</div>

			</div>

		</div>
	
	</section>
	
	<!-- Section contato -->
	<section class="section contato gray" id="contato" name="contato">
		
		<div class="container">

			<div class="row">
					
				<div class="col-md-6 col-sm-6 col-xs-12">
					<hr class="hr-title">
					<h2>ENTRE EM CONTATO</h2>

					<p>Peça um orçamento, ou simplesmente, chame-nos para conversar.</p>

					
					{{ Former::vertical_open()->rules(array(
						'name' => 'required|max:255',
						'email' => 'required|email'
					))->route('contato')->method('POST'); }}

						{{ Former::text('name', "Seu nome")->placeholder('Seu nome...')->required() }}

						{{ Former::email('email', "Seu e-mail")->placeholder('Seu e-mail...')->required() }}

						{{ Former::text('telefone', "Seu telefone")->placeholder('(XX) XXXX-XXXX')->required() }}
						
						{{ Former::textarea('mensagem', "Sua mensagem")->placeholder('Conte-nos o que você precisa...')->rows(6)->required() }}
						
						{{ Former::submit('Enviar contato')->class('btn btn-info') }}				

					{{Former::close()}}
				</div>

				<div class="col-md-6 col-sm-6 col-xs-12 text-right dados-contato">
					<ul class="list list-unstyled">
						<li class="black">47 3333-3333 <i class="glyphicon glyphicon-phone-alt"></i></li>
						<li class="black">47 3333-3333 <i class="glyphicon glyphicon-phone-alt"></i></li>
						<li class="black">47 3333-3333 <i class="glyphicon glyphicon-phone-alt"></i></li>
						<li><a href="http://www.facebook.com/afgr" target="_blank" title="Curta-nos no Facebook">facebook.com/afgr <span class="socicon socicon-facebook"></span></a></li>
						<li><a href="mailto:contato@afgr.com.br" target="_blank" title="Envia-nos um e-mail!">contato@afgr.com.br <i class="glyphicon glyphicon-envelope"></i></a></li>
					</ul>
				</div>

			</div>

		</div>

		<!-- <a href="http://www.carlosgartner.com.br" class="assinatura" target="_blank" title="Desenvolvido por Carlos A. Gartner">Carlos A Gartner</a> -->

	</section>


@stop