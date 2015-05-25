<?php 
namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

class UsersController extends AppController{

	public $users = null;
	public $users_e = null;

	public function initialize(){
		parent::initialize();
		$this->users = TableRegistry::get('Users');
		$this->users_e = TableRegistry::get('Users')->newEntity();
	}
	
	public function index(){
		$this->set($this->data);
		$this->render('home');
	}

	public function edit($user_id = 0){
		
		$this->users_e->name = $_POST['name'];
		$this->users_e->email = $_POST['email'];
		$this->users_e->password = $this->hash($_POST['password']);
		$this->users_e->status = 1;

		$this->users->save($this->users_e);

		$this->data['session']->write('profile',$this->users_e->toArray());

		$this->redirect("/users/index");
	}

	public function logout(){
		$this->data['session']->delete('profile');
		$this->Flash->success('See you soon!');
		$this->redirect('/');
	}
	
	public function login(){
		$query = $this->users->query();

		$check = $this
					->users
					->find()
					->where
						(
							[
								"email"=>$_POST["email"],
								"password"=>$this->hash($_POST["password"])
							]
						);

		$count     = $check->count();
		$user_data = $check->first();

		if($count!==0):
			$this->data['session']->write('profile',$user_data->toArray());
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

    public function profile($id=0){
    	$id = intval($id);
    }

}
