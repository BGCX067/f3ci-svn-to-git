<?php
class Article extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
  	function get_last_ten_entries()
    {
        $query = $this->db->get('entries',10);
        return $query->result();
    }
}