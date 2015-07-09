<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;
use Cake\Core\Configure\Engine\PhpConfig;

class UsersController extends AppController
{
	public $paginate = [
        'limit' => 10,
        'order' => [
            'Users.id' => 'asc'
        ]
    ];
	public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
		$this->loadComponent('Image');
    }
	
	public function index($type=1)
    {
		$session = $this->request->session();
		
		$active = -1;
		if($session->check('filter.active')){
			$active = $session->read('filter.active');
		}
		
    	if($session->check('filter.type')){
			$type =  $session->read('filter.type');
		}
		
		if($active != -1){
			$query = $this->Users->find('all')->where(['Users.type' => $type, 'Users.active' => $active]);
		}else{
			$query = $this->Users->find('all')->where(['Users.type' => $type]);
		}
		$this->set('users', $this->paginate($query));
		 
        //$users_els = $users->toArray();
        //$this->set('users',$users_els);
		$this->layout = 'admin';
    }
    public function updatefield($id, $state, $field){
		$users = TableRegistry::get('Users');
		$entity = $users->newEntity(array('id'=>$id, $field=>$state));
		$users->save($entity);
		$this->Flash->set('Profil zaktualizowany.');
    	return $this->redirect(['controller'=>'users','action' => 'index', 1]);
	} 
	public function setfilter($type, $val){
		$session = $this->request->session();
		$session->write('filter.'.$type, $val);
		if($type == 'type'){
			return $this->redirect(['controller'=>'users','action' => 'index', $val]);
		}else{
			return $this->redirect($_SERVER['HTTP_REFERER']);
		}
	}
    public function manage($id=0)
    {
    	if($id == 0){
    		$this->set('title', 'Dodaj nowy');
    	}else{
			$user = $this->Users->get($id);
			$this->set('user', $user);
    		$this->set('title', 'Edycja wybranego elementu');
    	}
    	
    	if(!empty($this->request->data)){
    		//$this->request->data['uri'] = strtolower($this->myurl($this->request->data['name']));
			$users = TableRegistry::get('Users');
			$entity = $users->newEntity($this->request->data());
    		
    		$users->save($entity);
			
			if($_POST['type'] == 1)
				{
					if(!empty($_POST['transportType'])){
						$this->Users->resetUserCategories( $entity->id);
						$this->Users->saveUserCategories($_POST['transportType'], $entity->id);
					}
				}
				
    		$this->Flash->set('Dane użytkownika zostały zapisane pomyślnie.');
    		return $this->redirect(['controller'=>'users','action' => 'index', $entity->type]);
    	}
    	
		$queryCats = $this->Users->getCats();
		$this->set('cats',  $queryCats);
		
		$queryUsersCats = $this->Users->getUserCategories($id);
		$this->set('usersCats',  $queryUsersCats);
		
		$this->layout = 'admin';
    }
    public function manageCities($id=0)
    {
		$this->set('userID',  $id);
		if(!empty($this->request->data)){
			$this->Users->addUserCity($_POST['userID'], $_POST['city']);
			$this->Flash->set('Miejscowość została zapisana pomyślnie.');
			return $this->redirect(['controller'=>'users','action' => 'manageCities', $_POST['userID']]);
		}
		$queryUsersCities = $this->Users->getUserCities($id);
		$this->set('usersCities',  $queryUsersCities);
		
		$this->layout = 'admin';
	}
	public function removeCity($id=0, $userID)
    {
		$this->Users->remUserCity($id, $userID);
		
		return $this->redirect(['controller'=>'users','action' => 'manageCities', $userID]);
	}
	
	// main image
	public function mainimage($userID){
		if(!empty($this->request->data)){
			$tmpname = rand(000000,99999999999).'.jpg';
			move_uploaded_file($_FILES['new_mainImage']['tmp_name'], "/webroot/uploads/profiles/tmp/".$tmpname);
			$this->Image->prepare("/webroot/uploads/profiles/tmp/".$tmpname);
			$this->Image->resize(320,200);//width,height,Red,Green,Blue
			$this->Image->save("/webroot/uploads/profiles/".$userID."/".$tmpname);//.$Largeimage[0].'_L.'.$Largeimage[1]
			exit;
		}
		$this->set('userID', $userID);
		$user = $this->Users->get($userID);
		$this->set('mainimage', $user['mainImage']);
		$this->layout = 'admin';
	}
    public function remove()
    {
		$this->layout = 'admin';
    }
}
