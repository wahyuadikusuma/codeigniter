<?php

class Produk extends CI_Controller
{
    public function index()
    {
        if (!$this->session->userdata('login')) {
            redirect('auth');
        }
        $data['judul'] = 'Daftar Produk';
        $data['produk'] = $this->Produk_model->getAllProduk();
        $this->load->view('templates/header', $data);
        $this->load->view('produk/index', $data);
        $this->load->view('templates/footer');
    }
}
