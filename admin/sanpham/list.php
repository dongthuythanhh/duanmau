<div>
    <div class="row frmtitle mb10">
        <h3>DANH SÁCH SẢN PHẨM</h3>
    </div>
    <form action="index.php?act=listsp" method="post">
        <input type="text" name="kyw">
        <select name="iddm" id="">
            <option value="" selected>Tất cả</option>
            <?php 
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="'.$id.'">'.$name.'</option>';
                }
            ?>
        </select>
        <input type="submit" name="listok" value="GO">
    </form>
    <div  class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table border="1">

                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH</th>
                    <th>GIÁ</th>
                    <th>MÔ TẢ</th>
                    <th>LƯỢT XEM</th>
                    <th>ACTION</th>
                </tr>

                <?php   
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id=".$id;
                    $xoasp = "index.php?act=xoasp&id=".$id;

                    $hinhpath = "../upload/".$img;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='".$hinhpath."' height='80'>";
                    } else {
                        $hinh = "no photo";
                    }

                    echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>'.$img.'</td>
                                <td>'.$price.'</td>
                                <td>'.$mota.'</td>
                                <td>'.$luotxem.'</td>
                                <td>
                                    <a href="'.$suasp.'"><input type="button" value="Sửa"></a> 
                                    <a href="'.$xoasp.'"><input type="button" value="Xóa"></a>
                                </td>
                            </tr>';
                }
                ?>

                    </table>
                </div>
                <div class="row mb">
                    <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                </div>
            </div>
        </div>