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

use Cake\Controller\Controller;
use Cake\Core\Configure;
use Cake\Core\Configure\Engine\PhpConfig;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
	public $helpers = ['Session'];
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * @return void
     */
	 public $session = '';
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');
        $this->set('staticurl',Configure::read('staticurl'));
		$this->set('pageurl',Configure::read('pageurl'));
		$this->session = $this->request->session();
		
    }
    
	function saveLocation(){
		$this->session->write('App.lastLocation', $_SERVER['REQUEST_URI']);
	}
	
	function checkIfLoggedIn(){
		if(!$this->session->check('User')){
			
			$this->Flash->error('Zaloguj się aby uzyskać dostęp do wybranej strony.');
			return false;
		}else{
			return true;
		}
	}
    function myurl($text)
   {
	   $text = strtolower($text);
	   
   $wynik = str_replace(array('Ę','Ó','Ą','Ś','Ł','Ż','Ź','Ć','Ń','ę','ó','ą','ś','ł','ż','ź','ć','ń',' '),
			array('e','o','a','s','l','z','z','c','n','e','o','a','s','l','z','z','c','n','-'),
			$text);
   return $wynik;
   }
}
