<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{
	public function index()
	{
		$data['msg'] = $this->session->flashdata('msg');
        $this->load->view('client/tentang', $data);
	}
}
