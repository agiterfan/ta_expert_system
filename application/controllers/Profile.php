<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('M_pengguna');
	}

	public function index()
	{
		$data = $this->session->userdata('loginUser');

		if (empty($data)) {
			redirect('login');
		}

		$data['userLogin'] = $data;
		$data['listProfile'] = $this->M_pengguna->getListPenggunaId($data['userLogin']['user_id']);
		$this->load->view('client/profile', $data);
	}

	public function editProfile($id)
	{
		$data['userLogin'] = $this->session->userdata('loginUser');
		$data['detailData'] = $this->M_pengguna->getListPenggunaId($id);
		$this->load->view('client/editProfile', $data);
	}


	public function doUpdate($id)
	{
		$post = $this->input->post();

		if ($post['password'] != "") {
			$dataArray = array(
				"nama_pengguna" => $post['nama'],
				"tempat_lahir" => $post['tempat_lahir'],
				"tgl_lahir" => $post['tgl_lahir'],
				"jenis_kelamin" => $post['jenis_kelamin'],
				"email" => $post['email'],
				"umur" => $post['umur'],
				"username" => $post['username'],
				"password" => md5($post['password'])
			);
		} else {
			$dataArray = array(
				"nama_pengguna" => $post['nama'],
				"tempat_lahir" => $post['tempat_lahir'],
				"tgl_lahir" => $post['tgl_lahir'],
				"jenis_kelamin" => $post['jenis_kelamin'],
				"email" => $post['email'],
				"umur" => $post['umur'],
				"username" => $post['username'],
			);
		}
		$update = $this->db->update("pengguna", $dataArray, array("id_pengguna" => $id));
		if ($update) {
			$this->db->select("*");
			$this->db->from("pengguna");
			$this->db->where('id_pengguna', $id);
			$query = $this->db->get();
			$querycheck = $query->result();
			$dataArr = array(
				'user_id' => $querycheck[0]->id_pengguna,
				'user_name' => $querycheck[0]->nama_pengguna,
				"level" => 99
			);
			$this->session->set_userdata('loginUser', $dataArr);

			redirect('profile');
		} else {
			redirect('profile/editProfile/' . $id);
		}
	}


}
