<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* GRADIENT NAVBAR */
    .navbar-custom {
      background: linear-gradient(90deg, #4e54c8, #8f94fb);
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    /* MENU CENTER */
    .navbar-nav {
      margin: auto;
    }

    /* NAV-LINK STYLE */
    .navbar-nav .nav-link {
      padding: 10px 18px;
      font-weight: 500;
      border-radius: 8px;
      transition: 0.25s;
    }

    /* ACTIVE PAGE */
    .navbar-nav .nav-link.active {
      background: rgba(255,255,255,0.25);
      backdrop-filter: blur(4px);
      border-radius: 8px;
    }

    /* HOVER EFFECT */
    .navbar-nav .nav-link:hover {
      background: rgba(255,255,255,0.15);
      color: #fff !important;
    }

    /* BRAND STYLE */
    .navbar-brand {
      font-weight: bold;
      letter-spacing: 0.5px;
    }
  </style>

  <title>Universitas Management System</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container-fluid">

      <!-- BRAND -->
      <a class="navbar-brand" href="index.php">
        Universitas Bangton Rancaekek
      </a>

      <!-- MENU -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?php echo (!isset($_GET['controller']) || $_GET['controller'] == '') ? 'active' : ''; ?>" 
            href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?php echo (isset($_GET['controller']) && $_GET['controller'] == 'lecturer') ? 'active' : ''; ?>" 
            href="index.php?controller=lecturer&action=index">Dosen</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?php echo (isset($_GET['controller']) && $_GET['controller'] == 'department') ? 'active' : ''; ?>"
            href="index.php?controller=department&action=index">Jurusan</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?php echo (isset($_GET['controller']) && $_GET['controller'] == 'course') ? 'active' : ''; ?>"
            href="index.php?controller=course&action=index">Mata Kuliah</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container my-4">
