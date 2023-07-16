<?php

class About extends Controller 
{
    public function index($nama = 'Taufik', $pekerjaan = 'Mahasiswa', $umur = 22, $tempat = 'Bandung')
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['tempat'] = $tempat;
        $data['judul'] = 'About';
        $this->view('template/header', $data);
        $this->view('about/index', $data);
        $this->view('template/footer');
    }

    public function page()
    {
        $data['judul'] = 'My Page';
        $this->view('template/header', $data);
        $this->view('about/page');
        $this->view('template/footer');
    }
}