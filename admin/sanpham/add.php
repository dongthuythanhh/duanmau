<div class="row">
        <div class="row frmtitle mb10">
            <h3>THÊM MỚI SẢN PHẨM</h3>
        </div>
        <div class="row frmtitle">
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                <div class="row mb10">
                    Danh mục<br>
                    <select name="iddm">
                        <?php foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div class="row mb10">
                    Tên sản phẩm</label>
                    <input type="text" name="tensp">
                </div>
                <div class="row mb10">
                    Giá sản phẩm</label>
                    <input type="text" name="giasp">
                </div>
                <div class="row mb10">
                    Ảnh sản phẩm</label>
                    <input type="file" name="hinh">
                </div>
                <div class="row mb10">
                    Mô tả sản phẩm</label>
                    <textarea name="mota" cols="30" rows="10"></textarea>
                </div>
                
                <div class="row mb10">
                    <input type="submit" name="themmoi" value="Thêm mới">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
                </div>

                <?php
                    if(isset($thongbao) && ($thongbao!="")) echo $thongbao;
                    
                ?>
            </form>
            
        </div>
        </div>