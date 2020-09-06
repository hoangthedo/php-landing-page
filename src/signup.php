<section class="container mt-4">
    <fieldset class="main">
        <legend id="title">
            <h3>Đăng Ký</h3>
        </legend>
        <form>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Họ Tên</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="Họ Tên">
                </div>
            </div>
            <div class="form-group row">
                <label for="accout" class="col-sm-2 col-form-label">Tài Khoản</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="accout" placeholder="Tài Khoản">
                </div>
            </div>
            <div class="form-group row">
                <label for="pass" class="col-sm-2 col-form-label">Mật khẩu</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pass" placeholder="Mật khẩu">
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <div class="col-form-label col-sm-2 pt-0">Giới tính</div>
                    <div class="col-sm-10">
                        <div class="form-check" style="display: inline-block; margin-right: 3%;">
                            <input class="form-check-input" type="radio" name="gender" id="gender1" value="option1"
                                checked>
                            <label class="form-check-label" for="gender1">
                                Nam
                            </label>
                        </div>
                        <div class="form-check" style="display: inline-block; margin-right: 3%;">
                            <input class="form-check-input" type="radio" name="gender" id="gender2" value="option2">
                            <label class="form-check-label" for="gender2">
                                Nữ
                            </label>
                        </div>
                        <div class="form-check" style="display: inline-block; margin-right: 3%;">
                            <input class="form-check-input" type="radio" name="gender" id="gender3" value="option3">
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
                    <input type="text" class="form-control" id="address" placeholder="Địa chỉ">
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-sm-2 col-form-label">Số điện thoại</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="phone" placeholder="Số điện thoại">
                </div>
            </div>
            <div class="form-group row">
                <label for="dob" class="col-sm-2 col-form-label">Ngày sinh</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="dob">
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg login-button">Đăng ký</button>
        </form>
    </fieldset>
</section>