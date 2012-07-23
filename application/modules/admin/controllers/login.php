<?php

	class Login extends MX_Controller
	{
	
		function __construct()
		{
			parent::__construct();
			$this->load->model('user_model');
			$this->load->library('encrypt');
		}
		
		public function index()
		{
		
			$this->load->view('login/index');
		}
		
		
		public function authenticate()
		{
		
			$data['username']  	= $this->input->post('username');
			//$data['pass']		= $this->input->post('pass');
			//$data['pass']		= base64_encode($this->input->post('passwd'));
			$data['pass']		= $this->encrypt->encode($this->input->post('passwd',TRUE));
			
			
			
				if(empty($data['username']) && empty($data['pass']))
				{
					$user['msg'] = 'Username and Password must not be Empty';
					$this->load->view('login/index',$user);
				}else{
				
					$user_query = $this->user_model->validate($data);
					
						if($user_query['found']==true)
						{
							$user['id']		= $user_query['userList']->id;
							$user['name']	= ucfirst($user_query['userList']->fname).' '.ucfirst($user_query['userList']->lname);
							$user['email']	= $user_query['userList']->email;
							$user['login']	= $user_query['found'];
							$user['pix']	= $user_query['userList']->filename;
							$user['username'] = $user_query['userList']->username;
							$user['msg']	= '';
							$this->session->set_userdata($user);
							$user_sess = $this->session->all_userdata();
							$login['datelogin'] = date('Y-m-d H:i:s');
							$login['ipaddress']	= $user_sess['ip_address'];
							$id					= $this->session->userdata('id');
							$this->user_model->update_user($id,$login);
							redirect(base_url().'admin/dashboard');
				
						}else{
							
							$user['msg'] = 'Username and Password did not Match';
							$this->load->view('login/index',$user);
						}
				
				}
			
			
			
		
		}
		
		
	}