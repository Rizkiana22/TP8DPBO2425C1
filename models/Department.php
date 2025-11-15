<?php 
require_once __DIR__ . '/BaseModel.php';

class Department extends BaseModel {
    protected $table = 'departments';
    public function getAll(){
        $sql = "SELECT * FROM {$this->table} ORDER BY id ASC";
        $result = $this->conn->query($sql);
        $departments = [];
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $departments[] = $row;
            }
        }
        
        return $departments;
    }

    public function getById($id){
        $sql = "SELECT * FROM {$this->table} WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        }
        
        return null;
    }

    public function create($data) {
        $sql = "INSERT INTO {$this->table} (id, name, code) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sss", $data['id'], $data['name'], $data['code']);

        if( $stmt->execute()) {
            return true;
        }else{
            return $stmt->error;   // kirim pesan error
        }

        return false;
    }

    public function update($id, $data) {
        $sql = "UPDATE {$this->table} SET name = ?, code = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sss", $data['name'], $data['code'], $id);

        if( $stmt->execute()) {
            return true;
        }else{
            return $stmt->error;   // kirim pesan error
        }

        return false;
    }

    public function delete($id) {
        $sql = "DELETE FROM {$this->table} WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $id);    
        if( $stmt->execute()) {
            return true;
        }else{
            return $stmt->error;   // kirim pesan error
        }
        return false;
    }
} 