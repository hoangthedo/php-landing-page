<?php
if (! empty($_POST["register-user"])) {
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
        $UserCount = $user->isUserExists($email);
        
        if ($UserCount == 0) {
            echo $fullname, $password, $email, $address, $birthday, $gender, $phone;
            $insertId = $user->insertUserRecord($fullname, $password, $email, $address, $birthday, $gender, $phone);
            if (! empty($insertId)) {
                $helper->redirect('/index.php?page=login&email=' . $email);
            }
        } else {
            $errorMessage[] = "User already exists.";
        }
    }
}
?>
<section class="container mt-4">
    <fieldset class="main">
        <legend id="title">
            <h3>Đăng Ký</h3>
        </legend>
        <form name="frmRegistration" method="post" action="">
            <?php
            if (! empty($errorMessage) && is_array($errorMessage)) {
                ?>
            <div class="error-message" style="color: red;">
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
                <label for="name" class="col-sm-2 col-form-label">Họ Tên(*)</label>
                <div class="col-sm-10">
                    <input type="text" name="fullname"
                        value="<?php if(isset($_POST['fullname'])) echo $_POST['fullname']; ?>" class="form-control"
                        id="name" placeholder="Họ Tên">
                </div>
            </div>
            <div class="form-group row">
                <label for="accout" class="col-sm-2 col-form-label">Tài Khoản Email(*)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="accout" name="email"
                        value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="pass" class="col-sm-2 col-form-label">Mật khẩu(*)</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="pass" placeholder="Mật khẩu">
                </div>
            </div>
            <div class="form-group row">
                <label for="pass" class="col-sm-2 col-form-label">Nhập lại mật khẩu(*)</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="confirm_password" id="pass"
                        placeholder="Nhập lại mật khẩu">
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
                <label for="address" class="col-sm-2 col-form-label">Địa chỉ(*)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="address"
                        value="<?php if(isset($_POST['address'])) echo $_POST['address']; ?>" id="address"
                        placeholder="Địa chỉ">
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-sm-2 col-form-label">Số điện thoại(*)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="phone"
                        value="<?php if(isset($_POST['phone'])) echo $_POST['phone']; ?>" id="phone"
                        placeholder="Số điện thoại">
                </div>
            </div>
            <div class="form-group row">
                <label for="dob" class="col-sm-2 col-form-label">Ngày sinh(*)</label>
                <div class="col-sm-10">
                    <input type="date" name="birthday"
                        value="<?php if(isset($_POST['birthday'])) echo $_POST['birthday']; ?>" class="form-control"
                        id="dob">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <input type="checkbox" class="" name="terms"> <label class="terms-label"> Tôi chấp nhận các điều khoản</label>
                </div>
            </div>
            <input type="submit" name="register-user" value="Đăng ký" class="btn btn-primary btn-lg login-button">
        </form>
    </fieldset>
</section>