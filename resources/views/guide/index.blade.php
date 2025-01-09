<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guide and how to fix the vulnerability</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Body and HTML styles */
    html, body {
      height: 100%;
      margin: 0;
    }

    /* Container for the page */
    .container-fluid {
      display: flex;
    }

    /* Sidebar styles */
    .sidebar {
      position: sticky;
      top: 0;
      width: 250px;
      background-color: #f8f9fa;
      padding: 20px;
      height: 100vh; /* Make sidebar full height */
      overflow-y: auto; /* Enable scrolling if the sidebar content overflows */
    }

    .sidebar h4 {
      font-size: 1.25rem;
      margin-bottom: 20px;
    }

    .sidebar .nav-link {
      font-size: 1rem;
      padding: 10px 20px;
      color: #333;
      text-decoration: none;
    }

    .sidebar .nav-link:hover {
      background-color: #ddd;
      color: #000;
    }

    .sidebar .nav-item {
      margin-bottom: 10px;
    }

    /* Main content area styles */
    .content {
      flex-grow: 1;
      padding: 20px;
    }

    /* Responsive styling: Collapsing sidebar on smaller screens */
    @media (max-width: 768px) {
      .sidebar {
        position: relative;
        width: 100%;
        height: auto;
      }

      .content {
        margin-top: 20px;
      }
    }
  </style>
</head>
<body>

  <div class="container-fluid">
    <!-- Sidebar -->
    <div class="sidebar">
      <h4>Documentation</h4>
      <div class="nav flex-column">
        <a class="nav-link active" href="#">IDOR</a>
        <a class="nav-link" href="#">BAC</a>
        <a class="nav-link" href="#">Information Disclosure</a>
        <a class="nav-link" href="#">Security Misconfiguration</a>
        <a class="nav-link" href="#">Weak Authentication</a>
        <a class="nav-link" href="#">Command Injection</a>
        <a class="nav-link" href="#">LFI</a>
        <a class="nav-link" href="#">Insecure Design</a>
        <a class="nav-link" href="#">Cross-Site Scripting</a>
        <a class="nav-link" href="#">....</a>
      </div>
    </div>

    <!-- Main Content -->
    <div class="content">
      <h1>Welcome to LaraVuln Documentation</h1>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, sapiente. Quibusdam ipsum placeat veniam! Aliquam id quam fugit, mollitia ducimus, culpa sed dolores similique vero perspiciatis modi, debitis vitae et?</p>
    </div>
  </div>

  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
