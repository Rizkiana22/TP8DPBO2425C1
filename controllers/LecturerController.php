<?php
require_once __DIR__ . '/BaseController.php';
require_once __DIR__ . '/../models/Lecturer.php';
require_once __DIR__ . '/../models/Department.php';

class LecturerController extends BaseController {
    private $lecturerModel;
    
    public function __construct() {
        $this->lecturerModel = new Lecturer();
    }
    
    public function index() {
        $lecturers = $this->lecturerModel->getAll();
        $this->render('Lecturer/index', ['lecturers' => $lecturers]);
    }
    
    public function create() {
        $departmentModel = new Department();
        $departments = $departmentModel->getAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'id' => $_POST['id'],
                'name' => $_POST['name'],
                'nidn' => $_POST['nidn'],
                'phone' => $_POST['phone'],
                'join_date' => $_POST['join_date'],
                'department_id' => $_POST['department_id']
            ];
            
            if ($this->lecturerModel->create($data)) {
                $this->redirect('index.php?controller=lecturer&action=index');
            }
        }
        
        $this->render('Lecturer/create' , ['departments' => $departments]);
    }
    
    public function edit() {
        if (!isset($_GET['id'])) {
            $this->redirect('index.php?controller=lecturer&action=index');
        }
        
        $id = $_GET['id'];
        $lecturer = $this->lecturerModel->getById($id);

        $departmentModel = new Department();
        $departments = $departmentModel->getAll();
        
        if (!$lecturer) {
            $this->redirect('index.php?controller=lecturer&action=index');
        }
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => $_POST['name'],
                'name' => $_POST['name'],
                'nidn' => $_POST['nidn'],
                'phone' => $_POST['phone'],
                'join_date' => $_POST['join_date'],
                'department_id' => $_POST['department_id']
            ];
            
            if ($this->lecturerModel->update($id, $data)) {
                $this->redirect('index.php?controller=lecturer&action=index');
            }
        }
        
        $this->render('Lecturer/edit', ['lecturer' => $lecturer, 'departments' => $departments]);
    }

    public function delete() {
        if (!isset($_GET['id'])) {
            $this->redirect('index.php?controller=lecturer&action=index');
        }
        
        $id = $_GET['id'];
        if ($this->lecturerModel->delete($id)) {
            $this->redirect('index.php?controller=lecturer&action=index');
        }
    }
}