<?php
global $db;
global $helper;
// session_start();
if (isset($_POST['email'])){
    require 'src/user.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = new User();
    $checkAccount = $user->checkLogin($email, $password);
    if ($checkAccount){
        $user = $user->getUser($email);
        $_SESSION['email'] = $email;
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['full_name'] = $user['full_name'];
        $helper->redirect('/');
    }
}
?>
<section class="container mt-4">
    <fieldset class="main">
        <legend id="title">
            <h3>Đăng Nhập</h3>
        </legend>
        <form method="post" name="login" action="">
            <div class="form-group">
                <label for="name">Tài khoản</label>
                <input type="text" class="form-control" value="<?php echo $_GET['email']?>" name="email" id="name" placeholder="Tài khoản">
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Mật khẩu">
            </div>
            <input type="submit" class="btn btn-danger btn-lg login-button" value="Đăng nhập"
                style="display: inline-block; margin-right: 1%;"/>
            <button type="button" id="register" class="btn btn-danger btn-lg login-button"
                style="display: inline-block;" onclick="navigation(this)">Đăng ký</button>
        </form>
    </fieldset>
</section>