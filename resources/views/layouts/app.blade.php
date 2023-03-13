<!doctype html>
<html lang="en">
    <!-- HEADER -->
  <head>
    @include('_partials.head')
  </head>

  <body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        @include('_partials.sidebar')
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            @include('_partials.navbar')

            <!-- Page content-->
            <div class="container-fluid">

                @yield('content')
            </div>
        </div>
    </div>

    <!-- JS -->
<<<<<<< HEAD
=======
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
>>>>>>> 3cc5823 (Commit laundrysinar)
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="/template/js/scripts.js"></script>
  <!--   Core JS Files   -->
  <script>
    const navBar = document.querySelector("nav"),
      menuBtns = document.querySelectorAll(".menu-icon"),
      overlay = document.querySelector(".overlay");

    menuBtns.forEach((menuBtn) => {
      menuBtn.addEventListener("click", () => {
        navBar.classList.toggle("open");
      });
    });

    overlay.addEventListener("click", () => {
      navBar.classList.remove("open");
    });
  </script>
  </body>
</html>
