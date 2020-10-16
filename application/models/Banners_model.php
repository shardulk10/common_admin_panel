<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Banners_model extends CI_Model
{

    function bannersListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.id');
        $this->db->from('tbl_banners as BaseTbl');
        if($this->session->userdata("userId")==1)
        {
         //select all
        } else {
        //$this->db->where('BaseTbl.createdby', $this->session->userdata("userId"));
        }
        $query = $this->db->get();
        return $query->num_rows();
    }
    
    function getActiveBannersHome($userId=0)
    {
        $this->db->select('*');
        $this->db->from('tbl_banners');
        $this->db->limit(10,0);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    function getActiveBanners($userId=0)
    {
        $this->db->select('*');
        $this->db->from('tbl_banners');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    function bannersListing($searchText = '', $page, $segment, $cubeId)
    {

        $this->db->select('*');
        $this->db->from('tbl_banners as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.banner_heading  LIKE '%".$searchText."%')";
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

    function getBannersInfo($slideId)
    {
        $this->db->select('*');
        $this->db->from('tbl_banners');
        $this->db->where('id', $slideId);
        $query = $this->db->get();
        return $query->result();
    }

    function updateBanners($slideInfo, $slideId)
    {
        $this->db->trans_start();
        $this->db->where('id', $slideId);
        $this->db->update('tbl_banners', $slideInfo);
        $this->db->trans_complete();
        return true;
    }

    function addNewBanners($slideInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_banners', $slideInfo);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        return $insert_id;
    }

    function deleteBanners($slideId)
    {
        $slideInfo = array();
        $this->db->where('id', $slideId);
        $this->db->delete('tbl_banners');
        return $this->db->affected_rows();
    }
}