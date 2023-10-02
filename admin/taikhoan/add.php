<div class="row">
    <div class="row frmtitle mb10">
        <h3>THÊM TÀI KHOẢN</h3>
    </div>
    <div class="row frmtitle">
        <form action="index.php?act=addtk" method="post">
            <div class="row mb10">
            Tên người dùng
                <input type="text" name="user" disable>
            </div>
            <div class="row mb10">
                Mật khẩu</label>
                <input type="password" name="pass">
            </div>
            <div class="row mb10">
                Email</label>
                <input type="text" name="email">
            </div>
            <div class="row mb10">
                Địa chỉ</label>
                <input type="text" name="address">
            </div>
            <div class="row mb10">
                Số điện thoại</label>
                <input type="text" name="tel">
            </div>
            <div class="row mb10">
                Vai trò</label>
                <select name="role">
                    <option value="0">Khách hàng</option>
                    <option value="1">Admin</option>
                </select>
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="Thêm mới">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listtk"><input type="button" value="Danh sách"></a>
            </div>

            <?php
                if(isset($thongbao) && ($thongbao!="")) echo $thongbao;
            
            ?>
        </form>
    </div>
</div>