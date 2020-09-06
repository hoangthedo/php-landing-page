<?php
require 'src/user.php';
$User = new User();
if (!empty($_POST["delete-user"])) {
    $user_id = $_POST["user"]['id'];
    $User->destroy($user_id);
}
$users = $User->getAllUser();
?>
<div class="container">
    <div class="title">
        <h1> Quản lý người dùng </h1>
    </div>
    <div class="table-responsive-sm">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Quyền hạn</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
            foreach ($users as &$user){
            ?>
                <tr>
                    <td scope="row"><?php echo $user['id']?></td>
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
                <?php
            }?>
            </tbody>
        </table>
    </div>
</div>