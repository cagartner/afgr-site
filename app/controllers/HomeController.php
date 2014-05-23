<?php

class HomeController extends BaseController {

	/**
	 * Tela inicial do site
	 * @return Response
	 */
	public function showWelcome()
	{
		// Define o framework
		Former::framework('TwitterBootstrap3');

		// Exibe view
		return View::make('home.index');
	}

	/**
	 * Tela de recebimento dos dados do formulário de contato
	 * @return Response
	 */
	public function salvaContato()
	{
		// Regras de validação
		$rules = array(
			'name'     => 'required|max:255',
			'email'    => 'required|email',
			'telefone' => 'required',
			'mensagem' => 'required'
		);

		// Cria verificação
		$validator = Validator::make(Input::all(), $rules);

		// Em caso de algum dado errado
		if ($validator->fails())
	    {
	        return Redirect::to( url('/') . '#contato' )->withErrors($validator)->withInput();
	    }

	    // Envia email
		Mail::send('emails.contato', Input::all(), function($message)
		{
		    $message->to('almir@afgr.com.br')->subject('Novo contato via site AFGR!');
		    $message->to('felipe@afgr.com.br')->subject('Novo contato via site AFGR!');
		    $message->to('graziel@afgr.com.br')->subject('Novo contato via site AFGR!');
		    $message->to('rafael@afgr.com.br')->subject('Novo contato via site AFGR!');
		    $message->to('contato@afgr.com.br')->subject('Novo contato via site AFGR!');
		});

		// Volta para home
		return Redirect::to( url('/') . '#contato' )->with('success', 'Seu contato foi recebido, em breve entraremos em contato!');
	}

}