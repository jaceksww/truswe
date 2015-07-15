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
	
	//create account
	public function getByField($field, $val){
		
		$userT = TableRegistry::get('Users');

			// Start a new query.
			$user = $userT->find()->where([$field => $val])->toArray();
			return $user;
	}
	public function checkErrors($data){
		$error = '';
			if($data['password'] == '' || $data['password'] != $data['password2']){
				$error .= "Wystąpił problem z hasłem. Sprawdź czy hasło nie jest puste i czy są identyczne.<br />";
			}
			if(empty($data['login']) ||  $data['login'] == '' ){
				$error .= "Login jest obowiązkowy<br />";
			}
			if(empty($data['email']) ||  $data['email'] == '' ){
				$error .= "Email jest obowiązkowy<br />";
			}
			
			$queryLogin = $this->getByField('login', $data['login'] );
			if(!empty($queryLogin )){
				$error .= "Ten Login już wcześniej został użyty<br />";
			}
			$queryEmail = $this->getByField('email', $data['email'] );
			if(!empty($queryEmail )){
				$error .= "Ten Email już wcześniej został użyty <br />";
			}
			return $error;
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
			$usersCities[] = array('id'=>$uc['id'],'user_id'=>$uc['user_id'], 'city'=>$uc['city'], 'lat'=>$uc['city_lat'], 'lng'=>$uc['city_lng']);
		}
		return $usersCities;
		
	}
	
	public function remUserCity($id, $userID){
		$conn = ConnectionManager::get('default');
			 $users = $conn->query('
				delete from user_cities where id = '.$id.' and user_id = '.$userID.'
				');
	}
	
	public function addUserCity($userID, $city, $coords=array('lat'=>0,'lng'=>0)){
		$conn = ConnectionManager::get('default');
			 $users = $conn->query('
				insert into user_cities (user_id, city, city_lat, city_lng) values ('.$userID.', "'.$city.'", "'.$coords['lat'].'", "'.$coords['lng'].'")
				');
	}
	
	public function findLatLng($place){
		$address = str_replace(array(", ", " ", " "), array("+", "+", "+"), $place);
		$url = "http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=Europe";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		$response = curl_exec($ch);
		curl_close($ch);
		$response_a = json_decode($response);
		$lat = $response_a->results[0]->geometry->location->lat;
		$long = $response_a->results[0]->geometry->location->lng;
		return array('lat'=>$lat, 'lng'=>$long);
	}
	
	//photo
	public function saveUserMainimage($mainimage, $userID){
		
			$conn = ConnectionManager::get('default');
			 $users = $conn->query('
				update users set mainImage = "'.$mainimage.'" where id = '.$userID.'
				');
		
	}
	
}
