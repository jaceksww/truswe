<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;

class UsersTable extends Table
{

    public function initialize(array $config)
    {
        $this->belongsToMany('UserCategories', [
            'joinTable' => 'users_user_categories',
        ]);
    }
	
	public function getUsersOfCat($catID, $appendCities = false){
		
			$conn = ConnectionManager::get('default');
			 $users = $conn->query('
				select u.id, u.uri,u.login, uc.name, u.city from users u
				left outer join users_user_categories as uuc on (u.id = uuc.user_id)
				left outer join user_categories as uc on (uuc.user_category_id = uc.id) 
				where uc.id = '.$catID.' 
				');
			if($appendCities && count($users) > 0) {
				$result = array();
				
				$user_ids = array();
				$user_ids_str = '';
				foreach($users as $el){
					$user_ids[] = $el['id'];
					$user_ids_str .= $el['id'].',';
				}
				$user_ids_str  = trim ($user_ids_str , ',');
				$cities = $conn->query('
				select uci.city, uci.user_id from user_cities uci
				where uci.user_id in ('.$user_ids_str .') 
				');
				
				foreach($users as $el){
					$cities_user = array();
					foreach($cities as $c){
						if($c['user_id'] != $el['id']) continue;
						
						$cities_user[] = $c;
					}
					$el['cities'] = $cities_user;
					$result[] = $el;
				}
				return $result;
			}
			return $users;
	}
	public function getCatParams($catID){
		
			
			$uc = TableRegistry::get('UserCategories');

			// Start a new query.
			$cat = $uc->find()->where(['id' => $catID])->toArray();
			return $cat;
	}
	public function getCats(){
		
			
			$uc = TableRegistry::get('UserCategories');

			// Start a new query.
			$cats = $uc->find()->toArray();
			return $cats;
	}
	
	public function getUserParams($profile)
	{
			$u = TableRegistry::get('Users');

			// Start a new query.
			$user = $u->find()->where(['uri' => $profile])->toArray();
			return $user;
	}
}
