<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="./index.php">PHP - Super Global Variables</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main" aria-controls="main" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="main">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link p-2 p-lg-3" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle p-2 p-lg-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Global Variabes
          </a>
          <ul class="dropdown-menu py-0" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="./index.php?page=globals">$GLOBALS</a></li>
            <li><a class="dropdown-item" href="./index.php?page=server">$_SERVER</a></li>
            <li><a class="dropdown-item" href="./index.php?page=file">$_FILES</a></li>
            <li><a class="dropdown-item" href="./index.php?page=cookie">$_COOKIE</a></li>
            <li><a class="dropdown-item" href="./index.php?page=env">$_ENV</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link p-2 p-lg-3" href="./index.php?page=login">Login Form</a>
        </li>
      </ul>
    </div>
  </div>
</nav>