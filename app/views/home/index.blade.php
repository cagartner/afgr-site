@extends('layout/main')

@section('content')
	
	<!-- Banner top -->
	<section class="banner-top" id="home">	

		<div class="container">	
			{{ HTML::image('assets/img/banner-top.jpg', 'AFGR Engenharia Elétrica') }}

			<div class="forma-contato">				
				<strong>Entre em contato:</strong><br>
				<a href="http://www.facebook.com.br/afgr" class="btn btn-default"><span class="socicon socicon-facebook"></span> Facebook</a>
				<a href="#contato" class="btn btn-default"><i class="glyphicon glyphicon-envelope"></i> Contato</a>
				<a href="#contato" class="btn btn-default"><i class="glyphicon glyphicon-phone-alt"></i> 47 8822-1088</a>
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

					<p>A <strong>AFGR</strong> possui atividades no ramo da Engenharia Elétrica atuando com profissionais com mais de 20 anos de experiência na área de projetos elétricos, visando satisfazer as necessidades do mercado com a melhor solução em serviços através de tecnologia utilizada e melhoria contínua dos processos e maior confiabilidade em seu sistema.</p>

					<h3>OBJETIVO</h3>

					<p>Trabalhar em equipe e reunir o melhor do conhecimento e habilidade para aprimorar constantemente o trabalho e beneficiar nossos clientes.</p>
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
				    <a href="{{ URL::asset('assets/img/servico/inspecao.jpg') }}" title="Inspeção em Equipamentos Elétricos">
				        {{ HTML::image('assets/img/servico/thumb/inspecao.jpg', "Inspeção em Equipamentos Elétricos") }}
				        <br>
				       	<strong>INSPEÇÃO EM EQUIPAMENTOS ELÉTRICOS</strong>
				    </a>
				    <a href="{{ URL::asset('assets/img/servico/inspecao-2.jpg') }}" title="Inspeção em Equipamentos Elétricos"></a>
				    <a href="{{ URL::asset('assets/img/servico/inspecao-3.jpg') }}" title="Inspeção em Equipamentos Elétricos"></a>
				    <a href="{{ URL::asset('assets/img/servico/inspecao-4.jpg') }}" title="Inspeção em Equipamentos Elétricos"></a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<a href="{{ URL::asset('assets/img/servico/2.jpg') }}" title="PROJETO DE MEDIÇÃO E FATURAMENTO DE ENERGIA">
				        {{ HTML::image('assets/img/servico/thumb/2.jpg', "PROJETO DE MEDIÇÃO E FATURAMENTO DE ENERGIA") }}
				        <br>				        
				        <strong>PROJETO DE MEDIÇÃO E FATURAMENTO DE ENERGIA</strong>
				    </a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<a href="{{ URL::asset('assets/img/servico/projeto-comercial.jpg') }}" title="Projeto comercial / residencial">
				        {{ HTML::image('assets/img/servico/thumb/projeto-comercial.jpg', "Projeto comercial / residencial") }}
				        <br>
				        <strong>PROJETO COMERCIAL / RESIDENCIAL</strong>
				    </a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<a href="{{ URL::asset('assets/img/servico/projeto/projeto.jpg') }}" title="Projeto comercial / residencial" target="_blank">
				        {{ HTML::image('assets/img/servico/thumb/projeto.jpg', "Projeto de automação") }}
				        <br>
				        <strong>PROJETO DE AUTOMAÇÃO</strong>
				    </a>
				</div>
				<a href="{{ URL::asset('assets/img/servico/projeto/projeto-1.jpg') }}" title="Projeto de automação"></a>
				<a href="{{ URL::asset('assets/img/servico/projeto/projeto-2.jpg') }}" title="Projeto de automação"></a>
			    <a href="{{ URL::asset('assets/img/servico/projeto/projeto-3.jpg') }}" title="Projeto de automação"></a>
			    <a href="{{ URL::asset('assets/img/servico/projeto/projeto-4.jpg') }}" title="Projeto de automação"></a>
			    <a href="{{ URL::asset('assets/img/servico/projeto/projeto-5.jpg') }}" title="Projeto de automação"></a>
			    <a href="{{ URL::asset('assets/img/servico/projeto/projeto-6.jpg') }}" title="Projeto de automação"></a>
			    <a href="{{ URL::asset('assets/img/servico/projeto/projeto-7.jpg') }}" title="Projeto de automação"></a>
			    <a href="{{ URL::asset('assets/img/servico/projeto/projeto-8.jpg') }}" title="Projeto de automação"></a>
			    <a href="{{ URL::asset('assets/img/servico/projeto/projeto-9.jpg') }}" title="Projeto de automação"></a>
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
					
					@if (Session::has('success'))
						<div class="alert alert-success">
							<a class="close" data-dismiss="alert">&times;</a>
							<strong>Sucesso!</strong> {{ Session::get('success') }}.
						</div>
					@endif
					
					{{ Former::vertical_open()->rules(array(
						'name'     => 'required|max:255',
						'email'    => 'required|email',
						'telefone' => 'match:/[0-9 ()-]+/'
					))->route('contato')->method('POST'); }}

						{{ Former::text('name', "Seu nome")->placeholder('Seu nome...')->required() }}

						{{ Former::email('email', "Seu e-mail")->placeholder('Seu e-mail...')->required() }}

						{{ Former::text('telefone', "Seu telefone")
						->placeholder('(XX) XXXX-XXXX')->required()->help("Somente números, ex: 47 3333-3333") }}
						
						{{ Former::textarea('mensagem', "Sua mensagem")->placeholder('Conte-nos o que você precisa...')->rows(6)->required() }}
						
						{{ Former::submit('Enviar contato')->class('btn btn-info') }}				

					{{Former::close()}}
				</div>

				<div class="col-md-6 col-sm-6 col-xs-12 text-right dados-contato">
					<ul class="list list-unstyled">
						<li class="black">47 8822-1088 - Graziel <i class="glyphicon glyphicon-phone-alt"></i></li>
						<li class="black">47 9656-9155 - Rafael <i class="glyphicon glyphicon-phone-alt"></i></li>
						<li><a href="http://www.facebook.com/afgr" target="_blank" title="Curta-nos no Facebook">facebook.com/afgr <span class="socicon socicon-facebook"></span></a></li>
						<li><a href="mailto:contato@afgr.com.br" title="Envia-nos um e-mail!">contato@afgr.com.br <i class="glyphicon glyphicon-envelope"></i></a></li>
					</ul>

					<hr class="hr-title pull-right">
					<br>
					<br>

					<address>
					  <strong>AFGR Engenharia Elétrica.</strong><br>
					  Rua Vladimir Hersog, 130 - Cx 01<br>
					  Itoupava Central - Blumenau - SC<br>
					  CEP: 89068-233
					</address>
				</div>

			</div>

		</div>

		<!-- <a href="http://www.carlosgartner.com.br" class="assinatura" target="_blank" title="Desenvolvido por Carlos A. Gartner">Carlos A Gartner</a> -->

	</section>

@stop