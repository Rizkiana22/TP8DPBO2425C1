<?php 
require_once __DIR__ . '/BaseModel.php';

class Course extends BaseModel {
    protected $table = 'courses';
    public function getAll(){
        $sql = "SELECT * FROM {$this->table} ORDER BY id ASC";
        $result = $this->conn->query($sql);
        $courses = [];
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $courses[] = $row;
            }
        }
        
        return $courses;
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
        $sql = "INSERT INTO {$this->table} (id, course_code, course_name, sks, lecturer_id) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssis", $data['id'], $data['course_code'], $data['course_name'], $data['sks'], $data['lecturer_id']);
        if( $stmt->execute()) {
            return true;
        }else{
            return $stmt->error;   // kirim pesan error
        }

        return false;
    }

    public function update($id, $data) {
        $sql = "UPDATE {$this->table} SET course_code = ?, course_name = ?, sks = ?, lecturer_id = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssis", $data['course_code'], $data['course_name'], $data['sks'], $data['lecturer_id'], $id);

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