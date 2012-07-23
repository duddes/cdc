<?php 

	class Users extends MX_Controller
	{
		
		function __construct()
		{
		
			parent::__construct();
		
			$this->load->library('logincheck');
			$this->load->model('user_model');
			$this->load->library('form_validation');
			$this->load->library('encrypt');
			$this->logincheck->islogin();
			
			
		}
		
		
		public function index()
		{
			
			
				
				$data['pagename'] = 'Manage User';
				$data['users'] 	  = $this->user_model->get_userList();
				$this->load->view('user/index',$data);
			
				
			
			
			
		
		}
		
		public function add($error=array())
		{
			$data['formError'] = (count($error) > 0 ? $error:'');
			$data['pagename'] = 'New User';
			$this->load->view('user/add',$data);
			
				
		}
		
		
		
		public function save()
		{
			$user_post['fname'] 	= $this->input->post('fname',TRUE);
			$user_post['lname'] 	= $this->input->post('lname',TRUE);
			$user_post['sex'] 		= $this->input->post('gender',TRUE);
			$user_post['email']		= $this->input->post('email',TRUE);
			$user_post['username'] 	= $this->input->post('username',TRUE);
			$user_post['password']	= $this->input->post('password',TRUE);
			
			$validate_config = array(array('field'=>'username','label'=>'Username','rules'=>'required'),
									 array('field'=>'password','label'=>'Password','rules'=>'required'),	
									 array('field'=>'email','label'=>'Email','rules'=>'required'),	
									 array('field'=>'lname','label'=>'Last Name','rules'=>'required'),
									 array('field'=>'fname','label'=>'First Name','rules'=>'required'));
			$this->form_validation->set_rules($validate_config);
			
			
			if($this->form_validation->run()==TRUE){
				$config['upload_path']		= './assets/images/users/';
				$config['allowed_types'] 	= 'gif|jpg|png';
				$config['file_name']	 	= $user_post['fname'];
				//$config['max_width']		= '100';
				//$config['max_height']		= '100';	
				$this->load->library('upload',$config);
				$field_name = 'user_image';
				
				if(!$this->upload->do_upload($field_name))
				{
					$user_post['filename'] = '';
					$data['error_upload'] = $this->upload->display_errors();
					$this->load->view('user/index',$data);
				}else{
					$response = $this->upload->data();
					$user_post['filename'] = $response['file_name'];
					//echo $error;
					//print_r($response);
				}
			
			$this->user_model->save($user_post);
			redirect(base_url().'admin/users');
			
			
			}else{
				
				$error['username']  = form_error('username');
				$error['password']  = form_error('password');
				$error['email'] 	= form_error('email');
				$error['lname'] 	= form_error('lname');
				$error['fname'] 	= form_error('fname');
				$this->add($error);
				
				
			}
		
		}
		
		public function delete()
		{
			$userfile = $this->user_model->getOnerow($this->uri->segment(3));
			
				if(file_exists('./assets/images/users/'.$userfile->filename))
				{
					unlink('./assets/images/users/'.$userfile->filename);
				}
			$this->user_model->delete_user($this->uri->segment(3));
			
			
			//$this->output->enable_profiler(TRUE);
			redirect(base_url().'admin/users');
		}
	
	}