<?php
class Admin_m extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	function check_email_availablity($email)
    {
        /*$this->db->select('*');
	    $this->db->from('project_users');
	    $this->db->where('email', $email);
	    $query = $this->db->get('');
	    if($query->num_rows() > 0)
	        return true;
	    else
	        return false;
	    */
    	 if($email == 'wanyutang@gmail.com')
    	 return true;
	    else
	        return false;
    }
}