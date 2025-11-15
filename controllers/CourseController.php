<?php
require_once __DIR__ . '/BaseController.php';
require_once __DIR__ . '/../models/Course.php';
require_once __DIR__ . '/../models/Lecturer.php';

class CourseController extends BaseController {
    private $courseModel;
    
    public function __construct() {
        $this->courseModel = new Course();
    }
    
    public function index() {
        $courses = $this->courseModel->getAll();
        $this->render('Course/index', ['courses' => $courses]);
    }
    
    public function create() {
        $lecturerModel = new Lecturer();
        $lecturers = $lecturerModel->getAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'id' => $_POST['id'],
                'course_code' => $_POST['course_code'],
                'course_name' => $_POST['course_name'],
                'sks' => $_POST['sks'],
                'lecturer_id' => $_POST['lecturer_id']
            ];
            
            if ($this->courseModel->create($data)) {
                $this->redirect('index.php?controller=course&action=index');
            }
        }
        
        $this->render('Course/create', ['lecturers' => $lecturers]);
    }
    
    public function edit() {
        if (!isset($_GET['id'])) {
            $this->redirect('index.php?controller=course&action=index');
        }
        
        $id = $_GET['id'];
        $course = $this->courseModel->getById($id);

        $lecturerModel = new Lecturer();
        $lecturers = $lecturerModel->getAll();
        
        if (!$course) {
            $this->redirect('index.php?controller=course&action=index');
        }
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'course_code' => $_POST['course_code'],
                'course_name' => $_POST['course_name'],
                'sks' => $_POST['sks'],
                'lecturer_id' => $_POST['lecturer_id']
            ];
            
            if ($this->courseModel->update($id, $data)) {
                $this->redirect('index.php?controller=course&action=index');
            }
        }
        
        $this->render('Course/edit', ['course' => $course, 'lecturers' => $lecturers]);
    }

    public function delete() {
        if (!isset($_GET['id'])) {
            $this->redirect('index.php?controller=course&action=index');
        }
        
        $id = $_GET['id'];
        if ($this->courseModel->delete($id)) {
            $this->redirect('index.php?controller=course&action=index');
        }
    }
}