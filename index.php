<?php

define('BASE_PATH', __DIR__);

// Main router file
require_once __DIR__ . '/controllers/LecturerController.php';
require_once __DIR__. '/controllers/DepartmentController.php';
require_once __DIR__. '/controllers/CourseController.php';
require_once __DIR__. '/controllers/HomeController.php';


// Default controller and action
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Route to the appropriate controller and action
switch ($controller) {
  case 'lecturer':
      $lecturerController = new LecturerController();
      
      switch ($action) {
          case 'index':
              $lecturerController->index();
              break;
          case 'create':
              $lecturerController->create();
              break;
          case 'edit':
              $lecturerController->edit();
              break;
          case 'delete':
              $lecturerController->delete();
              break;
          default:
              $lecturerController->index();
              break;
      }
      break;
  case 'department':
      $departmentController = new DepartmentController();
      switch ($action) {
          case 'index':
              $departmentController->index();
              break;
          case 'create':
              $departmentController->create();
              break;
          case 'edit':
              $departmentController->edit();
              break;
          case 'delete':
              $departmentController->delete();
              break;
          default:
              $departmentController->index();
              break;
      }
      break;
  case 'course':
      $courseController = new CourseController();
      switch ($action) {
          case 'index':
              $courseController->index();
              break;
          case 'create':
              $courseController->create();
              break;
          case 'edit':
              $courseController->edit();
              break;
          case 'delete':
              $courseController->delete();
              break;
          default:
              $courseController->index();
              break;
      }
      break;
    case 'home':
        $home = new HomeController();
        $home->index();
        break;
  default:
      $lecturerController = new LecturerController();
      $lecturerController->index();
      break;
}
?>