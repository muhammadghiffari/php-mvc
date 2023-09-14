<?php
class Siswa extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Siswa';
        $this->view('templates/header', $data);  
        $this->view('siswa/index');  
        $this->view('templates/footer');  
    }
}
?>