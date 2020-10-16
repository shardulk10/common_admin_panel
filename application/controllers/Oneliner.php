<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : Slide (UserController)
 * Slide class to control all slide related operations.
 * @author : Shardul Kulkarni <shardulk10@gmail.com>
 * @version : 1.1
 * @since : Oct 2019
 */
class Oneliner extends BaseController
{
	/**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('oneliner_model');
		$this->isLoggedIn();
		
		$this->consumer_key = $this->config->item('twitter_consumer_key'); // Enter your consumer key.
		$this->consumer_secret = $this->config->item('twitter_consumer_secret'); // Enter your consumer secret.
		$this->access_token = $this->config->item('twitter_access_token'); // Enter your access token.
		$this->access_token_secret = $this->config->item('twitter_access_token_secret'); // Enter your access token secret.
        
    }

   	public function index(){
   		$this->global['pageTitle'] = $this->config->item('site_title').': Manage One Liner';

        $this->loadViews("dashboard", $this->global, NULL , NULL);
   	}

   	/**
     * This function is used to load the Oneliner list
     */
    function manageOneliner()
    {
      $searchText = $this->security->xss_clean($this->input->post('searchText'));
      $data['searchText'] = $searchText;

      $this->load->library('pagination');

      $count = $this->oneliner_model->onelinerListingCount($searchText);

      $returns = $this->paginationCompress ( "manageOneliner/", $count, 10 );
      // print_r($data);die;

      $data['slideRecords'] = $this->oneliner_model->onelinerListing($searchText, $returns["page"], $returns["segment"]);

      $this->global['pageTitle'] = $this->config->item('site_title').': Oneliner Listing';

      $this->loadViews("oneliner", $this->global, $data, NULL);

    }

    /**
     * This function is used load Oneliner edit information
     * @param number $onelinerId : Optional : This is oneliner id
     */
    function editOneliner($onelinerId = NULL)
    {
            if($onelinerId == null)
            {
                redirect('manageOneliner');
            }

            $data['slideInfo'] = $this->oneliner_model->getOnelinerInfo($onelinerId)[0];

            $this->global['pageTitle'] = $this->config->item('site_title').': Edit Oneliner';

            $this->loadViews("editOneliner", $this->global, $data, NULL);

    }

    /**
     * This function is used to add new Oneliner to the system
     */
    function updateOneliner($slideId)
    {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('oneliner','Oneliner','trim|required');

            if($this->form_validation->run() == FALSE) {
                $this->newOneliner();
            } else {

                $oneliner = $this->security->xss_clean($this->input->post('oneliner'));

        				$slideInfo = array();
        				$slideInfo['oneliner'] = $oneliner;
                $slideInfo['updatedby'] = $this->session->userdata('userId');
                $slideInfo['updated_datetime'] = @date('Y-m-d H:i:s');

                $result = $this->oneliner_model->updateOneliner($slideInfo, $slideId);

                if($result > 0) {
                    $this->session->set_flashdata('success', 'One Liner has been updated successfully');
                } else {
                    $this->session->set_flashdata('error', 'One Liner updation failed');
                }
                redirect('editOneliner/'.$slideId);
            }

    }


    /**
     * This function is used to load the add new form for oneliner
     */
    function newOneliner()
    {

            $this->global['pageTitle'] = $this->config->item('site_title').': Add New Oneliner';

            $this->loadViews("newOneliner");

    }

    /**
     * This function is used to add new Oneliner to the system
     */
    function addNewOneliner()
    {

            $this->load->library('form_validation');

            $this->form_validation->set_rules('oneliner','Oneliner','trim|required');
            if($this->form_validation->run() == FALSE) {
                $this->newOneliner();
            } else {

                $oneliner = $this->security->xss_clean($this->input->post('oneliner'));

        				$slideInfo = array();
        				$slideInfo['oneliner'] = $oneliner;
                $slideInfo['createdby'] = $this->session->userdata('userId');
        				$slideInfo['created_datetime'] = @date('Y-m-d H:i:s');
        				$slideInfo['updated_datetime'] = $slideInfo['created_datetime'];

                $result = $this->oneliner_model->addNewOneliner($slideInfo);

                if($result > 0) {
					$dataPostTwitter = $this->PostTweet($this->consumer_key, $this->consumer_secret, $this->access_token, $this->access_token_secret, $oneliner);
					
                    $this->session->set_flashdata('success', 'New Oneliner created successfully');
                    redirect('manageOneliner');
                } else {
                    $this->session->set_flashdata('error', 'Oneliner creation failed');
                    redirect('newOneliner');
                }

            }

    }

	// Twitter Function 1 Start
	// Ref : https://wp-time.com/post-tweet-using-twitter-api-php/
	function BaseString($url, $parameters){
		$get_url = rawurlencode($url);
		$string = array();
		ksort($parameters);
		foreach ($parameters as $key => $value) {
			$string[] = "$key=" . rawurlencode($value);
		}
		return "POST&".$get_url."&".rawurlencode(implode('&', $string));
	}
	// Twitter Function 1 End
	
	// Twitter Function 2 Start
	/* Post Tweet */
	// https://wp-time.com/post-tweet-using-twitter-api-php/
	function PostTweet($consumer_key, $consumer_secret, $access_token, $access_token_secret, $tweet){
		$parameters = array(
			'oauth_consumer_key' => $consumer_key,
			'oauth_nonce' => time(),
			'oauth_signature_method' => 'HMAC-SHA1',
			'oauth_timestamp' => time(),
			'oauth_token' => $access_token,
			'oauth_version' => '1.0',
			'status' => $tweet
		);
		$base_string = $this->BaseString("https://api.twitter.com/1.1/statuses/update.json", $parameters);
		$composite_key = $consumer_secret."&".$access_token_secret;
		$oauth_signature = base64_encode(hash_hmac('sha1', $base_string, $composite_key, true));
		$parameters['oauth_signature'] = $oauth_signature;
		$options = array('http' =>
			array(
				'method' => "POST",
				'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
				'content' => http_build_query($parameters)
			)
		);
		$context = stream_context_create($options);
		$result = file_get_contents("https://api.twitter.com/1.1/statuses/update.json", false, $context);
		$json = json_decode($result, true);
		return $json;
	}
	// Twitter Function 2 End

    /**
     * This function is used to delete Oneliner
     */
    function deleteOneliner($slideId=0)
    {
        $result = $this->oneliner_model->deleteOneliner($slideId);

    		if($result > 0) {
    			$this->session->set_flashdata('success', 'Oneliner has been deleted successfully');
    		} else {
    			$this->session->set_flashdata('error', 'Oneliner deletion failed');
    		}
    		redirect('manageOneliner');
    }


}