<?php
global $helper;
$helper->require_user();
?>
<section class="container mt-4">
    <div class="btn-group" role="group" aria-label="Basic example" style="margin-bottom: 10px;">
        <button type="button" class="btn btn-danger">Tất cả</button>
        <button type="button" class="btn btn-primary">Đang giao</button>
        <button type="button" class="btn btn-success">Đã giao</button>
        <button type="button" class="btn btn-secondary">Đã hủy</button>
    </div>
    <fieldset class="main">
        <legend id="title">
            <h3>Danh sách sản phẩm</h3>
        </legend>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Đơn hàng</th>
                    <th>Tổng giá</th>
                    <th>Tình trạng</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        Đơn hàng 1
                    </td>
                    <td>450</td>
                    <td>
                        <span class="badge badge-pill badge-success">Đã giao</span>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        Đơn hàng 2
                    </td>
                    <td>700</td>
                    <td>
                        <span class="badge badge-pill badge-primary">Đang giao</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </fieldset>
</section>