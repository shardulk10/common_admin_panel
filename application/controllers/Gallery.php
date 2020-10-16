<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Banners extends BaseController
{
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('gallery_model');
        $this->isLoggedIn();
    }

   	public function index(){
   		$this->global['pageTitle'] = 'Maxima Ventures LLP : Manage Gallery';
      $this->loadViews("dashboard", $this->global, NULL , NULL);
   	}

   	function manageGallery() {
    	$data['cube_id'] = $this->input->post('cube_id');
			$searchText = $this->security->xss_clean($this->input->post('searchText'));
      $data['searchText'] = $searchText;
      $this->load->library('pagination');
      $count = $this->banners_model->galleryListingCount($searchText);
      $returns = $this->paginationCompress ("manageGallery/", $count, 10 );
      $data['slideRecords'] = $this->gallery_model->galleryListing($searchText, $returns["page"],   $returns["segment"], $data['cube_id']);
      $this->global['pageTitle'] = 'Maxima Ventures LLP : Gallery Listing';
      $this->loadViews("gallery", $this->global, $data, NULL);
    }

    function editGallery($slideId = NULL) {
            if($slideId == null) {
                redirect('manageGallery');
            }
            $data['slideInfo'] = $this->gallery_model->getGalleryInfo($slideId)[0];   
			      $this->global['pageTitle'] = 'Maxima Ventures LLP : Edit Gallery';
            $this->loadViews("editGallery", $this->global, $data, NULL);
    }

    function updateGallery($slideId) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('gallery_heading','Gallery Heading','trim|required');
            if($this->form_validation->run() == FALSE) {
                $this->newGallery();
            } else {
                $gallery_heading = $this->security->xss_clean($this->input->post('gallery_heading'));               
                $slideInfo = array();
                $slideInfo['gallery_heading'] = $gallery_heading;
                $slideInfo['updated_datetime'] = @date('Y-m-d H:i:s');
                if(!empty($_FILES['gallery_image']['name'])){
                  $fileUpload = $this->do_upload('gallery_image','gallery/');
                  
                  if($fileUpload['success'] == 1){
                     $uploadedFile = base_url().'assets/uploads/gallery/'.$fileUpload['upload_data']['file_name'];
                     $slideInfo['image_path'] = $uploadedFile;
                  }
                }

                $result = $this->gallery_model->updateGallery($slideInfo, $slideId);
                if($result > 0) {
                    $this->session->set_flashdata('success', 'Gallery has been updated successfully');
                } else {
                    $this->session->set_flashdata('error', 'Gallery updation failed');
                }
                redirect('editGallery/'.$slideId);
            }
    }

    function newGallery() {
            $this->global['pageTitle'] = "";
            $this->global['pageTitle'] = 'Maxima Ventures LLP : Add New Gallery';
            $this->loadViews("newGallery");
    }

    function addNewGallery() {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('gallery_heading','Gallery Heading','trim|required');
            if($this->form_validation->run() == FALSE){
                $this->newGallery();
            } else {
                $gallery_heading = $this->security->xss_clean($this->input->post('gallery_heading'));
				$slideInfo = array();
				$slideInfo['gallery_heading'] = $gallery_heading;
				$slideInfo['createdby'] = $this->session->userdata('userId');
				$slideInfo['created_datetime'] = @date('Y-m-d H:i:s');
				$slideInfo['updated_datetime'] = $slideInfo['created_datetime'];

                                                         
                if(!empty($_FILES['gallery_image']['name'])){
                    $fileUpload = $this->do_upload('gallery_image','gallery/');
                    if($fileUpload['success'] == 1){
                       $uploadedFile = base_url().'assets/uploads/gallery/'.$fileUpload['upload_data']['file_name'];
                       $slideInfo['image_path'] = $uploadedFile;

                    }
                }

                $result = $this->banners_model->addNewGallery($slideInfo);
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New Gallery Added successfully');
                    redirect('manageGallery');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Gallery creation failed');
                    redirect('newGallery');
                }
            }
    }

    function deleteGallery($slideId=0)
    {
        $result = $this->gallery_model->deleteGallery($slideId);
    		if($result > 0) {
    			$this->session->set_flashdata('success', 'Gallery has been deleted successfully');
    		} else {
    			$this->session->set_flashdata('error', 'Gallery deletion failed');
    		}
    		redirect('manageGallery');
    }
}
