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

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display()
    {
        $path = func_get_args();

        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $e) {
            if (Configure::read('debug')) {
                throw $e;
            }
            throw new NotFoundException();
        }
    }
    
    
    public function view($name)
    {
    	$uri = str_replace('.html', '', $name);
    	$layout = 'default';
    	
    	if($uri == 'onas'){
			$title = '';
			$name = '';
			$content = file_get_contents('/src/Template/Pages/onas.ctp');
			$onas_tresc = $this->requestAction('/pl/Pages/view/o-nas-tresc.html');
			$content = str_replace(array('[[Onas-tresc]]'), $onas_tresc, $content);
		}
    	else if($uri == 'contact'){
			$title = '';
			$name = '';
			$content = file_get_contents('/src/Template/Pages/contact.ctp');
			$kontakt_tresc = $this->requestAction('/pl/Pages/view/Kontakt-tresc.html');
			$content = str_replace(array('[[Kontakt-tresc]]'), $kontakt_tresc, $content);
		}
		else if($uri == 'home2'){
			$title = '';
			$name = '';
			$content = file_get_contents('/src/Template/Pages/home2.ctp');
		}else{
			
			$page = $this->Pages->find('all', [
				'conditions' => ['uri' => $uri]
			])->first();
			
			$name = $page['name'];
			$title = $page['title'];
			$content = $page['content'];
			$layout = $page['layout'];
		}
		
		$this->set('name', $name);
		
		$this->set('content', $content);
		$this->set('title', $title);
		$this->layout = $layout;
    }
}
