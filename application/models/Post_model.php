<?php

/**
* 
*/
class Post_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getPost() 
	{
		return $this->db->get('post');
	}

	public function getPostById($id = '') {
		$result = $this->db->query("SELECT * FROM post WHERE id = '".$id."' LIMIT 1");
		return $result->row();
	}

}

?>