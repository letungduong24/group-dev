<?php
require_once APP_ROOT . '/config/Database.php';

class Categories {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function getOneCategory($id){
        $stmt = $this->db->prepare("SELECT * FROM categories where id = ?");
        $stmt->bind_param('s', $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
    public function getAllCategories() {
        $stmt = $this->db->prepare("SELECT * FROM categories");
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }
}
