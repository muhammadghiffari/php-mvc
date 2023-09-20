<?php
class Siswa extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Siswa';
        $data['siswa'] = $this->model('Siswa_model')->getAllSiswa();
        $this->view('templates/header', $data);  
        $this->view('siswa/detail', $data);  
        $this->view('templates/footer');  
    }
}
?>