<?php

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Cargar modelo
        //$this->load->model('Post_model');
        // ó
        // $autoload['model'] = array('Post_model'); en el fichero autolocal

    }

	public function index () {
		$data = array('title' => 'Home', 'mensaje' => 'Hola mundo con Code Ignater');

		$this->load->view("/guest/head", $data);

		$data = array('app' => "Blog");
		$this->load->view("/guest/nav", $data);

		$data = array('post' => "Blog", 'description'=>'Bienvenido a mi pagina web con CodeInater');
		$this->load->view("/guest/header", $data);

		//$result = $this->db->get('post'); // tabla post
		
		$result = $this->Post_model->getPost();

		$data = array('consulta' => $result);
		$this->load->view("/guest/content", $data);
		$this->load->view("/guest/footer");

		//$this->load->view("home", $data);



	}
}