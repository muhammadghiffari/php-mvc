<?php

class Siswa_model {

    public function getAllSiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM siswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>