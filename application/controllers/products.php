<?php
class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_model');
	}

	public function index()
	{
		$data['title'] = 'products list';
		$data['products'] = $this->product_model->read();

		$this->load->view('templates/top', $data);
		$this->load->view('products/index', $data);
		$this->load->view('templates/bottom', $data);
	}

	public function show($id)
	{
		$data['product'] = $this->product_model->read($id);

		if (empty($data['product']))
		{
			show_404();
		}

		$data['title'] = $data['product']['name'];

		$this->load->view('templates/top', $data);
		$this->load->view('products/show', $data);
		$this->load->view('templates/bottom', $data);
	}

	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Create a product item';

		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('description', 'description', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/top', $data);
			$this->load->view('products/create');
			$this->load->view('templates/bottom', $data);
		}
		else
		{
			$this->product_model->create();
			$this->load->view('products');
		}

	}

}
?>
