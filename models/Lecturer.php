<?php 
require_once __DIR__ . '/BaseModel.php';


class Lecturer extends BaseModel {
    protected $table = 'lecturers';
    
    public function getAll(){
        $sql = "SELECT * FROM {$this->table} ORDER BY id ASC";
        $result = $this->conn->query($sql);
        $lecturers = [];
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $lecturers[] = $row;
            }
        }
        
        return $lecturers;
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
        $sql = "INSERT INTO {$this->table} (id, name, nidn, phone, join_date, department_id) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssss", $data['id'], $data['name'], $data['nidn'], $data['phone'], $data['join_date'], $data['department_id']);

        if( $stmt->execute()) {
            return true;
        }
        return false;
    }

    public function update($id, $data) {
        $sql = "UPDATE {$this->table} SET name = ?, nidn = ?, phone = ?, join_date = ?, department_id = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssss", $data['name'], $data['nidn'], $data['phone'], $data['join_date'], $data['department_id'], $id);

        if( $stmt->execute()) {
            return true;
        }

        return false;
    }

    public function delete($id) {
        $sql = "DELETE FROM {$this->table} WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $id);

        if( $stmt->execute()) {
            return true;
        }

        return false;
    }
}