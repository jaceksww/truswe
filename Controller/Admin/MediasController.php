<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;
use Cake\Core\Configure\Engine\PhpConfig;

class MediasController extends AppController
{
	public function index()
    {
    	$medias  = $this->Medias->find('all');
        $medias_els = $medias->toArray();
        $this->set('medias',$medias_els);
	
		$this->layout = 'admin';
    }
    
    public function manage($id=0)
    {
    	if($id == 0){
    		$this->set('title', 'Dodaj nowy');
    	}else{
			$media = $this->Medias->get($id);
			$this->set('media', $media);
    		$this->set('title', 'Edycja wybranego elementu');
    	}
    	
    	if(!empty($this->request->data)){
    		$medias = TableRegistry::get('Medias');
		//print_r($this->request->data());
		//exit;
		$ext = '.jpg';
		if($this->request->data['media']['type'] == 'image/png'){
			$ext = '.png';
		}elseif($this->request->data['media']['type'] == 'image/gif'){
			$ext = '.gif';
		}
		$name = md5(time().rand(1111,9999999));
		move_uploaded_file ( $this->request->data['media']['tmp_name'] , Configure::read('staticurl').'cms/'.$name.$ext );
		$data = array();
		$data['url'] = $name.$ext;
		$data['name'] = $this->request->data['media']['name'];
		
		$entity = $medias->newEntity($data);
    		
    		$medias->save($entity);
    		$this->Flash->set('Element media został zapisany pomyślnie.');
    		return $this->redirect(['controller'=>'medias','action' => 'index']);
    	}
		$this->layout = 'admin';
    }
    
    public function remove()
    {
		$this->layout = 'admin';
    }
}
