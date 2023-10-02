<?php
    if(is_array($tk)){
        extract($tk);
    }
?>

<div class="row">
    <div class="row frmtitle mb10">
        <h3>CẬP NHẬT KHÁCH HÀNG</h3>
    </div>
    <div class="row frmtitle">
        <form action="index.php?act=updatetk" method="post">
            <div class="row mb10">
                <label for="type">Id tài khoản</label>
                <input type="number" name="id" readonly value="<?= $id;?>">
            </div>

            <div class="row mb10">
                <label for="user">Tên tài khoản</label>
                <input type="text" name="user" value="<?= $user; ?>">
            </div>

            <div class="row mb10">
                <label for="password">Mật khẩu</label>
                <input type="password" name="pass" value="<?= $pass; ?>">
            </div>

            <div class="row mb10">
                <label for="email">Email</label>
                <input type="text" name="email" value="<?= $email; ?>">
            </div>

            <div class="row mb10">
                <label for="address">Địa chỉ</label>
                <input type="text" name="address" value="<?= $address; ?>">
            </div>

            <div class="row mb10">
                <label for="tel">Số điện thoại</label>
                <input type="text" name="tel" value="<?= $tel; ?>">
            </div>

            <div class="row mb10">
                <label for="type">Vai trò</label>
                <select name="role">
                    <option value="0" <?= $role == 0 ? "selected" : ""; ?> >Khách hàng</option>
                    <option value="1" <?= $role == 1 ? "selected" : ""; ?> >Admin</option>
                </select>
            </div>

            <div class="row mb10">
                <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id ;?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listk"><input type="button" value="Danh sách"></a>
            </div>

            <?php
                if(isset($thongbao) && ($thongbao!="")) echo $thongbao;
                
            ?>
        </form>
        
    </div>
</div>