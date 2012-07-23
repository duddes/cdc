<?php 

	class Dashboard extends MX_Controller{
	
		function __construct()
		{
			parent::__construct();
			$this->load->library('logincheck');
			$this->logincheck->islogin();
		}
		
		
		public function index()
		{
			$data['pagename'] = 'Dashboard';
			$this->load->view('dashboard/index',$data);
		}
	
	}