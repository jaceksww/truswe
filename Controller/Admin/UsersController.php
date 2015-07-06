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
			$page = $this->Pages->get($id);
			$this->set('page', $page);
    		$this->set('title', 'Edycja wybranego elementu');
    	}
    	$this->set('pageurl',Configure::read('pageurl'));
    	if(!empty($this->request->data)){
    		$this->request->data['uri'] = strtolower($this->myurl($this->request->data['name']));
			$pages = TableRegistry::get('Pages');
			$entity = $pages->newEntity($this->request->data());
    		
    		$pages->save($entity);
    		$this->Flash->set('Strona została zapisana pomyślnie.');
    		return $this->redirect(['controller'=>'pages','action' => 'manage', $entity->pageID]);
    	}
    	
		$this->layout = 'admin';
    }
    
    public function remove()
    {
		$this->layout = 'admin';
    }
}
