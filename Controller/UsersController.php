<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Datasource\ConnectionManager;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
 use Cake\Network\Http\Client;
class UsersController extends AppController
{
	public function login()
	{
	
	}
	public function create_account()
	{
		if(!empty($_POST)){
			pr($_POST);
			$http = new Client();
			$response = $http->post('https://www.google.com/recaptcha/api/siteverify', [
			  'secret' => '6LfiNgkTAAAAACm7btqBsvsxEUsGfE23gvcIOtrq',
			  'response' => $_POST['g-recaptcha-response']
			]);
			$resp = json_decode($response->body);
			if($resp->success){
				echo 'ok';
			}
			else{
				echo 'baaad';
			}
			exit;
/*		
		#https://www.google.com/recaptcha/admin#site/319320560?setup
       addArticleCaptcha= RestClient.post 'https://www.google.com/recaptcha/api/siteverify',
          {:secret => Rails.configuration.captcha_secret_addarticle, :response =>  params[:'g-recaptcha-response'] }
      captchaResp = JSON.parse(addArticleCaptcha)
      #render :text => captchaResp["success"]
      if captchaResp["success"].nil? || !captchaResp["success"]
      	flash[:error] = "Nie dodano artykułu. Źle zweryfikoany mechanizm antyspamowy"
      	session[:isboot] = 1
        redirect_to request.referer
      else
      	flash[:success] = "Prawidłowo zweryfikoany mechanizm antyspamowy. Teraz możesz więcej :)"
      	session[:isboot] = 0
        redirect_to request.referer
      end
	  */
		}
		$queryCats = $this->Users->getCats();
		$this->set('cats',  $queryCats);
	}
	
	public function profile($profile)
	{
		$queryUser = $this->Users->getUserParams($profile);
		$this->set('userParams',  $queryUser);
		if($queryUser[0]['type'] == '1'){
			$this->layout = 'profile';
		}else{
			$this->layout = 'profilesimple';
		}
	}

    /**
     * Displays a view
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function search($catID=1)
    {
		/*
        $query = $this->Users
			->find('all')
			->contain(['UserCategories' => function ($q) use ($catID){
					   return $q
							->select(['name'])
							->where(['UserCategories.id' => $catID]);
					}])
					->group(['Users.id']);
					*/
			$query = $this->Users->getUsersOfCat($catID, true);
			
			
			$this->set('profiles',  $query);
			$queryCat = $this->Users->getCatParams($catID);
			$this->set('catParams',  $queryCat);
		
    }
	function getTRASA(){
		//SELECT uc1.city, uc2.city FROM `user_cities` uc1 ,`user_cities` as uc2 WHERE uc1.city = 'Pradolina' and uc2.city = 'Mikkowo'  and uc1.user_id = uc2.user_id
	}
	public function getAllWithCats()
    {
        $query = $this->Users->find('all')->contain(['UserCategories']);
		foreach ($query as $user) {
			//print_r($user);
			echo $user['login'].'<br />';
			foreach($user->user_categories as $cat){
				echo $cat['name'].',';
			}
			echo '<br />';
		}
    }
    
    
    
}
