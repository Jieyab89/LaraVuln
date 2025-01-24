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

      ul {
        list-style-type: none; /* Menghilangkan bullet pada <li> */
        padding: 0;
        margin: 0;
      }

      li {
        display: flex;
        justify-content: center; /* Untuk memposisikan gambar di tengah */
        align-items: center;
      }

      img {
        max-width: 100%; /* Agar gambar tidak lebih besar dari elemen pembungkus */
        height: auto; /* Mempertahankan rasio gambar */
        display: block; /* Menghilangkan jarak ekstra pada elemen inline */
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
      <a class="nav-link active" href="{{ route('guide.index') }}">Home</a>
        <a class="nav-link active" href="{{ route('guide.idor') }}">IDOR</a>
        <a class="nav-link" href="{{ route('guide.index') }}">BAC</a>
        <a class="nav-link" href="{{ route('guide.index') }}">Information Disclosure</a>
        <a class="nav-link" href="{{ route('guide.missconf') }}">Security Misconfiguration</a>
        <a class="nav-link" href="{{ route('guide.index') }}">Weak Authentication</a>
        <a class="nav-link" href="{{ route('guide.index') }}">Command Injection</a>
        <a class="nav-link" href="{{ route('guide.index') }}">LFI</a>
        <a class="nav-link" href="{{ route('guide.index') }}">Insecure Design</a>
        <a class="nav-link" href="{{ route('guide.index') }}">Cross-Site Scripting</a>
        <a class="nav-link" href="{{ route('guide.index') }}">Guide CVSS Risk Rate</a>
        <a class="nav-link" href="{{ route('guide.index') }}">....</a>
      </div>
    </div>

    <!-- Button to toggle sidebar visibility (mobile view) -->
    <button class="toggle-sidebar" id="sidebar-toggle">
      &#9776; <!-- Hamburger icon -->
    </button>

    <!-- Main Content -->
    <div class="content">
      <h1>IDOR</h1>
        <p>Insecure direct object references (IDOR) are a type of access control vulnerability that arises when an application uses user-supplied input to access objects directly. The term IDOR was popularized by its appearance in the OWASP 2007 Top Ten.</p>
        <h1>IDOR at profiles</h1>
        <h1>Step</h1>
        <ol>
            <li>
              <video class="embed-responsive-item" autoplay loop controls>
                  <source src="/Guides/IDOR/IDOR.mp4" type="video/mp4">
                  Your browser does not support the video tag.
              </video>
            </li>
        </ol>
        <h1>CVSS risk rate</h1>
        <p><b>IDOR at Profiles</b></p>
        <p>CVSS:3.1/AV:N/AC:L/PR:L/UI:N/S:C/C:H/I:H/A:N</p>
      <h1>How to Fix</h1>
      <ol>
        <li><p>Verify the user's permission every time an access attempt is made. Implement this structurally using the recommended approach for your web framework.</p></li>
        <li><p>Add UUID so that it is difficult to guess when doing get data</p></li>
        <li><p>Avoid exposing identifiers in URLs and POST bodies if possible</p></li>
      </ol>
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
