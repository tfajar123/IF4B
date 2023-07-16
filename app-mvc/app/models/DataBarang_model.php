<?php

class DataBarang_model {
    private $table = 'data_barang';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllBarang()
    {
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }

    public function getBarangById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id =:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}