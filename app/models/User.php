<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
class User extends Eloquent implements UserInterface, RemindableInterface {
	use UserTrait, RemindableTrait;

	protected $table    = 'users';
	protected $hidden   = ['password', 'remember_token'];
	protected $fillable = ['email', 'password'];

	public static function create(array $data) {
		$data['password'] = Hash::make($data['password']);
		return parent::create($data);
	}

}
