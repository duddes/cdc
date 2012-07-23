<?php 

	class User_model extends CI_Model
	
	{
	
		function __construct()
		{
		
			parent::__construct();
			
			
		}
		
		
		private function user_list()
		{
			
			$userList = $this->db->get('users');
			return $userList;
		
		}
		
		public function get_userList()
		{
			$grab_users = $this->user_list();
			return $grab_users->result();
			
		}
		
		public function getOnerow($id=NULL)
		{
			$this->db->where('id',$id);
			$one_user = $this->user_list();
				
				if($one_user->num_rows()>0)
				{
					return $one_user->row();
				}
			
		}
		
		public function save($post=array())
		{
			$this->db->insert('users',$post);
			return $this->db->affected_rows();
			
		}
		
		
		public function update_user($id=NULL,$fields=array())
		{
		
			$this->db->where('id',$id);
			$this->db->update('users',$fields);
			return $this->db->affected_rows();
		}
		
		
		
		public function validate($data = array())
		{
			
			
			$user = $data['username'];
			$pass = $this->encrypt->decode($data['pass']);
			
			$this->db->where('username',$user);
			$this->db->where('password',$pass);
			$user_query = $this->user_list();
			
				if($user_query->num_rows > 0)
				{
					$user_data['userList'] 	= $user_query->row();
					$user_data['found']		= true;
					return $user_data;
				}else{
					
					return false;
				}		
		
		}
		
		public function delete_user($id=NULL)
		{
			$this->db->where('id',$id);
			$this->db->delete('users');
			return $this->db->affected_rows();
		
		}
		
		
		
	}
	