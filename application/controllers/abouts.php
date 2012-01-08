<?php

class Abouts extends CI_Controller {

	public function view($page = '1')
	{
		if ( ! file_exists('application/views/abouts/'.$page.'.php'))
		{
			show_404();
		}

		$data['title'] = ucfirst($page);

		$this->load->view('templates/top', $data);
		$this->load->view('abouts/_sidebar', $data);
		$this->load->view('abouts/'.$page, $data);
		$this->load->view('templates/bottom', $data);
	}

}

?>
