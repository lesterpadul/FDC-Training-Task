<?php 
namespace App\Controller;

use Cake\ORM\TableRegistry;

class UsersController extends AppController{

	public $users = null;

	public function initialize(){
		parent::initialize();
		$this->users = TableRegistry::get('Users');
	}
	
	public function index(){
		$this->set($this->data);
		$this->render('home');
	}
	
	public function edit($user_id = 0){
		echo "<pre>";
		var_dump($_POST);
		$this->autoRender = false;
	}
	
	public function login(){
		$query = $this->users->query();

		$check = $this->users
					->find()
					->where
						(
							[
								"email"=>$_POST["email"],
								"password"=>$this->hash($_POST["password"])
							]
						)
					->count();

		if($check!==0):
			$this->Flash->success("Logged in!");
			$this->redirect("/users/index");
		else:
			$this->Flash->error("Incorrect login details!");
			$this->redirect("/");
		endif;

		$this->autoRender = false;
	}	

	public function hash($string) {
		$this->autoRender = false;
     	return hash('sha512', $string);
    }

}
