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
class UsersController extends AppController
{

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
					
			$conn = ConnectionManager::get('default');
			 $query = $conn->query('
			select u.id, u.login, uc.name from users u
			left outer join users_user_categories as uuc on (u.id = uuc.user_id)
			left outer join user_categories as uc on (uuc.user_category_id = uc.id) 
			where uc.id = '.$catID.'
			');
			
			$this->set('profiles',  $query);
		
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
