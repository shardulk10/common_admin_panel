<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Staticpages_model extends CI_Model
{
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function staticpagesListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.id');
        $this->db->from('tbl_staticpages as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.page_title  LIKE '%".$searchText."%'
                            OR  BaseTbl.body_content  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        //$this->db->where('BaseTbl.published', 1);
		//$this->db->where('BaseTbl.isDeleted', 0);

		/*if(!empty($cube_id)) {
			$this->db->where('BaseTbl.cube_id', $cube_id);
		}*/
		if($this->session->userdata("userId")==1)
        {
           //select all
        } else {
			//$this->db->where('BaseTbl.createdby', $this->session->userdata("userId"));
		}
        $query = $this->db->get();

        return $query->num_rows();
    }

    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    /**
     * This function used to get all active cubes
     * @return array $result : This is active cube information
     */
    function getActiveStaticpages($userId=0)
    {
        $this->db->select('id');
        $this->db->from('tbl_staticpages');
        //$this->db->where('isDeleted', 0);
        $this->db->where('published', 1);
        if($this->session->userdata("userId")==1)
        {
           //select all
        } else {
            //$this->db->where('site_id', $this->session->userdata("siteId"));
        }
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }

    function getStaticDetailsUsingSlug($slug='')
    {
        $this->db->select('*');
        $this->db->from('tbl_staticpages');
        $this->db->where('published', 1);
        $this->db->where('slug', $slug);
        $query = $this->db->get();
        $result = $query->result();
        if(count($result) > 0){
            $result = $result[0];
        } else {
            $result = array();
        }
        return $result;
    }
    
    function getStaticPagesUsingMenuType($slug='')
    {
        $this->db->select('*');
        $this->db->from('tbl_staticpages');
        $this->db->where('published', 1);
        $this->db->where('menu_type', $slug);
        $query = $this->db->get();
        $result = $query->result();
        if(count($result) > 0){
            $result = $result;
        } else {
            $result = array();
        }
        return $result;
    }

    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function staticpagesListing($searchText = '', $page, $segment, $cubeId)
    {

        $this->db->select('*');

        $this->db->from('tbl_staticpages as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.page_title  LIKE '%".$searchText."%'
                            OR  BaseTbl.body_content  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        /*if(!empty($cubeId)) {
            $this->db->where('BaseTbl.cube_id', $cubeId);
        }*/
        //$this->db->where('BaseTbl.published', 1);
        //$this->db->where('BaseTbl.isDeleted', 0);
        if($this->session->userdata("userId")==1)
        {
           //select all
        } else {
            //$this->db->where('BaseTbl.createdby', $this->session->userdata("userId"));
        }
        $this->db->order_by("updated_datetime", "desc");
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        //echo $this->db->last_query();die;
        //print_r($query);
        $result = $query->result();
        return $result;
    }

    /**
     * This function used to get user information by id
     * @param number $slideId : This is user id
     * @return array $result : This is user information
     */
    function getStaticpageInfo($slideId)
    {
        $this->db->select('*');
        $this->db->from('tbl_staticpages');
        //$this->db->where('isDeleted', 0);
        if($this->session->userdata("userId")==1)
        {
           //select all
        } else {
            //$this->db->where('createdby', $this->session->userdata("userId"));
        }
        $this->db->where('id', $slideId);
        $query = $this->db->get();

        return $query->result();
    }

    /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function updateStaticpages($slideInfo, $slideId)
    {
        $this->db->trans_start();
        $this->db->where('id', $slideId);
        $this->db->update('tbl_staticpages', $slideInfo);


        $this->db->trans_complete();

        return true;
    }

    /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewStaticpage($slideInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_staticpages', $slideInfo);

        $insert_id = $this->db->insert_id();

        $this->db->trans_complete();

        return $insert_id;
    }

    /**
     * This function is used to delete slide
     * @param number $slideId : This is user id
     * @param array $userInfo : This is user updation info
     */
    function deleteStaticpage($slideId)
    {
        $slideInfo = array();
        //$slideInfo['isDeleted'] = 1;
        $this->db->where('id', $slideId);
        $this->db->delete('tbl_staticpages');

        return $this->db->affected_rows();
    }

}

