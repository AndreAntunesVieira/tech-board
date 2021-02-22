<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$this->load->database();
		$this->load->view('home');
	}

	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

	}
}
