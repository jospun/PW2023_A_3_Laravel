<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    @vite('resources\css\adminPage.css')
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
</head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <a href="{{ url('home') }}" style="text-decoration: none">
        <i class="bx bxl-c-plus-plus"></i>
        <span class="logo_name">CAJ Admin</span>
        </a>
      </div>
      <ul class="nav-links">
        <li class="{{ Request::is('admin') ? 'active' : '' }}">
          <a href="{{ url('admin') }}">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li class="{{ Request::is('adminac') ? 'active' : '' }}">
          <a href="{{ url('adminac') }}">
            <i class="bx bx-box"></i>
            <span class="links_name">Event</span>
          </a>
        </li>
        <li class="{{ Request::is('adminsv') ? 'active' : '' }}">
          <a href="{{ url('adminsv') }}">
            <i class="bx bx-list-ul"></i>
            <span class="links_name">Souvenir</span>
          </a>
        </li>
        <li class="{{ Request::is('admings') ? 'active' : '' }}">
          <a href="{{ url('admings') }}">
            <i class="bx bx-star"></i>
            <span class="links_name">Guest Star</span>
          </a>
        </li>
        <li class="{{ Request::is('adminuser') ? 'active' : '' }}">
          <a href="{{ url('adminuser') }}">
            <i class="bx bx-user"></i>
            <span class="links_name">User Control</span>
          </a>
        </li>

        <!-- dan seterusnya -->

        <li>
          <a href="#">
            <i class="bx bx-cog"></i>
            <span class="links_name">Settings</span>
          </a>
        </li>
        <li class="log_out">
          <a href="#">
            <i class="bx bx-log-out"></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
    </div>
    
    <section class="home-section">
      @yield('content')
    </section>

    <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
          sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      };
    </script>
  </body>
</html>
