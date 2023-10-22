<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerPanel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_Login' => 'm_login']);
        $this->load->library('session');
        $this->load->library('src/Toastr');
    }

    public function index()
    {
        $this->load->view('v_Login');
    }

    public function aksi_login()
    {
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');

        //check login
        $datalogin    = $this->db->query("SELECT * FROM tbl_login_admin WHERE username='" . $username . "' AND password='" . $password . "'");

        if ($datalogin->num_rows() > 0) {
            $data_session   = [
                'nama'  =>  $username
            ];
            $this->session->set_userdata($data_session);
            redirect('dashboard/index');
        } else {
            $this->session->set_flashdata('flashgagal', 'Salah');

            // $this->session->set_flashdata('flashdanger', ', Ulangi');

            redirect('ControllerPanel/index');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('index');
    }
}
