<?php

class Jurusan_model
{
    private $table = 'jurusan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllJurusan()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getJurusanById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataJurusan($data)
    {
        $query = "INSERT INTO jurusan (namaJurusan, deskripsiJurusan)
                    VALUES
                    (:namaJurusan, :deskripsiJurusan)";

        $this->db->query($query);
        $this->db->bind('namaJurusan', $data['namaJurusan']);
        $this->db->bind('deskripsiJurusan', $data['deskripsiJurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataJurusan($id)
    {
        $query = "DELETE FROM jurusan WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataJurusan($data)
    {
        $query = "UPDATE jurusan SET
                    namaJurusan = :namaJurusan,
                    deskripsiJurusan = :deskripsiJurusan
                    WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('namaJurusan', $data['namaJurusan']);
        $this->db->bind('deskripsiJurusan', $data['deskripsiJurusan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataJurusan()
    {
        $keyword = $_POST['keyword'];
        $query = 'SELECT * FROM jurusan WHERE namaJurusan LIKE :keyword';
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}