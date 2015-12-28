<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * index by admin
 *
 * @author 	winny
 * @since	Version 1.0 (2012/06/04)
 */
class News_c extends CI_Controller {
	var $data;

	/**
	 * Constructor
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->config->load('setconfig', TRUE);
        $setconfig = $this->config->item('setconfig');
        //check web is open
        if($this->config->item('is_open', 'setconfig') == '0')
        {redirect('/message/', 'refresh');}else{
	        $this->config->load('f3config', TRUE);
	        $f3config = $this->config->item('f3config');
			$this->data = array_merge( $setconfig, $f3config);
			$this->data['block_head'] = "<base href='".base_url().APPPATH."views/".$this->data['layout_name']."/"."' />";
			//主選單(取得主選單html編碼)
			$block_data['link_arr'][] = array('name'=>'home'		,'href'=>base_url().'index_c'		,'selected'=>'');
			$block_data['link_arr'][] = array('name'=>'admin'		,'href'=>base_url().'admin_c'		,'selected'=>'');
			$block_data['link_arr'][] = array('name'=>'news'		,'href'=>base_url().'news_c'		,'selected'=>'selected');
			$block_data['link_arr'][] = array('name'=>'products'	,'href'=>base_url().'products_c'	,'selected'=>'');
			$block_data['link_arr'][] = array('name'=>'contact'		,'href'=>base_url().'contact_c'		,'selected'=>'');
			$this->data['block_main_menu']= $this->load->view('/block/ulli_link_b.php',$block_data,true);
			//次選單(取得次選單html編碼)
			$block_data['link_arr'] = array(
							'index' => base_url().'news_c/index',
							'show' => base_url().'news_c/show',
							'show_edite' =>base_url().'news_c/show_edite');
			$this->data['block_menu']= $this->load->view('/block/a_link_b.php',$block_data,true);
        }
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
		$block_data['title']= '最新消息(index)';

		$this->load->model('news_m');
		$block_data['query'] = $this->news_m->get_list();
		$block_data['web_url'] = base_url().'news_c/show/';
		$this->data['block_contents']= $this->load->view('/block/list_b.php',$block_data,true);
		$this->load->view($this->data['layout_name'].'/page.php',$this->data);
	}

	public function show($id=false)
	{
		$block_data['title']= '最新消息(show)';
		if($id){
			$this->load->model('news_m');
			$block_data['query'] = $this->news_m->get_show($id);
	
			$this->data['block_contents']= $this->load->view('/block/show_b.php',$block_data,true);
			$view_dir = $this->data['layout_name'].'/page.php';
		}else{
			$this->data['block_contents']='no data!!!!!!';
			$view_dir = $this->data['layout_name'].'/message.php';
		}
		$this->load->view($view_dir,$this->data);

	}

	public function show_edite()
	{
		$block_data['title']= '最新消息(show_edite)';
		$this->load->model('news_m');
		$block_data['query'] = $this->news_m->get_last_ten_entries();
		$this->data['block_contents']= $this->load->view('/block/show_edite_b.php',$block_data,true);

		$this->load->view($this->data['layout_name'].'/page.php',$this->data);

	}
	
	public function edite()
	{
		$block_data['title']= '最新消息(edite)';
		
		$this->data['block_head']= $this->load->view('/block/head_jqgrid_b.php','',true);
		$this->load->view($this->data['layout_name'].'/page.php',$this->data);

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */