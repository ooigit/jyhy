<?php

class Contacts extends CI_Controller {

	public function view($page = '1')
	{
		if ( ! file_exists('application/views/contacts/'.$page.'.php'))
		{
			show_404();
		}

		$data['title'] = ucfirst($page);

		$this->load->view('templates/top', $data);
		$this->load->view('contacts/_sidebar', $data);
		$this->load->view('contacts/'.$page, $data);
		$this->load->view('templates/bottom', $data);
	}

}

?>
