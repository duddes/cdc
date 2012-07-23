<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Logincheck 
	{
	
		 function __construct()
		{
		
			$this->CI = & get_instance();
			$this->CI->load->library('session');
				 
		}	
		
		public function islogin()
		{
			
			$log = $this->CI->session->userdata('login');
			if(!isset($log) || $log!=true)
			{
				redirect(base_url().'admin/login');
			} 
		
		}
	
	
	}