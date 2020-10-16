<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Videos_model extends CI_Model
{

    function videosListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.id');
        $this->db->from('tbl_videos as BaseTbl');
        if($this->session->userdata("userId")==1)
        {
         //select all
        } else {
        //$this->db->where('BaseTbl.createdby', $this->session->userdata("userId"));
        }
        $query = $this->db->get();
        return $query->num_rows();
    }
    
    function getActiveVideosHome($userId=0)
    {
        $this->db->select('*');
        $this->db->from('tbl_videos');
        $this->db->limit(10,0);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    function getActiveVideos($userId=0)
    {
        $this->db->select('*');
        $this->db->from('tbl_videos');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    function videosListing($searchText = '', $page, $segment, $cubeId)
    {

        $this->db->select('*');
        $this->db->from('tbl_videos as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.videos_heading  LIKE '%".$searchText."%')";
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

    function getVideosInfo($slideId)
    {
        $this->db->select('*');
        $this->db->from('tbl_videos');
        $this->db->where('id', $slideId);
        $query = $this->db->get();
        return $query->result();
    }

    function updateVideos($slideInfo, $slideId)
    {
        $this->db->trans_start();
        $this->db->where('id', $slideId);
        $this->db->update('tbl_videos', $slideInfo);
        $this->db->trans_complete();
        return true;
    }

    function addNewVideos($slideInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_videos', $slideInfo);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        return $insert_id;
    }

    function deleteVideos($slideId)
    {
        $slideInfo = array();
        $this->db->where('id', $slideId);
        $this->db->delete('tbl_videos');
        return $this->db->affected_rows();
    }
}