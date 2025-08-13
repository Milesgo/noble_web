<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index() {
				
		/* Google App Client Id */
		define('CLIENT_ID', '113302326315-5gt9hqgm0orhql8atni6gqo19q4vfaqs.apps.googleusercontent.com');

		/* Google App Client Secret */
		define('CLIENT_SECRET', 'OpdiBUxKD9-r9HASTkeGomIK');

		/* Google App Redirect Url */
		define('CLIENT_REDIRECT_URL', 'http://www.comixest.com/nobleredirect.php');

		$this->load->view("oauth");

		// Google passes a parameter 'code' in the Redirect Url
		if(isset($_GET['code'])) {
			try {	
				
				// Get the access token 
				$data = $this->GetAccessToken(CLIENT_ID, CLIENT_REDIRECT_URL, CLIENT_SECRET, $_GET['code']);
				
				// Get user information
				$user_info = $this->GetUserProfileInfo($data['access_token']);

				echo '<pre>';print_r($user_info); echo '</pre>';

				// Now that the user is logged in you may want to start some session variables
				$_SESSION['logged_in'] = 1;

				// You may now want to redirect the user to the home page of your website
				// header('Location: home.php');
			}
			catch(Exception $e) {
				echo $e->getMessage();
				exit();
			}
		}		
	}

	public function GetAccessToken($client_id, $redirect_uri, $client_secret, $code) {	
		$url = 'https://accounts.google.com/o/oauth2/token';			
		
		$curlPost = 'client_id=' . $client_id . '&redirect_uri=' . $redirect_uri . '&client_secret=' . $client_secret . '&code='. $code . '&grant_type=authorization_code';
		$ch = curl_init();		
		curl_setopt($ch, CURLOPT_URL, $url);		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);		
		curl_setopt($ch, CURLOPT_POST, 1);		
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);	
		$data = json_decode(curl_exec($ch), true);
		$http_code = curl_getinfo($ch,CURLINFO_HTTP_CODE);		
		if($http_code != 200) 
			throw new Exception('Error : Failed to receieve access token');
			
		return $data;
	}

	public function GetUserProfileInfo($access_token) {	
		$url = 'https://www.googleapis.com/androidpublisher/v3/applications/com.noble.ocarina/purchases/subscriptions/noble_subscription/tokens/token';	

		$ch = curl_init();		
		curl_setopt($ch, CURLOPT_URL, $url);		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '. $access_token));
		$data = json_decode(curl_exec($ch), true);
		$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);		
		if($http_code != 200) 
			throw new Exception('Error : Failed to get user information');
			
		return $data;
	}
}
?>