<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
        $this->toastr->success('Login berhasil...');
        $data['title']   = 'Dashboard';
        $this->load->view('includes/headerr', $data);
        $this->load->view('v_Dashboard');
        $this->load->view('includes/footer');
    }

    public function load_dashboard()
    {
        $data['title']   = 'Dashboard';
        $this->load->view('includes/headerr', $data);
        $this->load->view('v_Dashboard');
        $this->load->view('includes/footer');
    }
}
