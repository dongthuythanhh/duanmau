<div class="row">
    <div class="row frmtitle mb10">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class=" frmcontent">
        <div class="row mb10 frmdsloai">
            <table border="1">
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Nội dung</th>
                    <th>Iduser</th>
                    <th>Idpro</th>
                    <th>Ngày bình luận</th>
                    <th></th>
                </tr>
                <?php
                    foreach ($listbinhluan as $binhluan){
                        extract($binhluan);
                        
                        $xoabl="index.php?act=xoabl&id=".$id;

                        echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$noidung.'</td>
                                <td>'.$iduser.'</td>
                                <td>'.$idpro.'</td>
                                <td>'.$ngaybinhluan.'</td>
                                <td>
                                    </div><a href="'.$xoabl.'"><input type="button" value="Xóa"></a>
                                </td>
                            </tr>';                                 
                    }
                ?>
            </table>
        </div>
        
        <div class="row mb10">
        </div>

    </div>
</div>
