<?php

class Kelas_model
{
    private $table = 'kelas';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKelas()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getKelasById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataKelas($data)
    {
        $query = "INSERT INTO kelas
                    VALUES
                    ('', :dataKelas)";


        $this->db->query($query);
        $this->db->bind('dataKelas', $data['dataKelas']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataKelas($id)
    {
        $query = "DELETE FROM kelas WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataKelas($data)
    {
        $query = "UPDATE kelas SET
                    dataKelas = :dataKelas
                    WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('dataKelas', $data['dataKelas']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataKelas()
    {
        $keyword = $_POST['keyword'];
        $query = 'SELECT * FROM kelas WHERE dataKelas LIKE :keyword';
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}