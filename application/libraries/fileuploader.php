<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	class Fileuploader{
	
		private $file_name;
		private $tmp_name;
		
		
		
		
		public function setFilename($filename){
		
			$this->file_name = $filename;
		}
		
		private function getFilename(){
		
			return $this->file_name;
		}
		
		
		public function setTmpname($tmp){
		
			$this->tmp_name = $tmp;
		}
		
		private function getTmpname(){
		
			return $this->tmp_name;
		}
	
	
		public function upload_file($path){
				
				move_uploaded_file($this->getTmpname(),$path. $this->getFilename());
				chmod($path.$this->getFilename(),0755);
		}
	
	
	}

