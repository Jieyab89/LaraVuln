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
      flex-wrap: nowrap; /* Prevent wrapping so content stays side by side */
      height: 100vh; /* Full viewport height */
    }

    /* Sidebar styles */
    .sidebar {
      position: sticky;
      top: 0;
      width: 250px;
      background-color: #f8f9fa;
      padding: 20px;
      height: 100%; /* Full height of the page */
      overflow-y: auto;
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
      overflow-y: auto;
    }

    /* Button to toggle sidebar visibility on smaller screens */
    .toggle-sidebar {
      display: none;
    }

    /* Responsive styling: Collapsing sidebar on smaller screens */
    @media (max-width: 768px) {
      .sidebar {
        position: relative;
        width: 100%;
        height: auto;
        display: none; /* Hide sidebar by default on small screens */
      }

      .sidebar.show {
        display: block;
      }

      .content {
        margin-left: 0; /* Remove left margin */
      }

      /* Button to toggle sidebar visibility */
      .toggle-sidebar {
        display: block;
        position: absolute;
        top: 10px;
        left: 10px;
        background-color: #f8f9fa;
        border: none;
        padding: 10px;
        cursor: pointer;
        font-size: 1.25rem;
      }
    }
  </style>
</head>
<body>

  <div class="container-fluid">
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
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
        <a class="nav-link" href="#">Guide CVSS Risk Rate</a>
        <a class="nav-link" href="#">....</a>
      </div>
    </div>

    <!-- Button to toggle sidebar visibility (mobile view) -->
    <button class="toggle-sidebar" id="sidebar-toggle">
      &#9776; <!-- Hamburger icon -->
    </button>

    <!-- Main Content -->
    <div class="content">
      <h1>IDOR Exploit</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, sapiente. Quibusdam ipsum placeat veniam! Aliquam id quam fugit, mollitia ducimus, culpa sed dolores similique vero perspiciatis modi, debitis vitae et?</p>
      <h1>IDOR Fix</h1>
    </div>
  </div>

  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Toggle sidebar visibility on mobile
    const toggleButton = document.getElementById('sidebar-toggle');
    const sidebar = document.getElementById('sidebar');

    toggleButton.addEventListener('click', () => {
      sidebar.classList.toggle('show');
    });
  </script>
</body>
</html>
