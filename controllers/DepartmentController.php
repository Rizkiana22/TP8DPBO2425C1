<?php
require_once __DIR__ . '/BaseController.php';
require_once __DIR__ . '/../models/Department.php';

class DepartmentController extends BaseController {
    private $departmentModel;

    public function __construct() {
        $this->departmentModel = new Department();
    }
    public function index() {
        $departments = $this->departmentModel->getAll();
        $this->render('Department/index', ['departments' => $departments]);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'id' => $_POST['id'],
                'name' => $_POST['name'],
                'code' => $_POST['code']
            ];

            if ($this->departmentModel->create($data)) {
                $this->redirect('index.php?controller=department&action=index');
            }
        }

        $this->render('Department/create');
    }

    public function edit() {
        if (!isset($_GET['id'])) {
            $this->redirect('index.php?controller=department&action=index');
        }

        $id = $_GET['id'];
        $department = $this->departmentModel->getById($id);

        if (!$department) {
            $this->redirect('index.php?controller=department&action=index');
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => $_POST['name'],
                'code' => $_POST['code']
            ];

            if ($this->departmentModel->update($id, $data)) {
                $this->redirect('index.php?controller=department&action=index');
            }
        }

        $this->render('Department/edit', ['department' => $department]);
    }

    public function delete() {
        if (!isset($_GET['id'])) {
            $this->redirect('index.php?controller=department&action=index');
        }

        $id = $_GET['id'];
        if ($this->departmentModel->delete($id)) {
            $this->redirect('index.php?controller=department&action=index');
        }
    }
}