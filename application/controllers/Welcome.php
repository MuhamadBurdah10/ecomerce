<?php

/*UPDATED ALL BY FAHMI*/

defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Facebook/FacebookSession.php');
require_once('Facebook/FacebookRequest.php');
require_once('Facebook/FacebookResponse.php');
require_once('Facebook/FacebookSDKException.php');
require_once('Facebook/FacebookRequestException.php');
require_once('Facebook/FacebookRedirectLoginHelper.php');
require_once('Facebook/FacebookAuthorizationException.php');
require_once('Facebook/GraphObject.php');
require_once('Facebook/GraphUser.php');
require_once('Facebook/GraphSessionInfo.php');
require_once('Facebook/Entities/AccessToken.php');
require_once('Facebook/HttpClients/FacebookCurl.php');
require_once('Facebook/HttpClients/FacebookHttpable.php');
require_once('Facebook/HttpClients/FacebookCurlHttpClient.php');

// load library class
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphUser;
use Facebook\GraphSessionInfo;
use Facebook\FacebookHttpable;
use Facebook\FacebookCurlHttpClient;
use Facebook\FacebookCurl;

class Welcome extends CI_Controller {
	function __Construct(){
        parent ::__construct();
        $this->CI =& get_instance();
    }
	public function index(){

		if (!$this->CI->session->userdata('logged_in')){
			$data['title'] = "Meet your next fav book";
			$data['metadata'] = array("url"=>site_url(),
									  "title"=>"Welcome to Komiqus",
									  "type"=>"Homepage",
									  "description"=>"WE ARE WHAT WE READ",
									  "image"=>site_url('./assets/img/logo/logo.png'),
									  );
			        
	        ////////////////////////////////////////////////////////////////////
	        // facebook login
	        ////////////////////////////////////////////////////////////////////
	        $app_id = '1638712876351816';
	        $app_secret = '46139961025c0f4966a5b38631540e8e';
	        $redirect_url= base_url('fblogin/login');;
	        
	        FacebookSession::setDefaultApplication($app_id, $app_secret);
	        $helper = new FacebookRedirectLoginHelper($redirect_url);
	        $sess = $helper->getSessionFromRedirect();
	        
	        if($this->session->userdata('fb_token')){
	            $sess = new FacebookSession($this->session->userdata('fb_token'));
	            
	            try
	            {
	            	$sess->Validate($id, $secret);
	            }
	            catch(FacebookAuthorizationException $e)
	            {
	            	print_r($e);
	            }
	        }
	        
	        $data['loggedin'] = FALSE;
	        // login url
	        $data['login_url'] = $helper->getLoginUrl(array('email'));
	        
	        if(isset($sess)){
	        	$this->session->set_userdata('fb_token', $sess->getToken());
	        	$request = new FacebookRequest($sess, 'GET', '/me');
	        	$response = $request->execute();
	        	$graph = $response->getGraphObject(GraphUser::classname());
	            $sess_data = array(
	                'user_id' => $graph->getId(),
	            	'firstname' => $graph->getName(),
	            	'email' => $graph->getProperty('email'),
	            	'picture' => 'https://graph.facebook.com/'.$graph->getId().'/picture?width=50',
	            	'loggedin' => TRUE
	            );
	            $sess_data = $this->db->insert('users');
	            $this->session->set_userdata($sess_data);
	             redirect('fblogin');

	        }
			$this->layout->public_temp('public_page/index',$data);
		}else{
            redirect(base_url('home'));
        }
	}

    public function notfound(){
      	$data['title'] = "Meet your next fav book";
    	$data['metadata'] = array("url"=>site_url(),
                                      "title"=>"Welcome to Komiqus",
                                      "type"=>"Homepage",
                                      "description"=>"WE ARE WHAT WE READ",
                                      "image"=>site_url('./assets/img/logo/logo.png'),
                                      );
        $this->layout->public_temp('notfound',$data);
    }
}
