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
	
	//login
	public function findUserByLoginPass($login, $pass){
		
		$userT = TableRegistry::get('Users');

			// Start a new query.
			$user = $userT->find()->where(['login' => $login, 'password'=>md5($pass)])->toArray();
			return $user;
			
	}
	public function getUsersOfCat($catID, $appendCities = false, $start=0, $limit=20){
		
			$conn = ConnectionManager::get('default');
			 $users = $conn->query('
				select u.id, u.uri,u.login, uc.name, u.city from users u
				left outer join users_user_categories as uuc on (u.id = uuc.user_id)
				left outer join user_categories as uc on (uuc.user_category_id = uc.id) 
				where uc.id = '.$catID.' and active = 1 and deleted = 0
				limit '.$start.', '.$limit.'
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
	public function getTotalUsersOfCat($catID){
		$conn = ConnectionManager::get('default');
			 $users = $conn->query('
				select u.id from users u
				left outer join users_user_categories as uuc on (u.id = uuc.user_id)
				left outer join user_categories as uc on (uuc.user_category_id = uc.id) 
				where uc.id = '.$catID.' and active = 1 and deleted = 0
				');
			
			return count($users);
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
	
	///categories
	public function saveUserCategories($cats, $userID){
		foreach($cats as $cat){
			$conn = ConnectionManager::get('default');
			 $users = $conn->query('
				insert into users_user_categories (user_id, user_category_id) values ('.$userID.', '.$cat.')
				');
		}
	}
	
	public function getUserCategories($userID){
			$conn = ConnectionManager::get('default');
			  $users = $conn->query('
				select * from users_user_categories where user_id = '.$userID.' 
				');
		$usersCats =array();
		foreach($users as $uc){
			$usersCats[] = $uc['user_category_id'];
		}
		return $usersCats;
		
	}
	public function resetUserCategories( $userID){
			$conn = ConnectionManager::get('default');
			 $users = $conn->query('
				delete from users_user_categories where user_id = '.$userID.'
				');
		
	}
	
	////cities
	public function getUserCities($userID){
		
			$conn = ConnectionManager::get('default');
			  $users_cities = $conn->query('
				select * from user_cities where user_id = '.$userID.' 
				');
		$usersCities =array();
		foreach($users_cities as $uc){
			$usersCities[] = array('id'=>$uc['id'],'user_id'=>$uc['user_id'], 'city'=>$uc['city']);
		}
		return $usersCities;
		
	}
	
	public function remUserCity($id, $userID){
		$conn = ConnectionManager::get('default');
			 $users = $conn->query('
				delete from user_cities where id = '.$id.' and user_id = '.$userID.'
				');
	}
	
	public function addUserCity($userID, $city){
		$conn = ConnectionManager::get('default');
			 $users = $conn->query('
				insert into user_cities (user_id, city) values ('.$userID.', "'.$city.'")
				');
	}
	
	//photo
	public function saveUserMainimage($mainimage, $userID){
		
			$conn = ConnectionManager::get('default');
			 $users = $conn->query('
				update users set mainImage = "'.$mainimage.'" where id = '.$userID.'
				');
		
	}
	
}
