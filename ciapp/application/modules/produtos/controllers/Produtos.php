<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends MY_Controller {

	public function __construct() 
	{
		parent::__construct ();
		$this->load->model("produtos/produtos_model");
	}

	public function index()
	{
		$data['produtos'] = $this->produtos_model->getProducts();
		$this->load->view('list', $data);
	}
}
