<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		Former::framework('TwitterBootstrap3');
		
		return View::make('home.index');
	}

	public function salvaContato()
	{
		$rules = array(
			'name'     => 'required|max:255',
			'email'    => 'required|email',
			'telefone' => 'required',
			'mensagem' => 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails())
	    {
	        return Redirect::to( url('/') . '#contato' )->withErrors($validator)->withInput();
	    }

	    $email = Input::all();

		Mail::send('emails.contato', $email, function($message)
		{
		    $message->to('contato@carlosgartner.com.br')->subject('Novo contato via site AFGR!');
		});

		return Redirect::to('/');
	}

}