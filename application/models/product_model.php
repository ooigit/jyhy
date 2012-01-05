<?php
class Product_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function read($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('products');
			return $query->result_array();
		}

		$query = $this->db->get_where('products', array('id' => $id));
		return $query->row_array();
	}

	public function create()
	{
		$this->load->helper('url');
		$data = array(
				'name' => $this->input->post('name'),
				'description' => $this->input->post('description')
		);

		return $this->db->insert('products', $data);
	}
}
?>
