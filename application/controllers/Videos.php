<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Videos extends BaseController
{
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('videos_model');
        $this->isLoggedIn();
    }

   	public function index(){
   		$this->global['pageTitle'] = $this->config->item('site_title').' : Manage Videos';
      $this->loadViews("dashboard", $this->global, NULL , NULL);
   	}

   	function manageVideos() {
    	$data['cube_id'] = $this->input->post('cube_id');
			$searchText = $this->security->xss_clean($this->input->post('searchText'));
      $data['searchText'] = $searchText;
      $this->load->library('pagination');
      $count = $this->videos_model->videosListingCount($searchText);
      $returns = $this->paginationCompress ("manageVideos/", $count, 10 );
      $data['slideRecords'] = $this->videos_model->videosListing($searchText, $returns["page"],   $returns["segment"], $data['cube_id']);
      $this->global['pageTitle'] = $this->config->item('site_title').' : Videos Listing';
      $this->loadViews("videos", $this->global, $data, NULL);
    }

    function editVideos($slideId = NULL) {
            if($slideId == null) {
                redirect('manageVideos');
            }
            $data['slideInfo'] = $this->videos_model->getVideosInfo($slideId)[0];   
			      $this->global['pageTitle'] = $this->config->item('site_title').' : Edit Videos';
            $this->loadViews("editVideos", $this->global, $data, NULL);
    }

    function updateVideos($slideId) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('videos_heading','Videos Heading','trim|required');
            if($this->form_validation->run() == FALSE) {
                $this->newVideos();
            } else {
                $videos_heading = $this->security->xss_clean($this->input->post('videos_heading')); 
				$videos_url = $this->security->xss_clean($this->input->post('videos_url'));				
                $slideInfo = array();
                $slideInfo['videos_heading'] = $videos_heading;
                $slideInfo['updated_datetime'] = @date('Y-m-d H:i:s');
				$slideInfo['videos_url'] = $videos_url;
                
                $result = $this->videos_model->updateVideos($slideInfo, $slideId);
                if($result > 0) {
                    $this->session->set_flashdata('success', 'Videos has been updated successfully');
                } else {
                    $this->session->set_flashdata('error', 'Videos updation failed');
                }
                redirect('editVideos/'.$slideId);
            }
    }

    function newVideos() {
            $this->global['pageTitle'] = "";
            $this->global['pageTitle'] = $this->config->item('site_title').' : Add New Video';
            $this->loadViews("newVideos");
    }

    function addNewVideos() {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('videos_heading','Video Heading','trim|required');
            if($this->form_validation->run() == FALSE){
                $this->newVideos();
            } else {
                $videos_heading = $this->security->xss_clean($this->input->post('videos_heading'));
				$videos_url = $this->security->xss_clean($this->input->post('videos_url'));
				$slideInfo = array();
				$slideInfo['videos_heading'] = $videos_heading;
				$slideInfo['createdby'] = $this->session->userdata('userId');
				$slideInfo['created_datetime'] = @date('Y-m-d H:i:s');
				$slideInfo['updated_datetime'] = $slideInfo['created_datetime'];
				$slideInfo['videos_url'] = $videos_url;
				
                $result = $this->videos_model->addNewVideos($slideInfo);
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New Videos Added successfully');
                    redirect('manageVideos');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Videos creation failed');
                    redirect('newVideos');
                }
            }
    }

    function deleteVideos($slideId=0)
    {
        $result = $this->videos_model->deleteVideos($slideId);
    		if($result > 0) {
    			$this->session->set_flashdata('success', 'Video has been deleted successfully');
    		} else {
    			$this->session->set_flashdata('error', 'Video deletion failed');
    		}
    		redirect('manageVideos');
    }
}