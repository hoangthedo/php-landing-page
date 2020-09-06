<div id="header">
    <img src="/assets/picture/logo.png" class="img-box">
    <div style="display:inline-block; margin-left:3%; width:80%; padding-bottom: 3.5%;">
        <form class="form-inline form-search-add">
            <div class="input-group">
                <button type="button" class="btn btn-secondary" id="cart" onclick="navigation(this)"
                    style="background-color:brown;">
                    <i class="fa fa-shopping-cart">
                        <span style="font-family: Arial;">Giỏ hàng</span>
                    </i>
                </button>
                <input type="text" class="form-control" placeholder="Search this blog">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>


    <div style="display: inline-block; width:80%; text-align: center;">
        <button class="btn btnswitch" id="home" onclick="navigation(this)">Trang chủ</button>
        <button class="btn btnswitch" id="introduction" onclick="navigation(this)">Giới thiệu</button>
        <?php 
        if(!isset($_SESSION["email"])){
            echo '<button class="btn btnswitch" id="login" onclick="navigation(this)">Đăng nhập</button>';
        }
        ?>
        <button class="btn btnswitch" id="food" onclick="navigation(this)">Sản phẩm</button>
        <button class="btn btnswitch" id="contact" onclick="scrollelement(this)">Liên hệ</button>
    </div>

</div>
<div style="float: right">
    <?php
    if (isset($_SESSION["email"])) {
    ?>
    <span>Xin chào <?php echo $_SESSION['full_name'] ?>. </span><span><a href="/index.php?page=logout">Đăng xuất</a></span>
    <?php
    }
    ?>
</div>