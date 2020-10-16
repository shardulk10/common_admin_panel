<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Banners extends BaseController
{
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('banners_model');
        $this->isLoggedIn();
    }

   	public function index(){
   		$this->global['pageTitle'] = 'Maxima Ventures LLP : Manage Banners';
      $this->loadViews("dashboard", $this->global, NULL , NULL);
   	}

   	function manageBanners() {
    	$data['cube_id'] = $this->input->post('cube_id');
			$searchText = $this->security->xss_clean($this->input->post('searchText'));
      $data['searchText'] = $searchText;
      $this->load->library('pagination');
      $count = $this->banners_model->bannersListingCount($searchText);
      $returns = $this->paginationCompress ("manageBanners/", $count, 10 );
      $data['slideRecords'] = $this->banners_model->bannersListing($searchText, $returns["page"],   $returns["segment"], $data['cube_id']);
      $this->global['pageTitle'] = 'Maxima Ventures LLP : Banners Listing';
      $this->loadViews("banners", $this->global, $data, NULL);
    }

    function editBanners($slideId = NULL) {
            if($slideId == null) {
                redirect('manageBanners');
            }
            $data['slideInfo'] = $this->banners_model->getBannersInfo($slideId)[0];   
			      $this->global['pageTitle'] = 'Maxima Ventures LLP : Edit Banners';
            $this->loadViews("editBanners", $this->global, $data, NULL);
    }

    function updateBanners($slideId) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('banner_heading','Banner Heading','trim|required');
            if($this->form_validation->run() == FALSE) {
                $this->newBanners();
            } else {
                $banner_heading = $this->security->xss_clean($this->input->post('banner_heading'));               
                $slideInfo = array();
                $slideInfo['banner_heading'] = $banner_heading;
                $slideInfo['updated_datetime'] = @date('Y-m-d H:i:s');
                if(!empty($_FILES['banner_image']['name'])){
                  $fileUpload = $this->do_upload('banner_image','banners/');
                  
                  if($fileUpload['success'] == 1){
                     $uploadedFile = base_url().'assets/uploads/banners/'.$fileUpload['upload_data']['file_name'];
                     $slideInfo['image_path'] = $uploadedFile;
                  }
                }

                $result = $this->banners_model->updateBanners($slideInfo, $slideId);
                if($result > 0) {
                    $this->session->set_flashdata('success', 'Banners has been updated successfully');
                } else {
                    $this->session->set_flashdata('error', 'Banners updation failed');
                }
                redirect('editBanners/'.$slideId);
            }
    }

    function newBanners() {
            $this->global['pageTitle'] = "";
            $this->global['pageTitle'] = 'Maxima Ventures LLP : Add New Banners';
            $this->loadViews("newBanners");
    }

    function addNewBanners() {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('banner_heading','Banner Heading','trim|required');
            if($this->form_validation->run() == FALSE){
                $this->newBanners();
            } else {
                $banner_heading = $this->security->xss_clean($this->input->post('banner_heading'));
				$slideInfo = array();
				$slideInfo['banner_heading'] = $banner_heading;
				$slideInfo['createdby'] = $this->session->userdata('userId');
				$slideInfo['created_datetime'] = @date('Y-m-d H:i:s');
				$slideInfo['updated_datetime'] = $slideInfo['created_datetime'];

                                                         
                if(!empty($_FILES['banner_image']['name'])){
                    $fileUpload = $this->do_upload('banner_image','banners/');
                    if($fileUpload['success'] == 1){
                       $uploadedFile = base_url().'assets/uploads/banners/'.$fileUpload['upload_data']['file_name'];
                       $slideInfo['image_path'] = $uploadedFile;

                    }
                }

                $result = $this->banners_model->addNewBanners($slideInfo);
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New Banner Added successfully');
                    redirect('manageBanners');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Banner creation failed');
                    redirect('newBanners');
                }
            }
    }

    function deleteBanners($slideId=0)
    {
        $result = $this->banners_model->deleteBanners($slideId);
    		if($result > 0) {
    			$this->session->set_flashdata('success', 'Banner has been deleted successfully');
    		} else {
    			$this->session->set_flashdata('error', 'Banner deletion failed');
    		}
    		redirect('manageBanners');
    }
}