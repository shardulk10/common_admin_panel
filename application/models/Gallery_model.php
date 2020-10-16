<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Gallery_model extends CI_Model
{

    function galleryListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.id');
        $this->db->from('tbl_gallery as BaseTbl');
        if($this->session->userdata("userId")==1)
        {
         //select all
        } else {
        //$this->db->where('BaseTbl.createdby', $this->session->userdata("userId"));
        }
        $query = $this->db->get();
        return $query->num_rows();
    }
    
    function getActiveGalleryHome($userId=0)
    {
        $this->db->select('*');
        $this->db->from('tbl_gallery');
        $this->db->limit(10,0);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    function getActiveGallery($userId=0)
    {
        $this->db->select('*');
        $this->db->from('tbl_gallery');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    function galleryListing($searchText = '', $page, $segment, $cubeId)
    {

        $this->db->select('*');
        $this->db->from('tbl_gallery as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.gallery_heading  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        if($this->session->userdata("userId")==1)
        {
           //select all
        } else {
            //$this->db->where('BaseTbl.createdby', $this->session->userdata("userId"));
        }
        $this->db->order_by("updated_datetime", "desc");
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    function getGalleryInfo($slideId)
    {
        $this->db->select('*');
        $this->db->from('tbl_gallery');
        $this->db->where('id', $slideId);
        $query = $this->db->get();
        return $query->result();
    }

    function updateGallery($slideInfo, $slideId)
    {
        $this->db->trans_start();
        $this->db->where('id', $slideId);
        $this->db->update('tbl_gallery', $slideInfo);
        $this->db->trans_complete();
        return true;
    }

    function addNewGallery($slideInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_gallery', $slideInfo);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        return $insert_id;
    }

    function deleteGallery($slideId)
    {
        $slideInfo = array();
        $this->db->where('id', $slideId);
        $this->db->delete('tbl_gallery');
        return $this->db->affected_rows();
    }
}