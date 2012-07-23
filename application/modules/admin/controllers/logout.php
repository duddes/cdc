<?php 

	class Logout extends MX_Controller
	{
		public function index()
		{
			$this->session->sess_destroy();
			redirect(base_url().'admin/login');
		}
	
	}