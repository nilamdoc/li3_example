<?php

namespace app\controllers;

use lithium\security\Auth;
use app\models\Users;
use lithium\action\DispatchException;

class UsersController extends \lithium\action\Controller {

	public function index() {
		$users = Users::all();
		return compact('users');
	}

	public function view() {
		$user = Users::first($this->request->data['id']);
		return compact('user');
	}

	public function add() {
		$user = Users::create();
		if (($this->request->data) && $user->save($this->request->data)) {
			return $this->redirect(array('Users::index'));
		}
		return compact('user');
	}

	public function edit($id=null) {
		$user = Users::find($id);
		if (!$user) {
			return $this->redirect('Users::index');
		}
		if (($this->request->data) && $user->save($this->request->data)) {
			return $this->redirect(array('Users::index'));
		}
		return compact('user');
	}

	public function delete() {
		if (!$this->request->is('post') && !$this->request->is('delete')) {
			$msg = "Users::delete can only be called with http:post or http:delete.";
			throw new DispatchException($msg);
		}
		Users::find($this->request->data['id'])->delete();
		return $this->redirect('Users::index');
	}

	public function login() {
		//assume there's no problem with authentication
		$noauth = false;
		print_r(Auth::check('default', $this->request));
		//perform the authentication check and redirect on success
		if (Auth::check('default', $this->request)){
			//Redirect on successful login
			return $this->redirect('/');
		}
		//if theres still post data, and we weren't redirected above, then login failed
		if ($this->request->data){
			//Login failed, trigger the error message
			$noauth = true;
		}
		//Return noauth status
		return compact('noauth');
	}
}

?>