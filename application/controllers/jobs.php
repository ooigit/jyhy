<?php

class Jobs extends CI_Controller {

	public function view($page = '1')
	{
		if ( ! file_exists('application/views/jobs/'.$page.'.php'))
		{
			show_404();
		}

		$data['title'] = ucfirst($page);

		$this->load->view('templates/top', $data);
		$this->load->view('jobs/_sidebar', $data);
		$this->load->view('jobs/'.$page, $data);
		$this->load->view('templates/bottom', $data);
	}

}

?>
