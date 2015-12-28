<?php
class News_m extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	function get_last_ten_entries()
    {
        $query = $this->db->get('article',10);
        return $query->result();
    }
	function get_list()
    {
        $this->db->select('id,title');
        $query = $this->db->get('article');
    	return $query->result();
    }
	function get_show($id)
    {
        $this->db->select('title,contents');
        $this->db->where('id',$id);
        $query = $this->db->get('article');
    	return $query->result();
    }
}