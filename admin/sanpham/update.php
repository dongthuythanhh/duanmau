<!-- extract: để nhập các biến từ một mảng vào trong bảng biểu tượng hiện tại. Nó nhận một mảng array và coi các key như là các tên biến và các value là các giá trị biến
    is_array: hàm kiểm tra 1 biến có phải thuộc kiểu dữ liệu mảng hay không 
    is_file: kiểm tra xem đường dẫn truyền có phải là một tập tin hay không
    basename: trả về tên tập tin từ một đường dẫn
-->
<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath = "../upload/".$img;
        if (is_file($hinhpath)) {
            $hinh = "<img src='".$hinhpath."' height='80'>";
        } else {
            $hinh = "no photo";
        }
?>

    <div class="row">
        <div class="row frmtitle mb10">
            <h3>CẬP NHẬT LOẠI HÀNG HÓA</h3>
        </div>
        <div class="row frmtitle">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <div class="row mb10">
                    Id sản phẩm</label>
                    <input type="text" name="id" value="<?php echo $sanpham["id"]?>">
                </div>

                <div class="row mb10">
                    Danh mục
                    <select name="iddm" id="">
                        <option value="0" selected>Tất cả</option>
                        <?php 
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                if($iddm==$id) $s="selected"; else $s="";
                                echo '<option value="'.$id.'" '.$s.'>'.$name.'</option>';
                            }
                        ?>                           
                    </select>
                </div>

                <div class="row mb10">
                    Tên sản phẩm</label>
                    <input type="text" name="tensp" value="<?php echo $sanpham['name']?>">
                </div>
                <div class="row mb10">
                    Giá sản phẩm</label>
                    <input type="text" name="giasp" value="<?= $price ?>">
                </div>
                <div class="row mb10">
                    Ảnh sản phẩm</label>
                    <input type="file" name="hinh">
                    <?=$hinh?>
                </div>
                <div class="row mb10">
                    Mô tả sản phẩm</label>
                    <textarea name="mota" cols="30" rows="10"><?=$mota?></textarea>
                </div>
                <div class="row mb10">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" name="capnhat" value="Cập nhật">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
                </div>

                <?php
                    if(isset($thongbao) && ($thongbao!="")) echo $thongbao;
                    
                ?>
            </form>
            
        </div>
    </div>