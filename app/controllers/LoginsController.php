<?php

class LoginsController extends \BaseController {

	public function index() {
		if(Auth::check()){
			return Redirect::route('root');
		} else {
			return View::make('logins.index');
		}
	}

	public function create() {
		return View::make('logins.create');
	}

	public function store() {
		$input = [
			'email',
			'password',
			'password_confirmation'
		];

		$rules = [
			'email'                 => 'required|email|min:5|unique:users',
			'password'              => 'required|min:5|confirmed',
			'password_confirmation' => 'required|min:5'
		];

		$data      = Input::only($input);
		$validator = Validator::make($data, $rules);

		if($validator->fails()){
			return Redirect::route('register')->withErrors($validator)->withInput();
		}

		$newUser = User::create($data);
		if($newUser){
			Auth::login($newUser);
			return Redirect::route('root');
		}

	}

	public function update() {
		$input = [
			'email',
			'password'
		];

		$rules = [
				'email'    => 'required|email|min:8',
				'password' => 'required',
		];

		$data      = Input::only($input);
		$validator = Validator::make($data, $rules);

		if($validator->fails()){
			return Redirect::route('login')->withErrors($validator)->withInput();
		}

		$attempt = [
			'email'    => $data['email'],
			'password' => $data['password']
		];

		if (Auth::attempt($attempt)) {
			return Redirect::route('root');
		}

		$errors = [
			'You email or password is incorrect.'
		];

		return Redirect::route('login')->withErrors($errors)->withInput();
	}

	public function destroy() {
		if(Auth::check()){
			Auth::logout();
		}
		return Redirect::route('root');
	}

}
