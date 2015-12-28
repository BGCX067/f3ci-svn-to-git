<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * index by admin
 *
 * @author 	winny
 * @since	Version 1.0 (2012/06/04)
 */
class Index_c extends CI_Controller {
	var $data;

	/**
	 * Constructor
	 */
	public function __construct()
    {
        parent::__construct();
        $this->config->load('setconfig', TRUE);
        $this->config->load('f3config', TRUE);
        $setconfig = $this->config->item('setconfig');
        $f3config = $this->config->item('f3config');
		$this->data = array_merge( $setconfig, $f3config);
		$this->load->helper('url');
		$this->data['block_head'] = "<base href='".base_url().APPPATH."views/".$this->data['layout_name']."/"."' />";
		//主選單(取得主選單html編碼)
		$block_data['link_arr'][] = array('name'=>'home'		,'href'=>base_url().'index_c'		,'selected'=>'selected');
		$block_data['link_arr'][] = array('name'=>'admin'		,'href'=>base_url().'admin_c'		,'selected'=>'');
		$block_data['link_arr'][] = array('name'=>'news'		,'href'=>base_url().'news_c'		,'selected'=>'');
		$block_data['link_arr'][] = array('name'=>'products'	,'href'=>base_url().'products_c'	,'selected'=>'');
		$block_data['link_arr'][] = array('name'=>'contact'		,'href'=>base_url().'contact_c'		,'selected'=>'');
		$this->data['block_main_menu']= $this->load->view('/block/ulli_link_b.php',$block_data,true);
		//次選單(取得次選單html編碼)
		$this->data['block_menu']= '';
    }

	/**
	 * index
	 *
	 * @access	public
	 * @param
	 * @return	void
	 */
	public function index()
	{
		$block_data['title']= '首頁(index)';
		$block_data['html']= 'HTML元件內容';
		$this->data['block_contents']= $this->load->view('/block/html_b.php',$block_data,true);
		$this->load->view($this->data['layout_name'].'/page.php',$this->data);
	}

	public function login()
	{
		$block_data['title']= '後台管理(login)';
		$block_data['js_name'] = base_url().APPPATH.'views/js/jquery-1.7.2.min.js';
		$this->data['block_head'] .= $this->load->view('/block/script_b.php',$block_data,true);

		$block_data['js_name'] = base_url().APPPATH.'views/js/login.js';
		$this->data['block_head'] .= $this->load->view('/block/script_b.php',$block_data,true);

		$this->data['block_contents']= $this->load->view('/block/login_b.php',$block_data,true);
		$this->load->view($this->data['layout_name'].'/page.php',$this->data);
	}

	public function check_login()
	{
	    $this->load->model('Admin_m');
	    $email = $this->input->post('email');
	    $get_result = $this->Admin_m->check_email_availablity($email);

	    if($get_result )
	    echo 'Error.';
	    else
	    echo 'OK';
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */