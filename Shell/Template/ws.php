<?php
/**
 * Halogy
 *
 * A user friendly, modular content management system for PHP 5.0
 * Built on CodeIgniter - http://codeigniter.com
 *updateWsCounts($wwwID)
 * @package		Halogy
 * @author		Haloweb Ltd
 * @copyright	Copyright (c) 2012, Haloweb Ltd
 * @license		http://halogy.com/license
 * @link		http://halogy.com/
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

class Ws extends MX_Controller {

	var $partials = array();
	
	function __construct()
	{
		parent::__construct();

		// get siteID, if available
		if (defined('SITEID'))
		{
			$this->siteID = SITEID;
		}

		// get site permissions and redirect if it don't have access to this module
		/*
		if (!$this->permission->sitePermissions)
		{
			show_error('You do not have permission to view this page');
		}
		if (!in_array($this->uri->segment(1), $this->permission->sitePermissions))
		{
			show_error('You do not have permission to view this page');
		}		
		*/
		// load models and modules
		$this->load->library('tags');
		//$this->load->library('calendar', array('show_next_prev' => TRUE, 'next_prev_url' => '/ws'));		
		$this->load->model('ws_model', 'ws');
		$this->load->model('images/images_model', 'images');
		$this->load->module('pages');
		$this->load->model('community/users_model', 'users');
		$this->load->model('images_model', 'images');
		$this->load->model('info/info_model', 'infos');
		$this->load->model('livebox/livebox_model', 'livebox');
			      
		// load partials - archive
		/*
		if ($archive = $this->ws->get_archive())
		{
			foreach($archive as $date)
			{
				$this->partials['ws:archive'][] = array(
					'archive:link' => site_url('/ws/'.$date['year'].'/'.$date['month'].'/'),
					'archive:title' => $date['dateStr'],
					'archive:count' => $date['numWs']
				);
			}
		}
		*/
		
		// load categories
		
		if ($cats = $this->ws->get_categories())
		{
			foreach($cats as $cat)
			{
				$this->partials['ws:categories'][] = array(
					'cat:link' => site_url('/ws/'.$cat['id'].'/wpisy-wedkarzy/'.$this->make_uri($cat['name'])),
					'cat:title' => $cat['name'],
					//'archive:count' => $date['numWs']
				);
			}
		}
		
		// load partials - latest
		if ($latest = $this->ws->get_ws(10))
		{
			foreach($latest as $www)
			{
				$this->partials['ws:latest'][] = array(
					'latest:link' => site_url('ws/w,'.$www['wwwID']),
					'latest:uri' => $this->make_uri($www['wwwTitle']),
					
					'latest:title' => $www['wwwTitle'],
					'latest:date' => date((($this->site->config['dateOrder'] == 'MD') ? 'M jS Y' : 'jS M Y'), strtotime($www['wwwDate'])),
				);
			}
		}	

		// load partials - calendar
		/*
		$month = ($this->uri->segment(3) && intval($this->uri->segment(2))) ? $this->uri->segment(3) : date('m', time());
		$year = ($this->uri->segment(2) && intval($this->uri->segment(2))) ? $this->uri->segment(2) : date('Y', time());
		$monthWs = array();
		if ($data['month'] = $this->ws->get_month($month, $year))
		{
			foreach($data['month'] as $www)
			{
				$monthWs[date('j', strtotime($www['wwwDate']))] = '/ws/'.date('Y/m/d', strtotime($www['wwwDate']));
			}
		}
		@$this->partials['ws:calendar'] = $this->calendar->generate($year, $month, $monthWs);
		*/
		$error = $this->session->userdata('error');
		if(!empty($error) && $error != '')
		{
			$this->partials['errors'] = $error;
			$this->session->set_userdata('error','');
		}
		
		//$this->ws->db->cache_on();
	}
	function make_uri($str,$html='.html'){
		
		return str_replace(array('"','\'',' ','(',')','_','Ń','Ę','Ą','Ó','Ł','Ś','Ż','ą','ć','ę','ń','ó','ś','ł','ż','ź',',','.','!','?'), array('','','-','-','-','-','N','E','A','O','L','S','Z','a','c','e','n','o','s','l','z','z','','','','',''),strtolower(trim($str))).$html;
	}
	
	function clearWsCache()
	{
		//$this->ws->db->cache_delete_all();
	}
	function ws_add_www()
	{
		$this->clearWsCache();
		
		//$this->ws->del_temp_www();
		if (!$this->session->userdata('session_user'))
		{
			redirect('/users/login/'.$this->core->encode($this->uri->uri_string()));
		}
		
		$this->core->required = array(
			'wwwTitle' => array('label' => 'Www title', 'rules' => 'required|trim'),
			'description' => 'Description'
		);
			
			
		// get values
		$output['data'] = $this->core->get_values('ws');	
		
		/*
		if(count($_POST) == 0){
			$this->core->set['dateCreated'] = date("Y-m-d H:i:s");
			$this->core->set['userID'] = $this->session->userdata('userID');
			
			$wwwID = $this->ws->add_temp_www($this->session->userdata('userID'));
			
			$checkFolder = $this->images->get_folders('', 'ws_'.$wwwID);
			if(empty($checkFolder)){
				
				$folderID = $this->images->add_folder('ws_'.$wwwID, strtolower(url_title('ws_'.$wwwID)), $this->siteID, 9 );
				
			}
		}
		*/
		if (count($_POST))
		{
			////$objectID = array('wwwID' => $this->input->post('wwwID'));
			// set date
			$this->core->set['dateCreated'] = date("Y-m-d H:i:s");
			$this->core->set['tags'] = trim(strtolower($this->input->post('tags')));
			$this->core->set['userID'] = $this->session->userdata('userID');
			if($this->config->item('mobile'))
				$this->core->set['mobile'] = 1;
			else
				$this->core->set['mobile'] = 0;
			////$this->core->set['wwwID'] = $this->input->post('wwwID');
			
			
			// update
			if ($this->core->update('ws'))
			{
				////$wwwID = $this->input->post('wwwID');
				$wwwID = $this->db->insert_id();	
				// where to redirect to
				
				//$folderID = $this->input->post('folderID');
				$checkFolder = $this->images->get_folders('', 'ws_'.$wwwID);
				if(empty($checkFolder)){
					
					$folderID = $this->images->add_folder('ws_'.$wwwID, strtolower(url_title('ws_'.$wwwID)), $this->siteID, 9 );
					
					$this->core->set['folderID'] = $folderID;
					$this->core->set['wwwID'] = $wwwID;
					$this->core->update('ws', array('wwwID'=>$wwwID));
				}
				
				//update categories
				$categories = $this->input->post('category');
				if(!empty($categories))
				{
					foreach($categories as $cat){
						$this->ws->save_ws_cats($cat, $wwwID);
					}
				}
				
				$this->session->set_userdata('error', 'Twój w wpis został dodany. Możesz kontynuować modyfikacje wpisu. Wpis zostanie opublikowany przez administatora w czasie ok 1 doby.');
				if($this->input->post('redirect') == 'edit')
					redirect('/ws/ws_edit_www/'.$wwwID);
				else
					redirect('/ws/upload_image/'.$wwwID);
			}
		}
		// set default date
		$values = array(
			0 => 'Zwykły wpis (artykuł)',
			1 => 'Wpis tworzony poprzez innych użytkowników*',
		);
		$output['form:dropdownIsPoll'] =  @form_dropdown('is_poll',$values,set_value('is_poll', 0), ' data-theme="e" id="is_poll" class="formelement"');
		
		$output['form:selectCategory']='';
		if ($cats = $this->ws->get_categories())
		{
			$output['form:selectCategory'] .= '<div class="checkboxes_group">';
			foreach($cats as $cat)
			{
				$output['form:selectCategory'] .= '<div class="one_checkbox"><input type="checkbox"   data-theme="e" value="'.$cat['id'].'" id="category'.$cat['id'].'" name="category[]" /><label class="radio" for="category'.$cat['id'].'">'.$cat['name'].'</label></div>';
			}
			$output['form:selectCategory'] .= '<div class="clear"></div></div>';
		}
		
		$output['data']['wwwDate'] = ($this->input->post('wwwDate')) ? $this->input->post('wwwDate') : dateFmt(date("Y-m-d H:i:s"), 'd M Y');
		$output['form:wwwTitle'] = ($this->input->post('wwwTitle')) ? $this->input->post('wwwTitle') : '';
		$output['form:excerpt'] = ($this->input->post('excerpt')) ? $this->input->post('excerpt') : '';
		$output['form:description'] = ($this->input->post('description')) ? $this->input->post('description') : '';
		
		$output['form:time'] = ($this->input->post('time')) ? $this->input->post('time') : '';
		$output['form:featured'] = ($this->input->post('featured')) ? $this->input->post('featured') : 0;
		$output['form:tags'] = ($this->input->post('tags')) ? $this->input->post('tags') : '';
		$output['form:published'] = ($this->input->post('published')) ? $this->input->post('published') : 0;
		$output['form:userID'] = ($this->input->post('userID')) ? $this->input->post('userID') : $this->session->userdata('userID');
		//$output['form:wwwID'] = ($this->input->post('wwwID')) ? $this->input->post('wwwID') : $wwwID;
		//$output['form:folderID'] = ($this->input->post('folderID')) ? $this->input->post('folderID') : $folderID;
		
		$output['form:lng'] = ($this->input->post('lng')) ? $this->input->post('lng') : '';
		$output['form:lat'] = ($this->input->post('lat')) ? $this->input->post('lat') : '';
		$lng = $this->input->post('lng');
		$lat = $this->input->post('lat');
		if(!empty($lng) && $lng != '' && !empty($lat) && $lat != '' ){
			$output['www:is_map'] = true;
		}else{
			$output['www:is_map'] = false;
		}
		
		$this->pages->view('ws_add_www', $output, TRUE);
				
	}
	function upload_image($wwwID='')
	{
		$this->clearWsCache();
		
		$wwwDetails = $this->ws->get_www($wwwID);
		$output = array();
		if(count($_POST) > 0)
		{
			$folderID = $this->input->post('folderID');
			$wwwID = $this->input->post('wwwID');
				
				$this->uploads->allowedTypes = 'jpg|gif|png';
				
				$rand = substr(md5(rand(111,999)),0,6);
				// get image name
				$imageName = ($this->input->post('imageName')) ? $this->input->post('imageName').$rand : '';
				
				// set image reference and only add to db if its unique
				if(trim($imageName) == '')
					$imageName = 'Image'.$rand;
				
				$imageRef = url_title(trim(substr(strtolower($imageName),0,30)));
		
				if ($this->form_validation->unique($imageRef, 'images.imageRef'))
				{	
					if ($imageData = $this->uploads->upload_image())
					{
						$this->core->set['filename'] = $imageData['file_name'];
						$this->core->set['filesize'] = $imageData['file_size'];
						
					}
		
					// get image errors if there are any
					if ($this->uploads->errors)
					{
						$this->form_validation->set_error($this->uploads->errors);
					}
					else
					{						
						// set image ref
						if($this->input->post('imageMain')){
							$this->ws->resetMainImages($folderID);
							$this->ws->updateMainImage($wwwID,$imageRef);
							$this->core->set['class'] = 'main';
						}else{
							$this->core->set['class'] = 'default';
						}
						$this->core->set['imageRef'] = $imageRef;
						$this->core->set['imageName'] = ($this->input->post('imageName') && trim($this->input->post('imageName')) != '') ? $this->make_uri($this->input->post('imageName')) : $imageName;
						$this->core->set['dateCreated'] = date("Y-m-d H:i:s");
						$this->core->set['userID'] = $this->session->userdata('userID');												
				
						// update
						if ($this->core->update('images'))
						{
							// where to redirect to
							//redirect('/admin/images/viewall/'.(($this->input->post('folderID')) ? $this->input->post('folderID') : ''));
						}
					$this->ws->updateWsCounts($wwwID);
					}
				}
				else
				{
					$this->form_validation->set_error('<p>The image reference you entered has already been used, please try another.</p>');
				}
				
			redirect('/ws/upload_image/'.$wwwID);	
		}
		$output['form:folderID'] = ($this->input->post('folderID')) ? $this->input->post('folderID') : $wwwDetails['folderID'];
		$output['form:wwwID'] = ($this->input->post('wwwID')) ? $this->input->post('wwwID') : $wwwID;
		
		//images
		$images = $this->images->get_images_by_folder_ref(strtolower(url_title('ws_'.$wwwID)),100);
		// get topics
		$output['photos'] = array();
		if (!empty($images))
		{
			
			foreach($images as $image)
			{
				$imageData = $this->uploads->load_image($image['imageRef']);
				$imagePath = $imageData['src'];
				$imageData = $this->uploads->load_image($image['imageRef'], true);				
				$imageThumbPath = $imageData['src'];
				
				$tmp['photo:imageData'] = $imageData;
				$tmp['photo:imagePath'] = $imagePath;
				$tmp['photo:imageThumbPath'] = $imageThumbPath;
				$thumb = display_image($imageThumbPath, $image['imageName'], 100, 'class="pic '.$image['class'].'"');
				
				$tmp['photo:imageThumb'] = $thumb;
				foreach($image as $key=>$el){
					$tmp['photo:'.$key] = $el;
					
				}
				
				$output['photos'][] = $tmp;
			}
		}
		
		
		$this->pages->view('ws_upload_image', $output, TRUE);
	}
	function ws_edit_www($wwwID=0)
	{
		$this->clearWsCache();
		
		$output = $this->partials;
				
		$this->core->required = array(
			'wwwTitle' => array('label' => 'Www title', 'rules' => 'required|trim'),
			'description' => 'Description'
		);
		// check user is logged in, if not send them away from this controller
		if (!$this->session->userdata('session_user'))
		{
			redirect('/users/login/'.$this->core->encode($this->uri->uri_string()));
		}		
		if (!$wwwID || !$www = $this->ws->get_www($wwwID))
		{
			show_error('Please make sure you edit a valid post.');
		}
	//	if ($www['userID'] != $this->session->userdata('userID') && @!in_array('ws', $this->permission->permissions))
	//	{
	//		show_error('You are not authorised to edit this post.');
	//	}


		// required
		
		// where
		$objectID = array('wwwID' => $wwwID);
			
			
		// get values
		$output['data'] = $this->core->get_values('ws');	

		if (count($_POST))
		{
			
			// set date
			$this->core->set['dateCreated'] = date("Y-m-d H:i:s");
			$this->core->set['tags'] = trim(strtolower($this->input->post('tags')));
			$this->core->set['userID'] = $this->session->userdata('userID');
			$this->core->set['wwwID'] = $this->input->post('wwwID');
			
			
			// update
			if ($this->core->update('ws',$objectID))
			{
				$this->ws->reset_ws_cats($wwwID);
				//update categories
				$categories = $this->input->post('category');
				if(!empty($categories))
				{
					foreach($categories as $cat){
						$this->ws->save_ws_cats($cat, $wwwID);
					}
				}
				
				
				// where to redirect to
				if($this->input->post('redirect') == 'edit')
					redirect('/ws/ws_edit_www/'.$wwwID);
				else
					redirect('/ws/upload_image/'.$wwwID);
			}
		}
		
		// set default date
		$values = array(
			0 => 'Zwykły wpis (artykuł)',
			1 => 'Wpis tworzony poprzez innych użytkowników*',
		);
		$output['form:dropdownIsPoll'] =  @form_dropdown('is_poll',$values,set_value('is_poll', $www['is_poll']), ' data-theme="e" id="is_poll" class="formelement"');
		
		$output['form:selectCategory']='';
		if ($cats = $this->ws->get_categories())
		{
			$selected_cats = $this->ws->get_ws_cats($wwwID);
			$output['form:selectCategory'] .= '<div class="checkboxes_group">';
			foreach($cats as $cat)
			{
				$output['form:selectCategory'] .= '<div class="one_checkbox"><input  data-theme="e" type="checkbox" value="'.$cat['id'].'" id="category'.$cat['id'].'" name="category[]" ';
				if(!empty($selected_cats) && in_array($cat['id'],$selected_cats)){
					$output['form:selectCategory'] .= ' checked="checked" ';
				}
				
				$output['form:selectCategory'] .= ' /><label class="radio" for="category'.$cat['id'].'">'.$cat['name'].'</label></div>';
			}
			$output['form:selectCategory'] .= '<div class="clear"></div></div>';
		}
		
		$output['data']['wwwDate'] = ($www['wwwDate']) ? $www['wwwDate'] : dateFmt(date("Y-m-d H:i:s"), 'd M Y');
		$output['form:wwwTitle'] = ($www['wwwTitle']) ? $www['wwwTitle'] : '';
		$output['form:excerpt'] = ($www['excerpt']) ? $www['excerpt'] : '';
		$output['form:description'] = ($www['description']) ? $www['description'] : '';
		$output['form:time'] = (!empty($www['time'])) ? $www['time'] : '';
		$output['form:featured'] = (!empty($www['featured'])) ? $www['featured'] : 0;
		$output['form:tags'] = ($www['tags']) ? $www['tags'] : '';
		$output['form:published'] = (!empty($www['published'])) ? $www['published'] : 0;
		$output['form:userID'] = ($www['userID']) ? $www['userID'] : $this->session->userdata('userID');
		$output['form:wwwID'] = ($www['wwwID']) ? $www['wwwID'] : $wwwID;
		$output['form:folderID'] = ($www['folderID']) ? $www['folderID'] : 0;
		
		$output['form:lng'] = ($www['lng']) ? $www['lng'] : '';
		$output['form:lat'] = ($www['lat']) ? $www['lat'] : '';
		
		// templates
		//$this->load->view($this->includes_path.'/header');
		//$this->load->view('add_www', $output);
		//$this->load->view($this->includes_path.'/footer');
		
		$this->pages->view('ws_add_www', $output, TRUE);
	}
	function ws_finish_www($wwwID=0)
	{
		$output['form:wwwID'] =  $wwwID;
		
		$this->pages->view('ws_finish_www', $output, TRUE);		
		
	}
	function set_main_image($imageRef,$folderID,$wwwID)
	{
		$this->clearWsCache();
		
		$this->ws->resetMainImages($folderID);
		$this->ws->updateMainClass($folderID,$imageRef);
		
						
		$this->ws->updateMainImage($wwwID,$imageRef);
		redirect('/ws/upload_image/'.$wwwID);
	}
	function delete_image($objectID, $catalog='',$www='')
	{
		$this->clearWsCache();
		
		$name_table = 'images';
		$name_objectID = 'imageID';	
		// delete image
		$query = $this->db->get_where($name_table, array($name_objectID => $objectID));
		
		if ($row = $query->row_array())
		{
			
			$this->uploads->delete_file($row['filename']);
		}
		
		if ($this->core->delete($name_table, array($name_objectID => $objectID)));
		{	
			//$redirect = ($redirect) ? str_replace('-_-','/',$redirect) : $this->redirect;
		
			// where to redirect to
			redirect('/ws/upload_image/'.$www);
		}
	}
	
	function ws_rate($wwwID, $rate)
	{
		$this->clearWsCache();
		
		if (!$this->session->userdata('session_user'))
		{
			redirect('/users/login/'.$this->core->encode($this->uri->uri_string()));
		}
		$userID = $this->session->userdata('userID');
		
		$isRated = $this->ws->checkIfRated($userID, $wwwID);
		if(!$isRated)
		{
			$wwwDetails = $this->ws->get_www($wwwID);
			$addKudos = $rate*0.1;
			$this->users->add_kudos($wwwDetails['userID'],$addKudos);
			$this->session->set_userdata('error', 'Dziękujemy za ocenę wpisu. Do doświadczenia ocenianego wędkarza zostało dodane '.$addKudos.' punkta.');
			
			$this->ws->add_rate($userID, $wwwID,  $rate);
			
		}
		else
			$this->session->set_userdata('error', 'Już brałeś udział w ocenianiu tego wpisu.');
		
		redirect('/ws/viewwww/'.$wwwID);
	}
	function ws_user($userID=0,$limit=1000)
	{
		$output = $this->partials;
		
		
		$is_logged = true;
		if (!$this->session->userdata('session_user'))
		{
			$is_logged=false;
		}
		if($userID == 0)
		{
		$userID = $this->session->userdata('userID');
		}
		$output['ws:userID']=$userID;
		
		// load content
		$data['userID'] = $userID;
		$data['active'] = 2;
		$output['blog:navigation'] = $this->parser->parse('community/partials/blog_navigation', $data, TRUE);

		// get partials
		
						
		// get latest ws
		
		$ws = $this->ws->get_ws_user($limit, $userID,$is_logged);
		$output['ws:ws'] = $this->_populate_ws($ws,$is_logged);

		// send ws to page
		$data['ws'] = $ws;

		// set pagination
		$output['pagination'] = ($pagination = $this->pagination->create_links()) ? $pagination : '';

		// set title
		$output['page:title'] = $this->site->config['siteName'].' |  :: Wpisy wędkarzy';
		$output['page:heading'] = 'Twoje wpisy';
		
		// display with cms layer
		$this->pages->view('ws_user', $output, TRUE);	
	}
	
	
	function index($catID=0,$namePart1='', $namePart2='')
	{
		// get partials
		$output = $this->partials;
		
			
		// get latest ws
		$ws = $this->ws->get_ws(10, $catID,"desc","", 0, "wwwID");
		$output['ws:ws'] = $this->_populate_ws($ws);

		// send ws to page
		$data['ws'] = $ws;

		// set pagination
		$output['pagination'] = ($pagination = $this->pagination->create_links()) ? $pagination : '';

		// set title
		$output['page:title'] = $this->site->config['siteName'].' :: Wpisy wędkarzy | '.$namePart2;
		$output['page:description'] = 'Wpisy wędkarzy z kategorii '.$namePart2;
		$output['page:keywords'] = 'ryby, łowiska, metody,wpisy, wędkarzy, wędkarstwo,blog,opwowieści,  '.$namePart2;
		$output['page:heading'] = 'Najnowsze wpisy';
		
		// display with cms layer
		$this->pages->view('ws', $output, TRUE);	
	}
	
	function featured()
	{
		// get partials
		$output = $this->partials;
						
		// get latest ws
		$ws = $this->ws->get_featured_ws();
		$output['ws:featured'] = $this->_populate_ws($ws);

		// send ws to page
		$data['ws'] = $ws;

		// set pagination
		$output['pagination'] = ($pagination = $this->pagination->create_links()) ? $pagination : '';

		// set title
		$output['page:title'] = $this->site->config['siteName'].' |  :: Wpisy wędkarzy';
		$output['page:heading'] = 'Featured Ws';
		
		// display with cms layer
		$this->pages->view('ws_featured', $output, TRUE);	
	}
	
	function viewwww_moved($wwwID, $str='')
	{
		// Permanent redirection
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: http://www.wedkarstwo.mobi/ws/w,".$wwwID.",".$str);
		exit();

	}
	function viewwww($wwwID = '')
	{
		
		if(strstr($wwwID, ',')){
			$parts = explode(',', $wwwID);
			$wwwID = $parts[0];
		}
		// get partials
		$output = $this->partials;
		$comments = $this->ws->get_comments($wwwID);
		
		// get www
		if ($www = $this->ws->get_www($wwwID,1,1))
		{				
			//print_r($www);
			//exit;
			// add comment
			if (count($_POST) >1)
			{
				$this->clearWsCache();
				
				// required
				$this->core->required = array(
					'fullName' => 'Full name',
					'comment' => 'Comment',
				);

				// check for spam
				preg_match_all('/http:\/\//i', $this->input->post('comment'), $urlMatches);
				preg_match_all('/viagra|levitra|blogspot|cialis/i', $this->input->post('comment'), $spamMatches);
				
				
				if (count($urlMatches[0]) > 0 ||  count($spamMatches[0]) > 0)
				{
					echo 'Tenpost wyglada jak spam. Usun linki z komentarza.';
					echo '<a href="'.$_SERVER['HTTP_REFERER'].'">[WSTECZ ]</a>';
					exit();
				}
				elseif (isset($_POST['captcha']) && !$this->_captcha_check())
				{
					$this->form_validation->set_error('Sorry you didn\'t pass the spam check. Please contact us to post a comment.');
				}
				else
				{			
					// set date
					$this->core->set['dateCreated'] = date("Y-m-d H:i:s");
					$this->core->set['wwwID'] = $www['wwwID'];
					$this->core->set['userID'] = $this->session->userdata('userID');
	
					// awaiting moderation
					if ($this->session->userdata('session_admin'))
					{
						$this->core->set['active'] = 1;
					}
					else
					{
						$this->core->set['active'] = 1;//0
					}
					
					// update
					if ($this->core->update('ws_comments'))
					{
						$this->ws->clearCacheWs();
						// get insertID
						$commentID = $this->db->insert_id();
						
						//add to livebox
						$this->livebox->addLivebox("COMMENT",$commentID);
						
						// get details on post poster		
						$user = $this->ws->get_user($www['userID']);
	
						// construct URL
						
						$url = $this->config->item('site').'/ws/w,'.$www['wwwID'];					
						
						if($user['userID'] != $this->session->userdata('userID'))
						{
							$this->infos->addInfo("<b>BLOG</b> - Ktoś skomentował wpis, który dodałeś na blogu ".$url." <br /> Zobacz &raquo;",
									      $url,
									      "BLOG",
									      $user['userID'] );
						}
						if ($user['notifications_blog'] && !$this->session->userdata('session_admin') && ($user['userID'] != $this->session->userdata('userID')))
						{
							// set header and footer
							$emailHeader = str_replace('{name}', $user['displayName'], $this->site->config['emailHeader']);
							$emailHeader = str_replace('{email}', $user['email'], $emailHeader);
							$emailFooter = str_replace('{name}', $user['displayName'], $this->site->config['emailFooter']);
							$emailFooter = str_replace('{email}', $user['email'], $emailFooter);
							
							// send email
							$this->load->library('email');						
							$this->email->from($this->site->config['siteEmail'], $this->site->config['siteName']);
							$this->email->to($user['email']);			
							$this->email->subject('[WedkarskiPortal]Komentarz do wpisu na Blogu :: '.$this->site->config['siteName']);
							$this->email->message($emailHeader."\n\nKtoś właśnie skomentował wpis, który dodałeś na blogu ".$url.".\n\n\n\nNapiał:\n\"".$this->input->post('comment')."\"\n\n".$emailFooter);
							$this->email->send();
						}
						$sentComments = array();
						if ($comments)
						{
							foreach ($comments as $comment)
							{
								if($comment['userID'] == $www['userID'] || $comment['userID'] == $this->session->userdata('userID')) continue;
								
								$user = $this->ws->get_user($comment['userID']);
								if(!in_array($user['userID'], $sentComments))
								{
									$sentComments[] = $user['userID'];
									
									$this->infos->addInfo("<b>BLOG</b> - Ktoś skomentował wpis, który Ty również skomentowałeś na blogu ".$url." <br /> Zobacz &raquo;",
									      $url,
									      "BLOG",
									      $user['userID'] );
									
									if ($user['notifications_blog'] && !$this->session->userdata('session_admin'))
									{
										// set header and footer
										$emailHeader = str_replace('{name}', $user['displayName'], $this->site->config['emailHeader']);
										$emailHeader = str_replace('{email}', $user['email'], $emailHeader);
										$emailFooter = str_replace('{name}', $user['displayName'], $this->site->config['emailFooter']);
										$emailFooter = str_replace('{email}', $user['email'], $emailFooter);
										
										// send email
										$this->load->library('email');						
										$this->email->from($this->site->config['siteEmail'], $this->site->config['siteName']);
										$this->email->to($user['email']);			
										$this->email->subject('[WedkarskiPortal]Ktoś również skomentował wpis, który Ty komentujesz :: '.$this->site->config['siteName']);
										$this->email->message($emailHeader."\n\nKtoś właśnie skomentował wpis, który Ty również skomentowałeś na blogu ".$url.".\n\n\n\nNapiał:\n\"".$this->input->post('comment')."\"\n\n".$emailFooter);
										$this->email->send();
									}
								}
							}
						}
						// output message
						$output['message'] = 'Dziękujemy za komentarz.';
	
						// disable form
						$post['allowComments'] = 0;
						
						$this->ws->updateWsCounts($www['wwwID'],1);
					}
				}
			}
			
			$wwwUserData = $this->users->get_user($www['userID']);
			
			
			// get comments
			$comments = $this->ws->get_comments($wwwID);
			$output['www:allow-comments'] = TRUE;//($this->session->userdata('session_user')) ? TRUE : FALSE;
			$output['www:add-author'] = ($this->session->userdata('username') != '') ? $this->session->userdata('username') : $this->session->userdata('firstName');
			if($output['www:add-author'] == '')
			$output['www:add-author'] = 'Gość';
			if ($comments)
			{
				$i = 0;
				foreach ($comments as $comment)
				{
					$output['www:comments'][$i]['comment:class'] = ($i % 2) ? ' alt ' : '';
					$output['www:comments'][$i]['comment:id'] = $comment['commentID'];
					if($www['is_poll'] == 0)
					{
						$output['www:comments'][$i]['comment:posted_by_on'] = '<p>Dodał: <strong>'.$comment['fullName'].'</strong> <small>dnia '.$comment['dateCreated'].'</small></p>';
					}else{
						$output['www:comments'][$i]['comment:posted_by_on']='<p class="italic gray">Autor: '.$comment['fullName'].'</p>';
					}
					$dataTmp = $this->users->get_user($comment['userID']);
					//$output['www:comments'][$i]['comment:gravatar'] = 'http://www.gravatar.com/avatar.php?gravatar_id='.md5(trim($comment['email'])).'&default='.urlencode(site_url('/static/uploads/avatars/noavatar.gif'));
					$output['www:comments'][$i]['comment:gravatar'] =  anchor('http://'.$dataTmp['displayName'].'.'.str_replace(array('http://', 'www.'),'', $this->config->item('site')), $this->users->get_avatar($dataTmp['avatar'],40,$dataTmp['userID'],$dataTmp['displayName']));
					$output['www:comments'][$i]['comment:author-id'] = $comment['userID'];
					//likes
					if($comment['countLikes'] == 1)
						$output['www:comments'][$i]['comment:countLikes'] = '<u>'.$comment['countLikes'].' osoba</u> to lubi.';
					else if($comment['countLikes'] == 0)
						$output['www:comments'][$i]['comment:countLikes'] = 'Jeszcze nikt tego nie polubił.';
					else
						$output['www:comments'][$i]['comment:countLikes'] = '<u>'.$comment['countLikes'].' osoby</u> to lubią.';
					
					$output['www:comments'][$i]['comment:author'] = (!empty($comment['website'])) ? anchor(prep_url($comment['website']), $comment['fullName']) : $comment['fullName'];
					$output['www:comments'][$i]['comment:date'] = dateFmt($comment['dateCreated'], ($this->site->config['dateOrder'] == 'MD') ? 'd-m-Y' : 'd-m-Y');
					$output['www:comments'][$i]['comment:body'] = nl2br(auto_link(strip_tags($comment['comment'])));
					
					$i++;
				}
			}
			
			// populate template
			$is_gal = ($www['wwwTitle'] == 'GALERIA') ? 1 : 0;
			$prev = $this->ws->get_nav_wwwID($wwwID, $www['userID'], 'prev',$is_gal);
			$output['www:prev'] = (!empty($prev['wwwID']))? '<a class="buttonStandard floatLeft" href="/ws/w,'.$prev['wwwID'].'">&laquo; Poprzednie</a>' : '';
			$next = $this->ws->get_nav_wwwID($wwwID, $www['userID'], 'next',$is_gal);
			$output['www:next'] = (!empty($next['wwwID']))? '<a class="buttonStandard floatRight" href="/ws/w,'.$next['wwwID'].'">Następne &raquo; </a>' : '';
			
			$output['www:wwwID'] = $www['wwwID'];
			$output['www:mobile'] = ($www['mobile'] == 1) ? ' <span class="mobile">Dodano z telefonu</span>' : '';
			$output['www:lng'] = $www['lng'];
			$output['www:lat'] = $www['lat'];
			if(!empty($www['lng']) && $www['lng'] != '' && !empty($www['lat']) && $www['lat'] != '' ){
					$output['www:is_map'] = true;
				}else{
					$output['www:is_map'] = false;
				}
				
			$output['www:title'] = $www['wwwTitle'];
			$output['www:link'] = site_url('ws/w,'.$www['wwwID']);
			$output['www:uri'] = $this->make_uri($www['wwwTitle']);
			
			$output['www:date'] = ($www['dateCreated'] != '') ? date('d-m-Y', strtotime($www['dateCreated'])) : '';
			$output['www:photoDescr'] = '';
			if($www['wwwTitle'] == 'GALERIA')
			{
				$image_parts = explode(".",$www['description']);
				$image_ext_org = $image_parts[count($image_parts)-1];
				$image_ext = strtolower($image_parts[count($image_parts)-1]);
				$image_ref = str_replace(".".$image_ext_org, "", $www['description']);
				
				$www['description'] = '<img src="'.site_url('images/'.$image_ref.".".$image_ext).'" />';
				$output['www:photoDescr'] = $www['excerpt'];
			}
			elseif($www['wwwTitle'] == 'REJESTR')
			{
				if(empty($www['description']) || $www['description'] == ''){
					$www['description'] = '<div style="font-size:25px;padding-top:40px;background:#eee;color:#666;border:1px solid #666;line-height:50px;width:200px;height:200px;text-align:center;">BRAK <br />ZDJĘCIA</div>';
				}else{
					$image_parts = explode(".",$www['description']);
					$image_ext_org = $image_parts[count($image_parts)-1];
					$image_ext = strtolower($image_parts[count($image_parts)-1]);
					$image_ref = str_replace(".".$image_ext_org, "", $www['description']);
					$www['description'] = '<img src="'.site_url('images/'.$image_ref.".".$image_ext).'" />';
				}
				
				$output['www:photoDescr'] = $www['excerpt'].'';
				if($www['subject'] != ''){
					$output['www:photoDescr'] .= '<br /><strong>Ryba: '.$www['subject'].'</strong>';
				}
				if($www['subject2'] != ''){
					$output['www:photoDescr'] .= '<br />Przynęta: '.$www['subject2'].'';
				}
				if($www['custom1'] != ''){
					$output['www:photoDescr'] .= '<br />Ilość: '.$www['custom1'].'szt';
				}
				if($www['custom2'] != ''){
					$output['www:photoDescr'] .= '<br />Waga: '.$www['custom2'].'kg';
				}
				if($www['custom3'] != ''){
					$output['www:photoDescr'] .= '<br />Długość: '.$www['custom3'].'cm';
				}
				
			}
			else
				$www['description'] = parse_keywords(str_replace("\n","{clear}",$www['description']));
				
			
			if(!empty($www['mainImage']) && !strstr('<div class="image">', $www['description'])){
					$www['description'] = '<div class="image">{thumb:'.$www['mainImage'].'}</div>'.$www['description'];
			}
			if(!empty($www['mainImage']) && !strstr('<div class="image">', $www['excerpt'])){
					$www['excerpt'] = '<div class="image">{thumb:'.$www['mainImage'].'}</div>'.$www['excerpt'];
			}
				
			$output['www:body'] = str_replace(array('<pre>','</pre>','<code>','</code>'),'',$this->template->parse_body($www['description']));
			$www['excerpt'] = parse_keywords($www['excerpt']);
			$output['www:excerpt'] = $this->template->parse_body($www['excerpt']);
			
				
			$output['www:author'] = $this->ws->lookup_user($www['userID'], TRUE);
			$output['www:author-id'] = $www['userID'];
			if($www['is_poll'] == 0)
			{
				$output['www:avatar'] = "<br class='clear' />Autor: ".anchor('http://'.$wwwUserData['displayName'].'.'.str_replace(array('http://', 'www.'),'', $this->config->item('site')), $this->users->get_avatar($wwwUserData['avatar'],50,$wwwUserData['userID'],$wwwUserData['displayName'])); 
			}else{
				$output['www:avatar']='';
			}
			$output['www:edit'] = ($www['userID'] == $this->session->userdata('userID') && $www['wwwTitle'] != 'GALERIA') ? ' | '.anchor('/ws/ws_edit_www/'.$wwwID, 'Edit Www') : '';
			$output['www:rating'] = $this->ws->get_avarage_rate($wwwID);
			$output['www:count_rating'] = $this->ws->get_count_rate($wwwID);
			$output['www:is_poll'] = $www['is_poll'];
			$other_users = '';
					if($www['is_poll'] == 1){
						$other_users ='<b>["Wpis stworzony przy współpracy z innymi użytkownikami portalu"]</b>';
					}
			$output['www:sub_title'] = $other_users;
			if($www['is_poll'] == 0)
			{
				$width = 25 * $output['www:rating'] -1;
				$output['www:rating_form'] =
				'
				<br class="clear" />
				<div class="ws_rating_box hreview" id="rating">
				<div class="ws_label">Oceń wpis:</div>
				
				<div class="stars">
					<div class="rate_scale" style="width:'.$width.'px">&nbsp;</div>
					
					<div class="star_elements">
					<a href="/ws/ws_rate/'.$www['wwwID'].'/1" title="ocena 1">&nbsp</a>
					<a href="/ws/ws_rate/'.$www['wwwID'].'/2" title="ocena 2">&nbsp</a>
					<a href="/ws/ws_rate/'.$www['wwwID'].'/3" title="ocena 3">&nbsp</a>
					<a href="/ws/ws_rate/'.$www['wwwID'].'/4" title="ocena 4">&nbsp</a>
					<a href="/ws/ws_rate/'.$www['wwwID'].'/5" title="ocena 5">&nbsp</a>
					</div>
				</div>
				(<b>Aktualna ocena: ';
				if($output['www:rating'] == 0)
					$output['www:rating_form'] .= 'Brak ocen)</b>';
				else
					$output['www:rating_form'] .= ' <span class="rating" "id="current-rating"><span class="average">'.$output['www:rating'].'</span></span> - ilość ocen: <span class="votes">'.$output['www:count_rating'].'</span></b>)';
				$output['www:rating_form'] .= '</div><br class="clear" />';
			}else{
				$output['www:rating_form']='';
			}
			if($www['is_poll'] == 0)
			{
				$output['www:comments_header'] = '<h2>Komentarze</h2>';
				$output['www:add_comments_header'] = '<h3>Dodaj komentarz</h3>';
			}else{
				$output['www:comments_header'] = '';
				$output['www:add_comments_header'] = '<h3>Komentarz/opinia/pytanie/dodatkowa informacja...:</h3>';
			}
			
			//likes
			if($www['countLikes'] == 1)
				$output['www:countLikes'] = '<u>'.$www['countLikes'].' osoba</u> to lubi.';
			else if($www['countLikes'] == 0)
				$output['www:countLikes'] = 'Jeszcze nikt tego nie polubił.';
			else
				$output['www:countLikes'] = '<u>'.$www['countLikes'].' osoby</u> to lubią.';
				
				
			// set title
			$output['page:title'] = $this->site->config['siteName'].'  :: Wpisy wędkarzy - '.$www['wwwTitle'];
			$output['page:keywords'] = implode(',',explode(' ',$www['tags']));
			$output['page:description'] = $www['wwwTitle'];
			
			// set meta description
			if ($www['excerpt'])
			{
				$output['page:excerpt'] = $www['excerpt'];
			}
			
			
			
			// output other stuff
			$data['www'] = $www;
			$data['tags'] = explode(' ', $www['tags']);	
			
			//images
		$images = $this->images->get_images_by_folder_ref(strtolower(url_title('ws_'.$www['wwwID'])),100);
		// get topics
		$this->session->set_userdata('backToPhoto', $output['www:link'].'/'.$output['www:uri']);
		$output['photos'] = array();
		$output['photos_poll'] = array();
		if (!empty($images))
		{
			
			foreach($images as $image)
			{
				$imageData = $this->uploads->load_image($image['imageRef']);
				$imagePath = $imageData['src'];  
				$imageData = $this->uploads->load_image($image['imageRef'], true);				
				$imageThumbPath = $imageData['src'];
				
				//$tmp['photo:showImage'] = ($this->session->userdata('session_user')) ? TRUE : FALSE;
				$tmp['photo:imageRef'] = $image['imageRef'];
				$tmp['photo:imageData'] = $imageData;
				$tmp['photo:imagePath'] = ($this->session->userdata('session_user')) ? " href='".$imagePath."' class='lightbox' " : " href= '/users/login/".str_replace('/','-_-', $output['www:link'])."-_-".str_replace('/','-_-', $output['www:uri'])."' ";
				$tmp['photo:imageThumbPath'] = $imageThumbPath;
				$thumb = display_image($imageThumbPath, $image['imageName'], 100, 'class="pic"');
				
				$tmp['photo:imageThumb'] = $thumb;
				foreach($image as $key=>$el){
					$tmp['photo:'.$key] = $el;
					
				}
				
				if ($www['is_poll'] == 0)
				{
					$output['photos'][] = $tmp;
				}
				else
				{
					$output['photos_poll'][] = $tmp;
				}
			}
		}
		
		
			// display with cms layer
			$this->pages->view('ws_single', $output, TRUE);
		}
		else
		{
			show_404();
		}
	}
	function galerie()
	{
		$ws = $this->ws->get_ws(36, 0,'desc','GALERIA', 0 , 'wwwID');
                $ws_data=array();
		//$output['ws:ws'] = $this->ws->_populate_ws($ws,$is_logged);
                if ($ws && is_array($ws))
                {
                                $x = 0;
                                foreach($ws as $www)
                                {
					$rem_link='';
                                        // populate template array
					$image_parts = explode(".",$www['description']);
					$image_ext = $image_parts[count($image_parts)-1];
					$image_ref = str_replace(".".$image_ext, "", $www['description']);
					
					$img_thumb = '';
					if($this->session->userdata('session_user'))
					{
						$img_thumb = "<a href='/ws/w,".$www['wwwID']."'><img src='".site_url('thumbs/'.$image_ref.".".strtolower($image_ext))."' /></a>";
					}else{
						$img_thumb = "<a href='/users/login/".str_replace('/','-_-',$_SERVER['REQUEST_URI'])."'><img src='".site_url('thumbs/'.$image_ref.".".strtolower($image_ext))."' /></a>";
					}
					
                                        $ws_data[$x] = array(
						'www:id' => $www['wwwID'],
                                                'www:body' => $img_thumb,
                                                'www:excerpt' => $this->template->parse_body($www['excerpt'], TRUE, site_url('ws/w,'.$www['wwwID'])),
                                                
                                        );
                                        
                
                                        
                
                                        $x++;
                                }
        
                                $output['ws:ws'] =  $ws_data;
                        }
		// send ws to page
		$data['ws'] = $ws;
		
		// set pagination
		$output['pagination'] = ($pagination = $this->pagination->create_links()) ? $pagination : '';
		// set title
		$output['page:title'] = $this->site->config['siteName'].' |  :: Zdjęcia wędkarzy';
		$output['page:heading'] = 'Zdjęcia';
		
		// display with cms layer
		
		$this->pages->view('ws_gallery', $output, 'ws');
	}
	function tag($tag = '')
	{		
		// get partials
		$output = $this->partials;

		// get tags
		$ws = $this->ws->get_ws_by_tag($tag);
		$output['ws:ws'] = $this->_populate_ws($ws);

		// set title
		$output['page:title'] = $this->site->config['siteName'].' |  :: Wpisy wędkarzy';
		$output['page:heading'] = ' :: Wpisy wędkarzy na "'.$tag.'"';		

		// set pagination
		
		$output['pagination'] = ($pagination = $this->pagination->create_links()) ? $pagination : '';
						
		// display with cms layer
		$this->pages->view('ws', $output, TRUE);
	}
/*
	function month()
	{
		// get partials
		$output = $this->partials;

		// get www based on uri
		$year = $this->uri->segment(2);
		$month = $this->uri->segment(3);		

		// get tags
		$ws = $this->ws->get_ws_by_date($year, $month);
		$output['ws:ws'] = $this->_populate_ws($ws);

		// set title
		$output['page:title'] = $this->site->config['siteName'].' | Ws - '.date('F Y', mktime(0,0,0,$month,1,$year));
		$output['page:heading'] = date('F Y', mktime(0,0,0,$month,1,$year));			

		// set pagination
		$output['pagination'] = ($pagination = $this->pagination->create_links()) ? $pagination : '';		

		// display with cms layer
		$this->pages->view('ws', $output, TRUE);	
	}
	
	function year()
	{
		// get partials
		$output = $this->partials;

		// get www based on uri
		$year = $this->uri->segment(2);	

		// get tags
		$ws = $this->ws->get_ws_by_date($year);
		$output['ws:ws'] = $this->_populate_ws($ws);

		// set title
		$output['page:title'] = $this->site->config['siteName'].' | Ws - '.date('Y', mktime(0,0,0,1,1,$year));
		$output['page:heading'] = date('Y', mktime(0,0,0,1,1,$year));			

		// set pagination
		$output['pagination'] = ($pagination = $this->pagination->create_links()) ? $pagination : '';		

		// display with cms layer
		$this->pages->view('ws', $output, TRUE);	
	}

	function day()
	{
		// get partials
		$output = $this->partials;

		// get www based on uri
		$year = $this->uri->segment(2);
		$month = $this->uri->segment(3);
		$day = $this->uri->segment(4);	

		// get tags
		$ws = $this->ws->get_ws_by_date($year, $month, $day);
		$output['ws:ws'] = $this->_populate_ws($ws);

		// set title
		$output['page:title'] = $this->site->config['siteName'].' | Ws - '.date('D jS F Y', mktime(0,0,0,$month,$day,$year));
		$output['page:heading'] = date('D jS F Y', mktime(0,0,0,$month,$day,$year));

		// set pagination
		$output['pagination'] = ($pagination = $this->pagination->create_links()) ? $pagination : '';	
				
		// display with cms layer
		$this->pages->view('ws', $output, TRUE);	
	}
*/
	function search($query = '')
	{
		// get partials
		$output = $this->partials;

		// set tags
		$query = ($query) ? $query : $this->input->post('query');

		// get result from tags
		$objectIDs = $this->tags->search('ws', $query);

		$ws = $this->ws->search_ws($query, $objectIDs);
		$output['ws:ws'] = $this->_populate_ws($ws);
		$output['query'] = $query;		
		
		// set title
		$output['page:title'] = $this->site->config['siteName'].' |  :: Wpisy wędkarzy - szukanie wpisu dla "'.$output['query'].'"';
		$output['page:heading'] = 'Search ws for: "'.$output['query'].'"';

		// set pagination
		$output['pagination'] = ($pagination = $this->pagination->create_links()) ? $pagination : '';	
		
		// display with cms layer
		$this->pages->view('ws_search', $output, TRUE);		
	}

	function ac_search()
	{
		$tags = strtolower($_POST["q"]);
        if (!$tags)
        {
        	return FALSE;
        }

		if ($objectIDs = $this->tags->search('ws', $tags))
		{		
			// form dropdown and myql get countries
			if ($searches = $this->ws->search_ws($objectIDs))
			{
				// go foreach
				foreach($searches as $search)
				{
					$items[$search['tags']] = array('id' => $search['wwwID'], 'name' => $search['wwwTitle']);
				}
				foreach ($items as $key=>$value)
				{
					$id = $value['id'];
					$name = $value['name'];
					/* If you want to force the results to the query
					if (strpos(strtolower($key), $tags) !== false)
					{
						echo "$key|$id|$name\n";
					}*/
					$this->output->set_output("$key|$id|$name\n");
				}
			}
		}
	}
	
	function feed()
	{
		$tagdata = array();

		$this->load->helper('xml');
		
		$data['encoding'] = 'utf-8';
		$data['feed_name'] = $this->site->config['siteName'] . ' |  :: Wpisy wędkarzy RSS Feed';
		$data['feed_url'] = site_url('/ws');
		$data['page_description'] = ' :: Wpisy wędkarzy RSS Feed for '.$this->site->config['siteName'].'.';
		$data['page_language'] = 'en';
		$data['creator_email'] = $this->site->config['siteEmail'];
		$data['ws'] = $this->ws->get_ws(10);
		
        $this->output->set_header('Content-Type: application/rss+xml');
		$this->load->view('rss', $data);
	}
	
	
    function _populate_ws($ws = '', $is_logged=true)
    {
    	if ($ws && is_array($ws))
    	{
			$x = 0;
			foreach($ws as $www)
			{
				// populate template array
				$other_users = '';
					if($www['is_poll'] == 1){
						$other_users ='<b>["Wpis stworzony przy współpracy z innymi użytkownikami portalu"]</b>';
					}
				
				$www['description'] = parse_keywords(str_replace("\n","{clear}",$www['description']));
				$www['excerpt'] = parse_keywords($www['excerpt']);
				$www['excerpt_no_img'] = $www['excerpt'];
				if(!empty($www['mainImage']) && !strstr('<div class="image">', $www['description'])){
					$www['description'] = '<div class="image">{thumb:'.$www['mainImage'].'}</div>'.$www['description'];
				}
				if(!empty($www['mainImage']) && !strstr('<div class="image">', $www['excerpt'])){
					$www['excerpt'] = '<div class="image">{thumb:'.$www['mainImage'].'}</div>'.$www['excerpt'];
				}
				
				if(!empty($www['mainImage'])){
					$www['mainImage'] = '{image:'.$www['mainImage'].'}';
				}
				
				$data[$x] = array(
					'www:wwwID' => $www['wwwID'],
					'www:link' => site_url('ws/w,'.$www['wwwID']),
					'www:title' => $www['wwwTitle'],
					'www:sub_title' => $other_users,
					'www:uri' => $this->make_uri($www['wwwTitle']),
					'www:date' => ($www['dateCreated'] != '') ? date('d-m-Y', strtotime($www['dateCreated'])) : '',
					'www:day' => date('d', strtotime($www['wwwDate'])),
					'www:month' => date('M', strtotime($www['wwwDate'])),
					'www:year' => date('y', strtotime($www['wwwDate'])),																
					'www:body' => $this->template->parse_body($www['description'], TRUE, site_url('ws/w,'.$www['wwwID'])),
					'www:excerpt' => $this->template->parse_body($www['excerpt'], TRUE, site_url('ws/w,'.$www['wwwID'])),
					'www:excerpt_no_img' => $www['excerpt_no_img'],
					'www:main_img' => $this->template->parse_body($www['mainImage']),
					'www:author' => $this->ws->lookup_user($www['userID'], TRUE),
					'www:author-id' => $www['userID'],
					'www:countComments' => $www['countComments'],
					'www:countImages' => $www['countImages'],
					'www:lng' => $www['lng'],
					'www:lat' => $www['lat'],
				);
				if(!empty($www['lng']) && $www['lng'] != '' && !empty($www['lat']) && $www['lat'] != '' ){
					$data[$x]['www:is_map'] = true;
				}else{
					$data[$x]['www:is_map'] = false;
				}
				if($is_logged){
					$data[$x]['www:editLink'] = '<a href="'.site_url('ws/ws_edit_www/'.$www['wwwID']).'">Edytuj swój wpis &raquo;</a>';
				}else{
					$data[$x]['www:editLink'] = '';
				}
	
				
	
				$x++;
			}

			return $data;
		}
		else
		{
			return FALSE;
		}
    }
    function preview()
	{
		// get parsed body
		$html = $this->template->parse_body(str_replace("\n","{clear}",$this->input->post('body')));

		// filter for scripts
		$html = preg_replace('/<script(.*)<\/script>/is', '<em>This block contained scripts, please refresh page.</em>', $html);

		// output
		$this->output->set_output($html);
	}
	
	function addWatermark($start, $stop)
	{
		$this->clearWsCache();
		
		$directory = "static/uploads/";
 
		//get all image files with a .jpg extension.
		$images = glob($directory . "*.jpg");
		 
		//print each file name
		$i=0;
		foreach($images as $image)
		{
			if($i >=$start && $i<=$stop)
			{
				if(!strstr($image, 'thumb'))
				{
					echo $image.'<br />';
					$maxsize=650;
					$config['upload_path'] = '.'.$this->config->item('uploadsPath');;
					$config['allowed_types'] = 'gif|jpg|png|pdf|zip|mp3|mp4|js';
					$config['max_size']	= 4000;
					$config['max_width']  = 6000;
					$config['max_height']  = 5000;
					
					
					$config['encrypt_name']  = true;
					
					// load upload class
					$this->load->library('upload', $config);
					$this->load->library('image_lib');
					
					//$image = 'static/uploads/175a56cb94fccb0e270b9d3c7ba1e029.jpg';
					$config['image_library'] = 'gd2';
							$config['source_image'] = $image;
							$config['create_thumb'] = false;
							$config['maintain_ratio'] = true;
								
							$config['wm_text'] = 'WedkarskiPortal.pl'; 
							$config['wm_type'] = 'text'; 
							$config['wm_font_path'] = 'static/fonts/arial.ttf'; 
							$config['wm_font_size'] = '10'; 
							$config['wm_font_color'] = 'ffffff'; 
							$config['wm_vrt_alignment'] = 'top'; 
							$config['wm_hor_alignment'] = 'right'; 
							$config['wm_padding'] = '5';
							$config['wm_shadow_color'] = '333333';
							$config['wm_shadow_distance'] = 2;
							
							$config['width'] = $maxsize;
							$config['height'] = $maxsize;
							
							$this->image_lib->initialize($config);
							
							$this->image_lib->resize();
							if(!$this->image_lib->watermark()){ 
							echo $this->image_lib->display_errors(); 
							}
							
				}
				
			}
			$i++;
			
		}
		
		exit;
		
	}
	
	
	function upload_gallery_image()
	{
		$this->clearWsCache();
		
		$output = array();
		if(count($_POST) > 0)
		{
			$userID = 303;
			if ($this->session->userdata('session_user')){
				$userID = $this->session->userdata('userID');
			}
			$folderID = $userID;
			
				$this->uploads->allowedTypes = 'jpg|gif|png|JPG|jpeg';
				
				$rand = substr(md5(rand(111,9999)),0,15);
				$imageName = 'Image'.$rand;
				$imageRef = url_title(trim(substr(strtolower($imageName),0,30)));
		
				if ($this->form_validation->unique($imageRef, 'images.imageRef'))
				{	
					if ($imageData = $this->uploads->upload_image())
					{
						$this->core->set['filename'] = $imageData['file_name'];
						$this->core->set['filesize'] = $imageData['file_size'];
						
					}
		
					// get image errors if there are any
					if ($this->uploads->errors)
					{
						//$this->form_validation->set_error($this->uploads->errors);
						show_error($this->uploads->errors);
					}
					else
					{
						// set image ref
						$this->core->set['class'] = 'default';
						$this->core->set['imageRef'] = $imageRef;
						$this->core->set['imageName'] = ($this->input->post('imageName') && trim($this->input->post('imageName')) != '') ? $this->make_uri($this->input->post('imageName')) : $imageName;
						$this->core->set['dateCreated'] = date("Y-m-d H:i:s");
						$this->core->set['userID'] =$userID;												
				
						// update
						if ($this->core->update('images'))
						{
							$this->core->set['dateCreated'] = date("Y-m-d H:i:s");
							$this->core->set['userID'] = $this->session->userdata('userID');
							$this->core->set['description'] = $imageRef."".$imageData['file_ext'];
							
								// set date
								$this->core->set['dateCreated'] = date("Y-m-d H:i:s");
								$this->core->set['wwwDate'] = date("Y-m-d H:i:s");
								$this->core->set['tags'] = trim(strtolower($this->input->post('tags')));
								$this->core->set['userID'] = $userID;
								$this->core->set['wwwID'] = $this->input->post('wwwID');
								if($this->config->item('mobile'))
									$this->core->set['mobile'] = 1;
								else
									$this->core->set['mobile'] = 0;
								if($_POST['banners'] == 1)
									$this->core->set['galleryCat'] = $this->input->post('galleryCatBanners');
									
								$this->core->update('ws');
								$wwwID = $this->db->insert_id();
								
								$subjects = $this->input->post('subject');
								if(!empty($subjects))
								{
									
									foreach($subjects as $subj){
										$this->ws->save_ws_subjects($subj, $wwwID);
									}
								}
								
								$this->livebox->addLivebox("GALLERY",$wwwID);
								
						}			
					}
				}
				else
				{
					//$this->form_validation->set_error('<p>The image reference you entered has already been used, please try another.</p>');
					show_error('<p>The image reference you entered has already been used, please try another.</p>');
				}
			if($_POST['banners'] == 1)
				redirect('/profil/'.$this->session->userdata('displayName').'/cropImage/'.$wwwID.'/1');
			else
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	
	function add_register()
	{
		//print_r($_POST);
		//exit;
		$output = array();
		if(count($_POST) > 0)
		{
			
			if(!empty($_FILES) && $_FILES['image']['name'] != '')
			{
				$folderID = 115;
			
				$this->uploads->allowedTypes = 'jpg|gif|png|JPG|jpeg';
				$this->uploads->userID = $this->session->userdata('userID');
				
				$rand = substr(md5(rand(111,9999)),0,15);
				$imageName = 'Image'.$rand;
				$imageRef = url_title(trim(substr(strtolower($imageName),0,30)));
		
				if ($this->form_validation->unique($imageRef, 'images.imageRef'))
				{
					
					if ($imageData = $this->uploads->upload_image())
					{
						$this->core->set['filename'] = $imageData['file_name'];
						$this->core->set['filesize'] = $imageData['file_size'];
						
						// get image errors if there are any
						if ($this->uploads->errors)
						{
							//$this->form_validation->set_error($this->uploads->errors);
							show_error($this->uploads->errors);
						}
						else
						{
							// set image ref
							$this->core->set['class'] = 'default';
							$this->core->set['imageRef'] = $imageRef;
							$this->core->set['imageName'] = ($this->input->post('imageName') && trim($this->input->post('imageName')) != '') ? $this->make_uri($this->input->post('imageName')) : $imageName;
							$this->core->set['dateCreated'] = $this->input->post('dateCreated').date(" H:i:s");
							$this->core->set['userID'] = $this->session->userdata('userID');												
							
							
							// update
							if ($this->core->update('images'))
							{
								$this->core->set['description'] = $imageRef."".$imageData['file_ext'];
								
								$this->core->set['userID'] = $this->session->userdata('userID');
							}
						}
					}
				}
				else
				{
					//$this->form_validation->set_error('<p>The image reference you entered has already been used, please try another.</p>');
					show_error('<p>The image reference you entered has already been used, please try another.</p>');
				}
			}else{
				//$this->core->set['description'] = $this->session->userdata('description');
			}
			
				
								if(!empty($_POST['parentID']))
								{
									$_POST['custom2'] = str_replace(',','.',$_POST['custom2']);
								}
				
								// set date
								if(!empty($_POST['parentID']))
								{
									$this->core->set['parentID'] = $this->input->post('parentID');
								}
								
								$this->core->set['wwwDate'] = date("Y-m-d H:i:s");
								$this->core->set['tags'] = trim(strtolower($this->input->post('tags')));
								$this->core->set['userID'] = $this->session->userdata('userID');
								
								$this->core->set['wwwID'] = $this->input->post('wwwID');
								$this->core->set['description2'] = $this->input->post('description2');
								if($this->config->item('mobile'))
									$this->core->set['mobile'] = 1;
								else
									$this->core->set['mobile'] = 0;
								
								if($_POST['wwwID'] != ''){
									$objectID = array('wwwID' => $_POST['wwwID']);
									$this->core->update('ws',$objectID);
									$wwwID = $_POST['wwwID'];
									if(!empty($_POST['parentID']))
									{
										$this->ws->del_ws_subjects($wwwID);
										$this->ws->del_ws_subjects2($wwwID);
									}
									
								}else{
									if(!empty($_POST['dateCreated'])){
										$this->core->set['dateCreated'] = $this->input->post('dateCreated').date(" H:i:s");
									}else{
										$this->core->set['dateCreated'] = date("Y-m-d H:i:s");
									}
									$this->core->update('ws');
									$wwwID = $this->db->insert_id();
									//add to livebox
									if(!empty($_POST['parentID']))
									{
										$this->livebox->addLivebox("REJESTR_RYBA",$wwwID);
									}else{
										$this->livebox->addLivebox("REJESTR_LOWISKO",$wwwID);
									}
									$this->users->add_kudos($this->session->userdata('userID'),1);
								}
								
								
								if(!empty($_POST['parentID']))
								{
									$subject = $this->input->post('subject');
									$this->ws->save_ws_subjects($subject, $wwwID);
								
									$subject2 = $this->input->post('subject2');
									$this->ws->save_ws_subjects2($subject2, $wwwID);
								}
								
								
					
				
			
			redirect(str_replace($_POST['wwwID'], '', $_SERVER['HTTP_REFERER']));
		}
	}
	
	
	function remove_www($wwwID)
	{
		$this->clearWsCache();
		
		$ws = $this->ws->get_www($wwwID);
		if (!$this->session->userdata('userID') || $ws['userID'] != $this->session->userdata('userID'))
		{
			$this->session->set_flashdata('error', 'Nie masz praw do wykonania tej akcji.');
			if(!empty($_SERVER['HTTP_REFERER']))
			redirect($_SERVER['HTTP_REFERER']);
			else
			redirect('/users/login/'.$this->core->encode($this->uri->uri_string()));
		}
		if($this->ws->del_www($wwwID))
		{
			$this->session->set_flashdata('success', 'Wpis usunięto pomyślnie.');
			$this->users->rem_kudos($this->session->userdata('userID'),3);
		}else{
			$this->session->set_flashdata('error', 'Wystąpił problem podczas usuwania wpisu.');
		}
		if(!empty($_SERVER['HTTP_REFERER']))
		redirect($_SERVER['HTTP_REFERER']);
		else
		redirect('/users/login/'.$this->core->encode($this->uri->uri_string()));
		
	}
	function sitemap()
	{
		// get partials
		//$output = $this->partials;
						
		// get latest ws
		$ws = $this->ws->get_ws(10000, 0);
		$ws = $this->_populate_ws($ws);

		header ("Content-Type:text/xml");  
		echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n";

                if(!empty($ws))
		{
			$i=0;
			
			foreach($ws as $www)
			{
				if($i<4)
				$priotity='1';
				else if($i>=4 && $i<9)
				$priotity='0.9';
				else
				$priotity='0.8';
				
				echo '<url>'."\n";
				echo '<loc>'.$www['www:link'].'/'.$www['www:uri'].'</loc>'."\n";
                                echo '<changefreq>daily</changefreq>'."\n";
				echo '<priority>'.$priotity.'</priority>'."\n";
				echo '</url>'."\n";
				$i++;
			}
		}
		echo '</urlset>'."\n";
		
	}
}

				
