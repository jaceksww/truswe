<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;
use Cake\Core\Configure\Engine\PhpConfig;

class MenusController extends AppController
{
	public function index()
    {
    	$menus  = $this->Menus->find('all',[
        	'order' => ['Menus.ordering'=>'ASC']
        ]);
        $menus_els = $menus->toArray();
        $this->set('menus',$menus_els);
		$this->layout = 'admin';
    }
    
    public function manage($id=0)
    {
    	if($id == 0){
    		$this->set('title', 'Dodaj nowy');
    	}else{
			$menu = $this->Menus->get($id);
			$this->set('menu', $menu);
    		$this->set('title', 'Edycja wybranego elementu');
    	}
    	
    	if(!empty($this->request->data)){
    		$menus = TableRegistry::get('Menus');
			$entity = $menus->newEntity($this->request->data());
    		
    		$menus->save($entity);
    		$this->Flash->set('Element menu został zapisany pomyślnie.');
    		return $this->redirect(['controller'=>'menus','action' => 'manage', $entity->menuID]);
    	}
		$this->layout = 'admin';
    }
    
    public function remove()
    {
		$this->layout = 'admin';
    }
}
