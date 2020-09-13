<?php
require 'src/user.php';
$User = new User();
if (!empty($_POST["delete-user"])) {
    $user_id = $_POST["user"]['id'];
    $User->destroy($user_id);
}
$revenue = [12, 17, 7, 17, 23, 18, 38];
$amountProduct = [542, 443, 320, 780, 553, 453, 326];
$amountUsers = [230, 240, 450, 300, 280, 240, 750];
$revenue_total = "2,000,000 VNĐ";
$products = 100;
$users = $User->getAllUser();

?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">person</i>
                  </div>
                  <p class="card-category">Số lượng người dùng</p>
                  <h3 class="card-title"><?php echo count($users)?>
                    <small>Người</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">person</i>
                    <a href="javascript:;">Xem thêm</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">Thu nhập</p>
                  <h3 class="card-title"><?php echo($revenue_total) ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Trong tháng qua
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">food_bank</i>
                  </div>
                  <p class="card-category">Số lượng sản phẩm</p>
                  <h3 class="card-title"><?php echo $products ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons"></i> Sẵn có trong trang web
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-success">
                  <div class="ct-chart" id="dailySalesChart" data-revenue="<?php echo('[' . implode("," , $revenue) . ']')?>"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Thu nhập hàng ngày</h4>
                  <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> tăng so với tuần trước.</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> Cập nhật sau mỗi lần tải lại trang
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-warning">
                  <div class="ct-chart" id="websiteViewsChart" data-products="<?php echo('[' . implode("," , $amountProduct) . ']')?>"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Lượng sản phẩm được bán ra</h4>
                  <p class="card-category">Số lượng sản phẩm bán ra trong tuần qua</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> Cập nhật sau mỗi lần tải lại trang
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-danger">
                  <div class="ct-chart" id="completedTasksChart" data-users="<?php echo('[' . implode("," , $amountUsers) . ']')?>"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Số lượng người dùng</h4>
                  <p class="card-category">Số lượng người dùng qua các ngày trong tuần</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> Cập nhật sau mỗi lần tải lại trang
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg col-md">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Danh sách người dùng</h4>
                  <p class="card-category">Cập nhật sau mỗi lần tải lại trang</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                    <th scope="col">ID</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Quyền hạn</th>
                    <th scope="col"></th>
                    </thead>
                    <tbody>
                     <?php foreach ($users as &$user){ ?>
                      <tr>
                        <td><?php echo $user['id']?></td>
                        <td><?php echo $user['full_name']?></td>
                        <td><?php echo $user['email']?></td>
                        <td><?php echo $user['role']?></td>
                        <td>
                        <?php
                            if($user['role'] !== "admin") {
                            ?>
                                <span>
                                    <form id="delete-user" action="" method="post">
                                        <input hidden name="user[id]" value="<?php echo $user['id']?>" />
                                        <input hidden name="delete-user" value="1"></form>
                                    <a href="javascript:{}"
                                        onclick="if (!confirm('Are you sure?')) { return false } else {document.getElementById('delete-user').submit();}">Xóa</a>
                                </span> |
                                <?php 
                            }?>
                                <span>
                                    <a href="/admin.php?page=edit_user&user_id=<?php echo $user['id']?>"> Chỉnh sửa </a></span>
                            </td>
                      </tr>
                      <?php }?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    </div>
    <?php
            include 'layouts/admin/footer.php';
        ?>