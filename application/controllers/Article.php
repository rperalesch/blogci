<?php

/**
* 
*/
class Article extends CI_Controller
{
	
	public function post($id = '')
	{
		$fila = $this->Post_model->getPostById($id);

		$data = array('title' => $fila->post);
		$this->load->view("/guest/head", $data);
		$data = array('app' => "Blog");
		$this->load->view("/guest/nav", $data);

		$data = array(
			'post' => $fila->post, 
			'description'=>$fila->descripcion
			);
		$this->load->view("/guest/header", $data);

		$data = array('contenido' => $fila->contenido);
		$this->load->view("/guest/post", $data);
		$this->load->view("/guest/footer");

	}

}

?>