<?php

class DataBarang extends Controller {
    public function index ()
    {
        $data['judul'] = 'Daftar Barang';
        $data['barang'] = $this->model('DataBarang_model')->getAllBarang();
        $this->view('template/header', $data);
        $this->view('databarang/index', $data);
        $this->view('template/footer');
    }

    public function detail ($id)
    {
        $data['judul'] = 'Detail Barang';
        $data['barang'] = $this->model('DataBarang_model')->getBarangById($id);
        $this->view('template/header', $data);
        $this->view('databarang/detail', $data);
        $this->view('template/footer');
    }
}