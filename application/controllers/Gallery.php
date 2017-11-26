<?php
class Gallery extends CI_Controller{
	public function __construct() {
		parent::__construct();
		$this->load->helper(array('url'));
	}

    public function index()	{
    	echo 'Hello world!';
    }
    
    public function add() {
    	if($this->session->userdata('access_token') && $this->session->userdata('shop')){
    		$data = array(
    			'api_key' => $this->config->item('shopify_api_key'),
    			'shop' => $this->session->userdata('shop')
    		);
    		$this->load->view('gallery/add', $data);
    	} else {
    		redirect('', 'refresh');
    	}
    }
    
}
