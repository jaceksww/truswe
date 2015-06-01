<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;
use Cake\Core\Configure\Engine\PhpConfig;

class PagesController extends AppController
{
	public function index()
    {
    	$pages  = $this->Pages->find('all',[
        	'order' => ['Pages.pageID'=>'ASC']
        ]);
        $pages_els = $pages->toArray();
        $this->set('pages',$pages_els);
        $this->set('pageurl',Configure::read('pageurl'));
		$this->layout = 'admin';
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
