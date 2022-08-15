<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Produtos_model extends CI_Model
	{
        public function getProducts()
		{
			$query = $this->db->from("produtos")->get();

            return $query;
		}
    }
