<?php

class MyModel {
    private $db;

    public function __construct($databaseInstance) {
        $this->db = $databaseInstance;
    }

    
    public function getAll() {
        return $this->db->query("SELECT * FROM articles");
    }

    public function create($title, $content) {
        return $this->db->execute("INSERT INTO articles (title, content) VALUES (?, ?)", [$title, $content]);
    }

   
    public function update($id, $title, $content) {
        return $this->db->execute("UPDATE articles SET title = ?, content = ? WHERE id = ?", [$title, $content, $id]);
    }

  
    public function delete($id) {
        return $this->db->execute("DELETE FROM articles WHERE id = ?", [$id]);
    }
}