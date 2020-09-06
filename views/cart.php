<?php
global $helper;
$helper->require_user();
?>
<fieldset class="main">
    <legend id="title" style="padding-top:3%;">
        <h3>Danh sách sản phẩm</h3>
    </legend>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>
                    <img src="https://via.placeholder.com/50x50" alt="book">
                    <span style="margin-left: 10px;">Sản phẩm 1</span>
                </td>
                <td>150</td>
                <td>
                    <div class="form-group" style="width: 100px;">
                        <input type="number" class="form-control" value="1">
                    </div>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>
                    <img src="https://via.placeholder.com/50x50/212" alt="book">
                    <span style="margin-left: 10px;">Sản phẩm 2</span>
                </td>
                <td>200</td>
                <td>
                    <div class="form-group" style="width: 100px;">
                        <input type="number" class="form-control" value="3">
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</fieldset>
<button class="btn btn-danger buy-button" id="buy" type="button">Mua hàng</button>