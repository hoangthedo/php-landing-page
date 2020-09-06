<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#">
    <img src="/assets/picture/logo.png" width="60" height="60" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">Trang chủ </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Quản lý
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/admin.php?page=users">Người dùng</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/admin.php?page=products">Sản phẩm</a>
        </div>
      </li>
        
      </li>
    </ul>

    <div class="form-inline my-2 my-lg-0"><?php
        if (isset($_SESSION["email"])) {
        ?>
        <span>Xin chào <?php echo $_SESSION['full_name']?> </span><span> &nbsp;|&nbsp; </span>
        <span><a href="/index.php?page=logout"> Đăng xuất</a></span>
        <?php
        }
        ?>
        </div>
  </div>
</nav>