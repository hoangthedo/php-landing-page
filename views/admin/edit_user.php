<?php
global $helper;
if ($_GET["user_id"]){
    require 'src/user.php';
    $User = new User();
    $user = $User->getUserId($_GET["user_id"])[0];
} else {
    $helper->redirect('/admin.php');
}
if (! empty($_POST["update-user"])) {
    $id = $_GET["user_id"];
    $fullname = $_POST["fullname"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $birthday = $_POST["birthday"];
    $gender = $_POST["gender"];
    require_once ("src/user.php");
    /* Form Required Field Validation */
    $user = new User();
    global $helper;
    $errorMessage = $user->validateUser();
    
    if (empty($errorMessage)) {
        $user->updateUser($id, $fullname, $email, $address, $birthday, $gender, $phone);
        $helper->redirect('/admin.php?page=users');
    }
}
?>
<section class="container mt-4">
    <fieldset class="main">
        <legend class="text-center">
            <h3>Đăng Ký</h3>
        </legend>
        <form name="frmRegistration" method="post" action="">
            <?php
            if (! empty($errorMessage) && is_array($errorMessage)) {
                ?>
            <div class="error-message">
                <?php 
                        foreach($errorMessage as $message) {
                            echo $message . "<br/>";
                        }
                        ?>
            </div>
            <?php
            }
            ?>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Họ Tên</label>
                <div class="col-sm-10">
                    <input type="text" name="fullname"
                        value="<?php echo isset($_POST['fullname']) ? $_POST['fullname'] : $user['full_name']; ?>" class="form-control"
                        id="name" placeholder="Họ Tên">
                </div>
            </div>
            <div class="form-group row">
                <label for="accout" class="col-sm-2 col-form-label">Tài Khoản Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="accout" name="email"
                        value="<?php echo isset($_POST['email']) ? $_POST['email'] : $user['email']; ?>" placeholder="Email">
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <div class="col-form-label col-sm-2 pt-0">Giới tính</div>
                    <div class="col-sm-10">
                        <div class="form-check" style="display: inline-block; margin-right: 3%;">
                            <input class="form-check-input" type="radio" name="gender" id="gender1" value="Male"
                                checked>
                            <label class="form-check-label" for="gender1">
                                Nam
                            </label>
                        </div>
                        <div class="form-check" style="display: inline-block; margin-right: 3%;">
                            <input class="form-check-input" type="radio" name="gender" id="gender2" value="Female">
                            <label class="form-check-label" for="gender2">
                                Nữ
                            </label>
                        </div>
                        <div class="form-check" style="display: inline-block; margin-right: 3%;">
                            <input class="form-check-input" type="radio" name="gender" id="gender3" value="Other">
                            <label class="form-check-label" for="gender3">
                                Khác
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Địa chỉ</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="address"
                        value="<?php  echo isset($_POST['address']) ? $_POST['address'] : $user['address']; ?>" id="address"
                        placeholder="Địa chỉ">
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-sm-2 col-form-label">Số điện thoại</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="phone"
                        value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : $user['phone']; ?>" id="phone"
                        placeholder="Số điện thoại">
                </div>
            </div>
            <div class="form-group row">
                <label for="dob" class="col-sm-2 col-form-label">Ngày sinh</label>
                <div class="col-sm-10">
                    <input type="date" name="birthday"
                        value="<?php  echo isset($_POST['birthday']) ? $_POST['birthday'] : $user['birthday'];?>" class="form-control"
                        id="dob">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <input type="checkbox" name="terms"> Tôi chấp nhận các điều khoản
                </div>
            </div>
            <div class="text-center">
            <input type="submit" name="update-user" value="Cập nhật" class="btn btn-primary btn-lg login-button">
            <div>
        </form>
    </fieldset>
</section>