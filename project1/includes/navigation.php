<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src = "images/logo.jpg" width = "50"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php"><i class="fa-solid fa-house-laptop"> <!-- tìm kí hiệu mong muốn -> nhấn kí hiệu để copy link -> dán vào vtri cần chèn--></i> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
        <!-- <?php 
          //if(isset($_SESSION['email'])){
            ?> -->
            <li class="nav-item">
          <a class="nav-link" href="login.php">Login </a>
        </li>
        
          <!-- <?php //} ?> -->

        <li class="nav-item">
          <a class="nav-link" href="#">Logout </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admin
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="users.php">Users</a></li>
            <li><a class="dropdown-item" href="categories.php">Categories</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="products.php">Products</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!--Thanh menu-->